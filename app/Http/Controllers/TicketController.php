<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        //
    }

    public function detail(){
        return view('tickets.detail');
    }
}
