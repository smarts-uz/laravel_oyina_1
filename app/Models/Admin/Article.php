<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Article extends Model
{
    use Resizable;

    public function category() {
        return $this->belongsTo(ArticleCategory::class);
    }
}
