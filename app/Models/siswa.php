<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";    
    protected $primaryKey = 'NIK';
    protected $fillable = ['NIK','nama','alamat','foto'];
}
