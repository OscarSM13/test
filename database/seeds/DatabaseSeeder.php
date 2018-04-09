<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blog::class, 15)->create()->each(function ($u) {
            $u->category()->associate(factory(App\BlogCategory::class)->make()->id)->save();
        });
    }
}
