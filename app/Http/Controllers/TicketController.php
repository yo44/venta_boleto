<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use App\Models\Tickets;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller

{
    
    public function index()
    {
        $boleto = Tickets::paginate(5);
        return view('boleto.index', compact('boleto'));

        $users = User::with('tickets')->get();
        return view('users.index', compact('users'));

        $boleto = Flights::paginate(5);
        return view('boleto.index', compact('boleto'));
     
    }
    public function create()

    {
        $flight = Flights::all();
        return view('boleto.create', compact('flight'));

        $users = User::all();
        return view('boleto.create', compact('users'));

        $ticket = Tickets::all();
        return view('boleto.create', compact('ticket'));
    }

   
    public function store(Request $request)
    {
        Tickets::create($request->all());
        return redirect()->back();
    }
}
