<?php

namespace App\Http\Controllers;

use App\Models\Kholis;
use Illuminate\Http\Request;

class KholisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kholis::all();
        return view('index')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        return view('show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Kholis::insert($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kholis  $kholis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kholis::findOrFail($id);
        return view('show')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kholis  $kholis
     * @return \Illuminate\Http\Response
     */
    public function edit(Kholis $kholis)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kholis  $kholis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Kholis::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kholis  $kholis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Kholis::findOrFail($id);
        $item->delete();
        return redirect('/');
    }
}
