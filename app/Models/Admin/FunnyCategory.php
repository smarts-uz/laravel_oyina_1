<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class FunnyCategory extends Model
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'funny_categories';

    protected $fillable = ['slug', 'name'];
}
