<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $table = 'crew';
    protected $primaryKey = 'crew_id';
    protected $fillable = ['nama_crew', 'divisi_crew', 'nominal_fee'];
    
    public function UJ()
    {
        return $this->belongsToMany(UJ::class, 'crew_uj', 'crew_id', 'uj_id');
    }
    
}
