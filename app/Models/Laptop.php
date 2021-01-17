<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $table = 'laptop';
    public $timestamps = false;
    protected $fillable = ['nama', 'ram', 'memory_internal','resolusi_layar','baterai','berat','harga'];
}
