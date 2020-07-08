<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan1 = Pertanyaan::find($id)->jawaban;
        return view('/jawaban/index',['pertanyaan'=>$pertanyaan,'pertanyaan1'=>$pertanyaan1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $pertanyaan = Pertanyaan::find($id);
        return view('/jawaban/create',compact('pertanyaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {  
        $request->validate([
            'answer' => 'required'
        ]);

        $jawaban = Jawaban::create([
           'answer' => $request->answer,
           'pertanyaan_id' => $id 
        ]);

        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan1 = Pertanyaan::find($id)->jawaban;
        
        return view('/jawaban/index',compact('jawaban','pertanyaan','pertanyaan1'))
        ->with('status','Jawaban berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show(Jawaban $jawaban)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jawaban $jawaban)
    {
        Jawaban::destroy($jawaban->id);
        return redirect('/pertanyaan')->with('status','Data berhasil dihapus');
    }
}
