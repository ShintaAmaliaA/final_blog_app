<?php

namespace Database\Seeders;

use App\Models\Task;
use DateTime;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Task::insert([
            'name' => 'Menulis 2 Artikel',
            'description' => 'Artikel Blog',
            'assigned_to' => 'admin',
            'due_date' => new DateTime()
        ]);
    }
}
