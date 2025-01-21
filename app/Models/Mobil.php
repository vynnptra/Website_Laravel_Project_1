<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobil extends Model
{
    use SoftDeletes;
    protected $table = 'Mobil';
    protected $PrimaryKey = 'id';
    protected $fillable = ['id','user_id', 'no_polisi', 'merk', 'jenis', 'kapasitas', 'harga', 'foto'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
