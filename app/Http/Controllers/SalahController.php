<?php

namespace App\Http\Controllers;

use App\Models\Salah;
use Illuminate\Http\Request;

class SalahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salahs = Salah::orderBy('id','desc')->get();
        return response()->json($salahs);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salah = new Salah;
        $salah->fojor = $request->fojor;
        $salah->juhor = $request->juhor;
        $salah->asor = $request->asor;
        $salah->magrib = $request->magrib;
        $salah->esha = $request->esha;
        $salah->tahajjud = $request->tahajjud;
        $salah->save();
        return response()->json($salah);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salah = Salah::findOrFail($id);
        return response()->json($salah);
        
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
        $salah = Salah::findOrFail($id);
        $salah->fojor = $request->fojor;
        $salah->juhor = $request->juhor;
        $salah->asor = $request->asor;
        $salah->magrib = $request->magrib;
        $salah->esha = $request->esha;
        $salah->tahajjud = $request->tahajjud;
        $salah->save();
        return response()->json($salah);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salah = Salah::findOrFail($id);
        $salah->delete();
        return response()->json($salah);
    }
}
