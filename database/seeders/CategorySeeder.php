<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        $categories = ['Abbigliamento', 'Articoli per la casa', 'Fotografia', 'Elettronica', 'Libri', 'Giardinaggio', 'Sport', 'Strumenti musicali', 'Videogiochi'];
        foreach($categories as $categorie){
            DB::table('categories')->insert([
                'name' => $categorie,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        };
    }
}
