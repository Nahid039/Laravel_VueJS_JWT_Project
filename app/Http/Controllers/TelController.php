<?php

namespace App\Http\Controllers;

use App\Models\Tel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tel = DB::table('tels')->get();
        // return response()->json($tel);
        return Tel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        Tel::create($request->all());
        return response("Successfully Store");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tel  $tel
     * @return \Illuminate\Http\Response
     */
    public function show(Tel $tel)
    {
        return $tel;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tel  $tel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tel $tel)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        $tel->update($request->all());
        return response("Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tel  $tel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tel $tel)
    {
        $tel->delete();
        return response("deleted");
    }
}
