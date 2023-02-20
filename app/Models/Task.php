<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //membuat nama model
    // protected $table = 'tasks'

    //bagian yang harus diisi
    protected $fillable = ['task', 'user'];

    //bagian yang kita cegah
    protected $guarded = [];
}
