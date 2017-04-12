<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = new \App\Models\Tag([
            'name' => '### &#x1f37a; ###',
            'slug' => 'cerveza',
        ]);
        $tags->save();
        $tags = new \App\Models\Tag([
            'name' => '### &#x2615; ###',
            'slug' => 'cafe',
        ]);
        $tags->save();  
        $tags = new \App\Models\Tag([
            'name' => '### &#x1f36c; ###',    
            'slug' => 'dulce',
        ]);
        $tags->save();
        $tags = new \App\Models\Tag([
            'name' => '### &#x1f36d; ###',     
            'slug' => 'chupeta',
        ]);
        $tags->save();
        $tags = new \App\Models\Tag([
            'name' => '### &#127862; ###',
            'slug' => 'mate', 
        ]);
        $tags->save();
        $tags = new \App\Models\Tag([
            'name' => '### &#x1f36a; ###',
            'slug' => 'galleta',
        ]);
        $tags->save();
        $tags = new \App\Models\Tag([
            'name' => '### &#x1f379; ###',
            'slug' => 'bebida',
        ]);
        $tags->save();           
        $tags = new \App\Models\Tag([
            'name' => '### &#x1f36b; ###',
            'slug' => 'chocolate',
        ]);
        $tags->save(); 
        $tags = new \App\Models\Tag([
            'name' => '### &#127855; ###',
            'slug' => 'mermelada',   
        ]);
        $tags->save();  
        $tags = new \App\Models\Tag([
            'name' => '### &#127856; ###',
            'slug' => 'harina',
        ]);
        $tags->save(); 
        $tags = new \App\Models\Tag([
            'name' => '### &#x1f525; ###',  
            'slug' => 'chili',
        ]);
        $tags->save();                                 
    }
}