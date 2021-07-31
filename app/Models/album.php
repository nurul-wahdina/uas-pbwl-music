<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;
    protected $table = "tb_album";
    protected $primaryKey = 'album_id';
    protected $fillable = ['album_name'];
}
