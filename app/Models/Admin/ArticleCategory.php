<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class ArticleCategory extends \TCG\Voyager\Models\Category
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'article_categories';

    protected $fillable = ['slug', 'name'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}
