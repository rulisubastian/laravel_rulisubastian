<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['nama', 'alamat', 'email', 'telepon'];

    public function patients() {
        return $this->hasMany(Patient::class);
    }
}
