<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory,HasUuids;
    protected $fillable = ['npm','nama','tempat_lahir','tanggal_lahir','foto','prodi_id'];
    protected $table = 'mahasiswa';

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
