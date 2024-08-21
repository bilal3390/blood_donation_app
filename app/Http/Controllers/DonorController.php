<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::all();
        return view('donors.index', compact('donors'));
    }

    public function create()
    {
        return view('donors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email|unique:donors',
            'age' => 'required|integer',
            'blood_group' => 'required',
            'gender' => 'required',
            'contact' => 'required|unique:donors',
            'address' => 'required',
        ]);

        Donor::create($request->all());

        return redirect('/')->with('success', 'Donor added successfully.');
    }

    public function show($id)
    {
        $donor = Donor::findOrFail($id);
        return view('donors.show', compact('donor'));
    }
}
