<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\View;
use App\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PagesController extends Controller
{

  public function index() {
    return \View::make('pages.landing')->with(array(
      'status' => '',
      'status_message' => ''
    ));
  }

  public function about() {
    return \View::make('pages.about');
  }

  public function blog() {
    // Get all PUBLISHED blog posts, paginated to 5 results
    $posts = DB::table('blog_posts')
      ->join('users', 'users.id', '=', 'blog_posts.author_id')
      ->where('status', 'PUBLISHED')
      ->simplePaginate(5);

    // $fields = ['a', 'b', 'c', 'N'];
    // $object = Model::find($id);
    // return collect($object->toArray())->except($fields);

    // dd($posts);

    return \View::make('pages.blog')->with('posts', $posts);
  }

  // public function calendar() {
  //   $now = Carbon::now();
  //   $dtStr = $now->year;
  //
  //   return \View::make('pages.calendar', array('year' => $dtStr));
  // }

  public function resources() {
    return \View::make('pages.resources');
  }

  public function people() {
    return \View::make('pages.people');
  }

  public function events() {
    return \View::make('pages.events');
  }

}
