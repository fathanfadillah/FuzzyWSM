<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    use HasFactory;
    protected $table = 'bobots';
    public $timestamps = false;
    protected $fillable = [ 'bobot_ram', 'bobot_memory_internal','bobot_resolusi_layar','bobot_berat','bobot_baterai','bobot_harga'];
}
