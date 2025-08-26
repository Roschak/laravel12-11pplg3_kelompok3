<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Member::create([
            'name' => 'Ahmad Rizki',
            'role' => 'Ketua Tim',
            'description' => 'Seorang pemimpin yang visioner dengan pengalaman 5 tahun di industri teknologi.',
            'image' => 'cardhafidh.jpg',
            'linkedin' => '#',
            'github' => '#',
            'twitter' => '#',
        ]);

        // Tambah anggota lain juga
    }

}

