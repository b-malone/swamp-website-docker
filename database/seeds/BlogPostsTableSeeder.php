<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // // SETUP Categories for POSTS first
      // $this->call([
      //   CategoriesTableSeeder::class
      // ]);

      // id, author_id, category_id, title, seo_title, excerpt,
      // body, image, slug, meta_description, status, featured,
      // created_at, updated_at, tags, published_date
      // ADD Existing Post(s)
      DB::table('blog_posts')->insert([
        'id' => 2,
        'author_id' => 2,
        'category_id' => 3,
        'title' => 'Initial Findings Report',
        'seo_title' => NULL,
        'excerpt' => 'Our first report is out! Read about our initial findings from 2009.',
        'body' => '<p>Our first report is out! Read about our initial findings from 2009 in the &lt;span md-colors="{color:"accent"}"&gt;Clark County Amphibians Report&lt;/span&gt; by clicking the link above.</p>
<p>&lt;a class="swamp-btn submit" href="#" href="/content/documents/clark_county_amphibian_report.pdf" target="_self" download="report_2009.pdf"&gt;Download Amphibians Report&lt;/a&gt;</p>
<p>&nbsp;</p>',
        'image' => 'blog_posts/March2019/bkiu6kUdWU8SZGMbwvC7.png',
        'slug' => 'initial-findings-report',
        'meta_description' => '2009-survey-report',
        'status' => 'PUBLISHED',
        'featured' => 0,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        'tags' => 'report, survey',
        'published_date' => Carbon::now()
      ]);
    }
}
