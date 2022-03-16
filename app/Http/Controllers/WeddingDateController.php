<?php

namespace App\Http\Controllers;

use App\Models\WeddingDate;
use Illuminate\Http\Request;

class WeddingDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wedding_dates=WeddingDate::all();
        return view('WeddingDate.index',[
            'wedding_dates' => $wedding_dates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('WeddingDate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wedding_dates=new WeddingDate();
        $wedding_dates->date=$request->input('date');
        $wedding_dates->save();
        return redirect('/date');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wedding_dates=WeddingDate::find($id);
        return view('WeddingDate.edit')->with('wedding_dates',$wedding_dates);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wedding_dates=WeddingDate::where('id',$id)->update([
            'date' =>$request->input('date')
        ]);
        return redirect('/date');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $weddingdate=WeddingDate::find($id);
        $weddingdate->delete();
        return redirect('/date');
    }
}