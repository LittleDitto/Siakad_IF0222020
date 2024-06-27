<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $fillable = ['nama_fakultas', 'nama_pimpinan'];
    public function programstudis()
    {
        return $this->hasMany(ProgramStudi::class,'kode_fakultas');
    }
}
