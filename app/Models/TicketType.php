<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function userTicket(){
        return $this->hasMany(UserTicket::class);
    }
}
