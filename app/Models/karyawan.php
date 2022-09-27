<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "karyawan";
    protected $fillable = [
        'nip', 'nik', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'telpon', 'agama', 'status_nikah', 'alamat', 'golongan_id', 'foto'
    ];

    /**
     * Get the user that owns the karyawan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function golongan()
    {
        return $this->hasOne(golongan::class, 'id','golongan_id');
    }
}
