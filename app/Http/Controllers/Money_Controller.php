<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\office;
use App\Models\Money;

class Money_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $money = Money::orderby('id' , 'asc')->get();

        return view('money.index' , [
            'moneys' => $money
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $office = office::all();
        return view('money.create' , [
            'offices' => $office,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Money $money , office $office)
    {
        // ddd($request->office_send);
        $request->validate([
            'office_send' => 'required',
            'office_recieve' => 'required',
            'money_trans' => 'required|max:12|min:3',
            'date_trans' => 'required|max:20|date'
        ]);
        $office = office::firstwhere('name_office' , 'like' , $request->office_send);
        if($request->money_trans > $office->amount){
            return to_route('money.create')->with('error' , 'Error , Moneytrans must be smaller than amount of send office');
        }else{
            $money = Money::create([
                'office_send' => $request->office_send,
                'office_receive' => $request->office_recieve,
                'money_trans' => $request->money_trans,
                'data_trans' => $request->date_trans,
                'office_id' => $office->id,
            ]);
            $officerec = office::firstwhere('name_office' , 'like' , $request->office_recieve);
            $office->amount -= $request->money_trans;
            $officerec->amount+=$request->money_trans;
            $money->save();
            $office->save();
            $officerec->save();
            return to_route('money.show' , $money);
        }
   
        
    }

    /**
     * Display the specified resource.
     */
    public function show(money $money)
    {
        $moneys = $money;
        // ddd($moneys);
        return view('money.show' , [
            "moneys" => $moneys
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
       return view('money.search');
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
    public function destroy(money $money)
    {
        $money->delete();
        return to_route('money.index')->with('success' , 'Money_Trans has been deleted');
    }

    public function search(money $money)
    {
        return view('money.search');
    }
}
