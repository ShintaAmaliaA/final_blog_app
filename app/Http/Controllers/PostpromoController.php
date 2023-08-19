<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostCategory;
use App\Models\PostPromo;
use App\Models\PromoCategory;
use Illuminate\Http\Request;

class PostpromoController extends Controller
{
        public function index()
    {
        $postpromos = PostPromo::all();
        return view('promo.postpromo.index', compact('postpromos')); // Use 'postpromos' instead of 'postpromo'
    }

    public function create()
    {
        $categories = Category::all();
        return view('promo.postpromo.create', ['categories' => $categories]);
    }


    public function store(Request $request)
    {
        // Mengelola upload gambar jika ada
        $images = null;
        if ($request->file('images')) {
            $file = $request->file('images');
            $filename = date('dmY') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $images = $filename;
        }

        // Membuat post promo baru dengan data dari form
        $postprom = PostPromo::create([
            'title' => $request->title,
            'body' => $request->body,
            'images' => $images,
            'description' => $this->createDescription($request->title),
            'start_date' => now(),
            'end_date' => null,
            'slug' => $this->createSlug($request->title),
        ]);

        $data = [];
        if($request->category_ids) {
            foreach($request->category_ids as $category_id) {
                $row = [
                    'id' => $postprom->id,
                    'category_id' => $category_id,
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time())
                ];
                array_push($data, $row);
            }
        }

        PromoCategory::insert($data);
        return redirect()->route('promo.postpromo.index');
    }

    public static function createSlug($str, $delimiter = '-')
    {
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    }
    // Metode untuk menampilkan detail satu post (opsional)
    public function show(PostPromo $postpromo)
    {
        // Implementasi untuk tampilan satu post (opsional)
    }

    public function edit(string $id)
    {
        // Mengambil semua data kategori dan data post promo yang akan diedit
        $categories = Category::all();
        $postprom = PostPromo::find($id);
        return view('promo.postpromo.edit', compact('postprom', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        // Mencari post promo yang akan diupdate
        $postprom = PostPromo::find($id);

        // Mengupdate data post promo dengan data dari form
        $postprom->title = $request->title;
        $postprom->description = $this->createDescription($request->title);
        $postprom->start_date = $request->start_date;
        $postprom->end_date = $request->end_date;

        // Mengelola upload gambar jika ada
        if ($request->file('images')) {
            $file = $request->file('images');
            $filename = date('dmYhis') . rand(0, 100) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $postprom->images = $filename;
        }

        // Mengupdate nilai slug
        $postprom->save();

        PostCategory::where('id', $postprom->id)->delete();

        $data = [];
        foreach($request->category_ids as $category_id) {
            $row = [
                'id' => $postprom->id,
                'category_id' => $category_id,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ];
            array_push($data, $row);
        }
        PromoCategory::insert($data);

        // Mengarahkan kembali ke halaman index setelah penyimpanan berhasil
        return redirect()->route('promo.postpromo.index');
    }

    public function destroy(string $id)
    {
        // Menghapus post promo berdasarkan ID
        PostPromo::destroy($id);

        // Mengarahkan kembali ke halaman index setelah penghapusan berhasil
        return redirect()->route('promo.postpromo.index');
    }

    public function createDescription($title)
    {
        return 'Description for ' . $title;
    }

}

