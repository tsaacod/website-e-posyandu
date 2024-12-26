<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibuhamil extends Model
{
    use HasFactory;
    
    protected $table = 'ibu_hamil';
    protected $fillable = ['Nama','TanggalLahir','NoTelepon','Alamat'];
 
    
}
