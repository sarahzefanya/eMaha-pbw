<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    //membaca data
    protected $table = 'mahasiswa';

    //memanipulasi data : atribut yang boleh diinputkan 
    protected $fillable = [
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat'
    ];
}
