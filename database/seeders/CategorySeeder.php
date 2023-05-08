<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $categorias=[
            'Accion'=>'descripcion de accion',
            'Drama'=>'descripcion de drama',
            'Comedia'=>'descripcion de comedia',
            'Documental'=>'descripcion de documental'];
        foreach($categorias as $k=>$v){
            Category::create([
                'nombre'=>$k,
                'descripcion'=>$v
            ]);
        }
    }
}
