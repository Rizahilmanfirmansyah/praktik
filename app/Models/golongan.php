<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class golongan extends Model
{
    use HasFactory;
    protected $table = "golongan";
    protected $fillable = [
        'id' ,'kode_golongan','nama_golongan'
    ];

    /**
     * Get the golongan that owns the golongan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function karyawan()
    {
        return $this->hasMany(karyawan::class, 'id', 'nama_golongan');

    }
}
