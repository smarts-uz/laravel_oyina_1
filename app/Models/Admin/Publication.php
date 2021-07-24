<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use App\Models\Admin\PublicationCategory;

class Publication extends Model
{
    use Resizable;

    public function category() {
        return $this->belongsTo(PublicationCategory::class);
    }
}
