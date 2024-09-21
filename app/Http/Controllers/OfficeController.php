<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\office;
use App\Models\Money;


class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $offices = office::all();

        // $offices->create([
        //     'name_office' => 'hama office',
        //     'address' => 'Jl. Hama No 123',
        //     'country' => 'Hama',
        //     'amount' => '2000$'
        // ]);
        // $offices = office::create([
        //     'name_office' => 'hama office',
        //     'address' => 'Jl. Hama No 123',
        //     'country' => 'Hama',
        //     'amount' => 2000,
        // ]);
        // ddd($offices);
        $offices = office::orderby('id' , 'asc')->get();

        return view('offices.index' , [
            'officecol' => $offices,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , office $office)
    {
        $request->validate([
            'name_office' => 'required|max:80|unique:offices',
            'address' => 'required|bail|max:200',
            'country' => 'required|bail|max:80',
            'amount' => 'required|max:20|',
        ]);
        $office = office::create([
            'name_office' => $request->name_office,
            'address' => $request->address,
            'country' => $request->address,
            'amount' => $request->amount
        ]);
        $office->save();

        return to_route('office.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(office $office)
    {
        return view('offices.edit',[
            'office' => $office
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, office $office)
    {
        $request->validate([
            'name_office' => 'required|max:80',
            'address' => 'required|bail|max:200',
            'country' => 'required|bail|max:80',
            'amount' => 'required|max:20',
        ]);
        $office->update([
            'name_office' => $request->name_office,
            'address' => $request->address,
            'country' => $request->country,
            'amount' => $request->amount
        ]);

        return to_route('office.index' , $office );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(office $office)
    {
        $office->delete();
        return to_route('office.index' , $office)->with("success" , "the office was deleted");
    }
}
