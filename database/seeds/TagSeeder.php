<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = array(
            [
            'name' => 'sale',
            'description' => 'Any business can have this tag',
            'slug' => 'sale',
            'approved' => 1
            ],
            [
            'name' => 'service',
            'description' => 'Any business can have this tag',
            'slug' => 'service',
            'approved' => 1
            ],
            [
                'name' => 'men',
                'description' => 'Any product can have this tag',
                'slug' => 'men',
                'approved' => 1
            ],
            [
                'name' => 'women',
                'description' => 'Any product can have this tag',
                'slug' => 'women',
                'approved' => 1
            ],
            [
                'name' => 'fashion',
                'description' => 'Any service can have this tag',
                'slug' => 'fashion',
                'approved' => 1
            ],
            [
                'name' => 'event',
                'description' => 'Any service can have this tag',
                'slug' => 'event',
                'approved' => 1
            ]
            );
        foreach($tags as $tag){
            Tag::create($tag);
        }
        

    }
}
