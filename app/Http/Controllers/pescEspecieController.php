<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesc_especie;

class pescEspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$especies = pesc_especie::all();
    	return view('especie.index', compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('especie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$especie = new pesc_especie();
    	$especie->cat = $request->cat;    	
    	$especie->save();
    	return redirect('/especies')->with('success', 'Espécie inserida com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$especie = pesc_especie::find($id);
    	return view('especie.show', compact('especie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$especie = pesc_especie::find($id);
    	return view('especie.edit', compact('especie'));
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
    	$especie = pesc_especie::find($id);
    	$especie->cat = $request->cat;
    	$especie->save();
    	return redirect('/especies')->with('success', 'Espécie Editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$especie = pesc_especie::find($id);
    	$especie->delete();
    	return redirect('/especies')->with('success', 'Espécie excluídaa com sucesso!');
    	
    }
}
