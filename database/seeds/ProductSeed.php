<?php

use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(40),
            'text' => Str::random(100),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(40),
            'text' => Str::random(100),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(40),
            'text' => Str::random(100),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(40),
            'text' => Str::random(100),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(40),
            'text' => Str::random(100),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(40),
            'text' => Str::random(100),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(40),
            'text' => Str::random(100),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(40),
            'text' => Str::random(100),
        ]);

    }
}
