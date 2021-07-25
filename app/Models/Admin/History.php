<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class History extends Model
{
    use Resizable;
    protected $table = 'history';

}
