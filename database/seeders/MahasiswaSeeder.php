<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = [
            [
                'nim' => '21110533',
                'nama' => 'Moch Ihsan Saepulloh',
                'jurusan' => 'S1 Teknik Informatika',
            ],
            [
                'nim' => '21110336',
                'nama' => 'Moh Advie Rivaldy',
                'jurusan' => 'S1 Teknik Informatika',
            ],
            [
                'nim' => '21110972',
                'nama' => 'Zahratul Mardiyah',
                'jurusan' => 'S1 Teknik Informatika',
            ],
        ];

        Mahasiswa::insert($mahasiswas);
    }
}
