<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class PublicationCategory extends \TCG\Voyager\Models\Category
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'publication_categories';

    protected $fillable = ['slug', 'name'];

}
