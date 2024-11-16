<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert(
            [
                ['nombre'=>'Llovas',
                'apellido'=>'Jimenez',
                'correo'=>'Llovascript@gmail.com',
                'tel'=>'4428139548'
                ],
                ['nombre'=>'Llovas',
                'apellido'=>'Jimenez',
                'correo'=>'Llovascript@gmail.com',
                'tel'=>'4428139548'
                ],
                ['nombre'=>'Llovas',
                'apellido'=>'Jimenez',
                'correo'=>'Llovascript@gmail.com',
                'tel'=>'4428139548'
                ],
            ]
        );
    }
}
