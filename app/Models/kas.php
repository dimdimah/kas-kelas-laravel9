<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kas extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'nama', 'tanggal', 'keterangan'];
    protected $table = 'kas';
    public $timestamps = false;
}