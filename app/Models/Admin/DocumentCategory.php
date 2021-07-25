<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class DocumentCategory extends Model
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'document_categories';

    protected $fillable = ['slug', 'name'];
}
