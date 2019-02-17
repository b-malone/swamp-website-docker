<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\View;
use Carbon\Carbon;

class PagesController extends Controller
{

  public function index() {
    return \View::make('pages.landing');
  }

  public function about() {
    return \View::make('pages.about');
  }

  public function blog() {
    return \View::make('pages.blog');
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
    // $now = Carbon::now();
    // $dtStr = $now->year;

    return \View::make('pages.events');
  }

}
