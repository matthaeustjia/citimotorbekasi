<?php

namespace App\Http\Controllers;

use App\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spareparts = Sparepart::all();
        return view('spareparts.index', compact('spareparts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('spareparts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate
        $this->validate(request(), [
            'no' => 'required',
            'type' => 'required',
            'car' => 'required',
            'sellingprice' => 'required',
            'buyingprice' => 'required'
        ]);

        //create a new sparepart, save it into database
        $sparepart = new SparePart;
        $sparepart->no = request('no');
        $sparepart->type = request('type');
        $sparepart->car = request('car');
        $sparepart->sellingprice = request('sellingprice');
        $sparepart->buyingprice = request('buyingprice');
        $sparepart->save();

        //get list for index
        return redirect()->action('SparepartController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function show(Sparepart $sparepart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function edit(Sparepart $sparepart)
    {
        //
        return view('spareparts.edit', compact('sparepart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sparepart $sparepart)
    {
        //
        $sparepart->no = request('no');
        $sparepart->type = request('type');
        $sparepart->car = request('car');
        $sparepart->sellingprice = request('sellingprice');
        $sparepart->buyingprice = request('buyingprice');
        $sparepart->save();
        return redirect()->action('SparepartController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sparepart $sparepart)
    {
        //
        $sparepart->delete();
        return redirect()->action('SparepartController@index');
    }
}
