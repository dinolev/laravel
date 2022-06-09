<?php

namespace App\Http\Controllers;

use App\Models\Tournaments;
use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    public function index()
    {
        $contacts = Tournaments::all();
        return view('tournaments.index')->with('tournaments', $contacts);
    }


    public function create()
    {
        return view('tournaments.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Tournaments::create($input);
        return redirect('tournaments')->with('flash_message', 'Contact Addedd!');
    }


    public function show($id)
    {
        $contact = Tournaments::find($id);
        return view('tournaments.show')->with('tournaments', $contact);
    }


    public function edit($id)
    {
        $contact = Tournaments::find($id);
        return view('tournaments.edit')->with('tournaments', $contact);
    }


    public function update(Request $request, $id)
    {
        $contact = Tournaments::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('tournaments')->with('flash_message', 'Contact Updated!');
    }


    public function destroy($id)
    {
        Tournaments::destroy($id);
        return redirect('tournaments')->with('flash_message', 'Contact deleted!');
    }
    public function addNewTournament()
    {
        return view('tournaments.create');
    }
}