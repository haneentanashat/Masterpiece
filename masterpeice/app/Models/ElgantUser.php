<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElgantUser extends Model
{
    use HasFactory;
    protected $table ='elgant_users';
    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'address',
        'email',
        'password',
        'role'
     ];
}
