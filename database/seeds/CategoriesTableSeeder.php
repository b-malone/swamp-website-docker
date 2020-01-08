<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // id, parent_id, order, name, slug, created_at, updated_at
      DB::table('categories')->insert([
          'id' => 4,
          'parent_id' => NULL,
          'order' => 1,
          'name' => 'Report',
          'slug' => 'category-report',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

      DB::table('categories')->insert([
          'id' => 5,
          'parent_id' => NULL,
          'order' => 2,
          'name' => 'News',
          'slug' => 'category-news',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);

      DB::table('categories')->insert([
          'id' => 6,
          'parent_id' => NULL,
          'order' => 3,
          'name' => 'Event',
          'slug' => 'category-event',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
    }
}
