<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spice;

class SpiceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $spices = Spice::where('name', 'like', '%' . $request->search . '%')
                           ->orWhere('description', 'like', '%' . $request->search . '%')
                           ->get();
        } else {
            $spices = Spice::all();
        }

        return view('spices.index', compact('spices'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Spice::create($validatedData);
        return redirect()->back();
    }

    public function create()
    {
        return view('spices.create');
    }

    public function show(Spice $spice)
    {
        return view('spices.show', compact('spice'));
    }
}









