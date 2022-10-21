<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['film','serie TV','food','moda','digitale','sport'];
        foreach($categories as $name){
            $c = new Category();
            $c->name = $name;
            $c->slug = Str::slug($name);

            $c->save();
        }
    }
}
