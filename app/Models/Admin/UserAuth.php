<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuth extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'password'
    ];
}
