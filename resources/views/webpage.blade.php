<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/style.css" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .debug {
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <!-- HAEDER -->
    <header class="position-fixed w-100 transition text-white bg-warning">
        <div class="d-flex p-4 container">
            <a href="{{ route('webpage') }}" class="d-flex text-decoration-none">
                <img src="{{ asset('img/Logo Scarwash Warna Baru.JPG') }}" alt="Logo Perusahaan" style="width: 80px; height: 50px; border-radius: 10px;">
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="{{ route('location.index') }}" class="btn text-white">
                    Location
                </a>
                <a href="{{ route('blog.public_pages.homepage') }}" class="btn text-white">
                    Blog
                </a>
                <a href="{{ route('price.index') }}" class="btn btn-dark">
                    PRICE LIST
                </a>
            </div>

            <!-- RIGHT MOBILE MENU ICON -->
            <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
            <div onclick="showMenu()" class="pointer ms-auto">
                X
            </div>

            <!-- MENU -->
            <a href="{{ route('location.index') }}" class="btn text-white">
                Location
                <hr />
            </a>
            <a href="{{ route('blog.public_pages.homepage') }}" class="btn text-white">
                Blog
                <hr />
            </a>
            <div>
                <a href="{{ route('price.index') }}" class="btn btn-light w-100">PRICE LIST</a>
            </div>
        </div>
    </header>

    <!-- SECTION TYPE 1 : HERO -->
    <section class="app-section-hero">
        <div class="container">
            <div class="row">
                <!-- LEFT IMAGE -->
                <div class="col-lg-4 col-12">
                    <img class="w-100 app-hero-img"
                        src="{{ asset('img/1.JPG') }}">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 col-12 my-auto d-grid gap-4" id="about-us">
                    <div class="d-grid gap-4 app-hero-first-content">
                        <h1 class="mt-5">Solusi Optimal untuk Merawat Barang Berharga Anda</h1>
                        <div>
                            Kami memberikan sentuhan ahli untuk perawatan sepatu dan tas kesayangan Anda. Kami menawarkan penanganan perawatan secara profesional menggunakan alat dan bahan berkualitas. Jangan lewatkan kesempatan untuk mendapatkan informasi terbaru seputar Sacar Wash dengan memasukkan email Anda. Bergabunglah dengan kami dan rasakan perbedaan pada sepatu dan tas Anda!
                        </div>
                        <div>
                            <form class="d-flex gap-2">
                                <input class="app-input flex-grow-1" placeholder="Enter your email">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div style="margin-top: 25px">
                        <b><h4>Kami Telah Melayani Pelanggan dari kota Surabaya hingga Sidoarjo</h4></b>
                        <div class="row gap-4 mt-4">
                            <div class="col">
                                <b>2 Kota</b>
                                <p>tersedia dikota Surabaya & Sidoarjo</p>
                            </div>
                            <div class="col">
                                <b>100.000+</b>
                                <p>pasang sepatu telah ditangani</p>
                            </div>
                            <div class="col">
                                <b>100.000+</b>
                                <p>pelanggan puas dengan layanan Kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 2 -->
    <section class="bg-black text-white py-5">
        <div class="container">
            <div class="d-flex">
                <h1>Promo Terbaik Untuk Anda</h1>
                <a class="btn text-white ms-auto">Lihat Semua Promo</a>
            </div>
            <div class="row mt-4 gy-4">
                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="{{ asset('img/promo1.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Promo Akhir Bulan</b>
                        <a class="btn btn-light" href="https://www.Whatsapp.com/+6281259899595">Hubungi Kami</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="{{ asset('img/promo2.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Special Promo</b>
                        <a class="btn btn-light" href="https://www.Whatsapp.com/+6281259899595">Hubungi Kami</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="{{ asset('img/promo3.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Promo Ramadhan</b>
                        <a class="btn btn-light" href="https://www.Whatsapp.com/+6281259899595">Hubungi Kami</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover"
                        src="{{ asset('img/promo4.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Promo Novroblem</b>
                        <a class="btn btn-light" href="https://www.Whatsapp.com/+6281259899595">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 3 -->
    <section class="container py-5 container d-grid gap-4">
        <div class="row">
            <div class="col">
                <h2><b>Bagaimana Kami Melakukan Perawatan untuk Barang Kesayangan Anda??</b>
                </h2>
            </div>
            <div class="col">
                "Kami adalah penyedia jasa perawatan sepatu No <b>1</b> di Surabaya dan Sidoarjo yang memiliki
                 dan telah memiliki 7 offline store yang bisa dikunjungi secara langsung."
            </div>
        </div>

        <div>
            <img style="height:400px;" class="w-100 object-fit-cover rounded-3"
                src="{{ asset('img/gbr.jpg') }}">
        </div>

        <div class="row">
            <div class="col-lg-3">
                <h3>Free PickUP & Delivery</h3>
                <p>
                    Khusus Wilayah SUrabaya, Min 3 Pasang Sepatu</p>
            </div>

            <div class="col-lg-3">
                <h3>Expert Technician</h3>
                <p>Ahli dalam industri perawatan sepatu dengan pengalaman yang sudah dibuktikan dengan banyaknya pelanggan</p>
            </div>

            <div class="col-lg-3">
                <h3>Garansi Layanan</h3>
                <p>Jaminan garansi apabila terjadi kerusakan selama layanan</p>
            </div>

            <div class="col-lg-3">
                <h3>Customer Service</h3>
                <p>
                    Customer Service yang responsif siap membantu Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 4 -->
    <section class="container py-5">
        <div class="text-center">
            <h1>Layanan Kami</h1>
            <p><b>Kami menyediakan beragam layanan perawatan untuk Sepatu dan Tas kesayangan Anda,
                yang akan ditangani oleh tim berpengalaman dan profesional kami.</b></p>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('img/3.jpg') }}" style="max-width: 300px; max-height: 200px;">
                <div class="py-2 d-grid gap-2">
                    <h2>Deep Cleaning</h2>
                    <br>
                    <p>Perawatan pembersihan sepatu secara detail dan menyeluruh pada seluruh bagian.</p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('img/5.jpg') }}" style="max-width: 300px; max-height: 200px;">
                <div class="py-2 d-grid gap-2">
                    <h2>Premium Treatment Perawatan</h2>
                    <p>
                        Perawatan yang ditujukan untuk material-material khusus dalam pengerjaanya serta
                        menggunakan bahan khusus dalam setiap produknya.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 rounded-3">
                <img class="w-100 object-cover"
                    src="{{ asset('img/4.jpg') }}" style="max-width: 300px; max-height: 200px;">
                <div class="py-2 d-grid gap-2">
                    <h2>Repaint</h2>
                    <br>
                    <p>Perawatan restorasi warna dengan penggunaan cat khusus yang ditujukan untuk
                        mengembalikan warna awal sepatu seperti semula.</p>
                </div>
            </div>
        </div>

        <div class="text-center py-2">
            <a class="btn btn-dark">READ MORE</a>
        </div>
    </section>



    <!-- SECTION TYPE 5 : EMBED MAP -->
    <section class="bg-black py-5 text-center">
        <div class="text-white">
            <h1>OUR LOCATION</h1>
            <p>Find us here</p>
        </div>
        <div class="container">
            <div>
                <iframe class="rounded-3 w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.232240516348!2d112.71302179999999!3d-7.3277924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc9f97907397%3A0x1647673e6093a3e9!2sJl.%20Manunggal%20Kebonsari%20No.5%2C%20Kebonsari%2C%20Kec.%20Jambangan%2C%20Surabaya%2C%20Jawa%20Timur%2060233!5e0!3m2!1sen!2sid!4v1689684528417!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 6 : GALLERY -->
    <section class="py-5 bg-black text-white">
        <div class="d-flex container">
            <h1>Gallery</h1>
            <a class="btn text-white ms-auto my-auto">More ></a>
        </div>

        <div class="row gx-4 mt-4">
            <img style="height:300px;" class="col-2 object-fit-cover"
                src="{{ asset('img/tes5.jpg') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('img/tes4.jpg') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('img/tes3.jpg') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('img/tes2.jpg') }}">
            <img style="height:300px;" class="col-1 object-fit-cover"
                src="{{ asset('img/tes1.jpg') }}">
        </div>

        <div class="row gx-4 mt-4">
            <img style="height:300px;" class="col-1 object-fit-cover"
                src="{{ asset('img/dono4.jpg') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('img/dono2.jpg') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('img/dono.jpg') }}">
            <img style="height:300px;" class="col-3 object-fit-cover"
                src="{{ asset('img/dono3.jpg') }}">
            <img style="height:300px;" class="col-2 object-fit-cover"
                src="{{ asset('img/dono5.jpg') }}">
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <p>
                    <b>Cuci Sepatu No.1 di SURABAYA | Sedjak 2016 </b>
                </p>
                <b>Contact:</b>
                <p>+6281259899595</p>
                <b>IG</b>
                <p>scar.wash</p>
            </div>

            <div class="col-lg-8">
                <p>Kami adalah penyedia jasa perawatan sepatu No 1 di Surabaya dan Sidoarjo yang memiliki dan telah memiliki 7 offline store yang bisa dikunjungi secara langsung
                    Kami memberikan sentuhan ahli untuk perawatan sepatu dan tas kesayangan Anda.</p>
                <b>Office</b>
                <p>
                    Tersedia 5 offline store yang tersebar di surabaya dan 2 di Sidoarjo.
                </p>
                <div class="d-flex justify-content-between">
                    <b><a href="#about-us">About us</a></b>
                    <b><a href="https://www.Whatsapp.com/+6281259899595">Contact Us</a></b>
                    <b><a href="#hire-us">Hire Us</a></b>
                </div>
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright by Peduli Digital x Yes Tech : by Rico Arisandy
        </div>
    </footer>

    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
            // Check the scroll position
            const scrollPosition = window.scrollY;

            // Change the background color if scroll position is 100 or more
            if (scrollPosition >= 100) {
                header.style.backgroundColor = 'black';
            } else {
                header.style.backgroundColor = 'transparent'; /
            }
        });

        /**
         * SCRIPT TO SHOW MOBILE MENU
         **/
        const menu = document.getElementById('menu')

        function showMenu() {
            if (menu.classList.contains('show')) {
                menu.classList.remove("show")
                menu.classList.add("hide")
            } else {
                menu.classList.remove("hide")
                menu.classList.add("show")
            }
        }

    </script>
</body>

</html>
