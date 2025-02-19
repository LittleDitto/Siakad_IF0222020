<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
        'kode_fakultas',
        'fakultas_id', // Pastikan fakultas_id ada di fillable
    ];
    
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'kode_fakultas', 'id');
    }
}
