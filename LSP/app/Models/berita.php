<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class berita extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'beritas';
    protected $fillable = ['judul', 'description', 'image', 'user_id', 'tanggal'];
}
