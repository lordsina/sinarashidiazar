<?php

namespace App\Http\Controllers;

use App\Models\WeddingHall;
use Illuminate\Http\Request;

class WeddingHallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wedding_halls=WeddingHall::all();
        return view('WeddingHall.index',[
            'wedding_halls' => $wedding_halls
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('WeddingHall.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wedding_halls=new WeddingHall();
        $wedding_halls->name=$request->input('name');
        $wedding_halls->save();
        return redirect('/hall');
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
        $wedding_halls=WeddingHall::find($id);
        return view('WeddingHall.edit')->with('wedding_halls',$wedding_halls);
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
        $wedding_dates=WeddingHall::where('id',$id)->update([
            'name' =>$request->input('name')
        ]);
        return redirect('/hall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $weddingdate=WeddingHall::find($id);
        $weddingdate->delete();
        return redirect('/hall');
    }
}
