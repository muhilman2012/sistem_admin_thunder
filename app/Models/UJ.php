<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UJ extends Model
{
    use HasFactory;

    protected $table = 'uj';
    protected $primaryKey = 'uj_id';
    protected $fillable = ['nama_event', 'venue', 'tanggal_show', 'fee_pic', 'fee_operator', 'fee_transport', 'notes'];

    public function crew()
    {
        return $this->belongsToMany(Crew::class, 'crew_uj', 'uj_id', 'crew_id');
    }

    public function getTotalFee()
    {
        return $this->crew()->sum('nominal_fee');
    }
}
