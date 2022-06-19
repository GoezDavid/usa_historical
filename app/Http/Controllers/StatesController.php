<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StatesController extends Controller
{
    public function index() {
        $states = State::all();

        return view('states.index', compact('states'));
    }

    public function show(int $state) {

        $state = State::find($state);
        return view('states.show', compact('state'));
    }
}
