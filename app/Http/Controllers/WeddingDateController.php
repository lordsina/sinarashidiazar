<?php

namespace App\Http\Controllers;

use App\Models\WeddingDate;
use App\Models\WeddingHall;
use App\Models\WeddingOcation;
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
        $wedding_halls=WeddingHall::all();
        $wedding_ocations=WeddingOcation::all();
        return view('WeddingDate.index',[
            'wedding_dates' => $wedding_dates,
            'wedding_halls'=>$wedding_halls,
            'wedding_ocations'=>$wedding_ocations
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
        if($request->input('hall_id')){

            $wedding_ocations=new WeddingOcation();
            $wedding_ocations->wedding_date_id=$request->input('hall_id');
            $wedding_ocations->wedding_hall_id=$request->input('hall');
            $wedding_ocations->save();
            return redirect('/date/'.$request->input('hall_id'));

        }else{

        $request->validate([
            'date'=>'required|unique:wedding_dates,date'
        ]);
        $wedding_dates=new WeddingDate();
        $wedding_dates->date=$request->input('date');
        $wedding_dates->save();
        return redirect('/date');

        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wedding_dates=WeddingDate::find($id);
        $wedding_hall=WeddingHall::all();
        return view('WeddingDate.show',[
            'wedding_dates'=>$wedding_dates,
            'wedding_hall'=>$wedding_hall

        ]);
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
