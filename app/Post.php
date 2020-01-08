<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'blog_posts';

  // protected $fillable = [];

  /**
   * Get the category associated with the post.
   */
  public function category() {
    return $this->hasOne('App\Category');
  }

}
