<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\office;
use App\Models\Money;

class Money_Controller2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $office = office::orderby('id' , 'asc')->get();
        // ddd($money);



        return view('money.search' , [
            'offices' => $office
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , office $office , money $money)
    {
        // $office = office::where('name_office' , 'like' , $request->name)->get();
        // ddd($office->name_office);
        return to_route('search.show' , $request->name);
    }

    /**
     * Display the specified resource.
     */
    public function show(money $money , Request $request)
    {
        $moneys = money::where('office_send' , 'like' , $request->name);
        ddd($moneys);
        return view('money.show_s' , [
            'moneys' => $moneys
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
