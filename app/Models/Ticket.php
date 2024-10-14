<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'ticket_type_id',
        'name',
        'note',
        'address',
        'status',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function ticket_type()
    {
        return $this->belongsTo(Ticket_Type::class);
    }
}
