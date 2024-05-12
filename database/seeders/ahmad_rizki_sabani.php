<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ahmad_rizki_sabani extends Seeder
{

    public function run(): void
    {
        DB::table('ahmad_rizki_sabanis')->insert([
            'nim' => '231351011',
            'nama' => 'Ahmad Rizki Sabani',
            'kelas' => 'Pagi A',
            'jenis_kelamin' => 'laki - laki'
        ]);
    }
}
