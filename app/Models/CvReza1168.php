<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvReza1168 extends Model
{
    protected $table = 'biodata_1168';

    protected $fillable = [
        'nama', 'nim', 'kelas', 'email', 'no_hp', 'alamat',
        'tentang_saya', 'pendidikan', 'pengalaman', 'keahlian', 'foto'
    ];
}
