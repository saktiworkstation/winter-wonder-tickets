<?php

namespace App\Models;

use App\Models\TicketType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserTicket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ticketType(){
        return $this->belongsTo(TicketType::class, 'ticket_type_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
