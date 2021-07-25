<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use App\Models\Admin\FunnyCategory;

class Funny extends Model
{
    use Resizable;

    public function category() {
        return $this->belongsTo(FunnyCategory::class);
    }
}
