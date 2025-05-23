<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Task::create([
            'title' => 'Belajar PHP',
            'date' => now()->toDateString(),
            'completed' => false,
            'status' => 'Belum',
        ]);

        Task::create([
            'title' => 'Kerjakan tugas UX',
            'date' => now()->addDay()->toDateString(),
            'completed' => true,
            'status' => 'Selesai',
        ]);
    }
}
