<?php

namespace App\Http\Controllers;

use App\Models\MenuMaker;
use App\Http\Requests\StoreMenuMakerRequest;
use App\Http\Requests\UpdateMenuMakerRequest;

class MenuMakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMenuMakerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuMakerRequest $request)
    {
        MenuMaker::create([
            'name'=>$request->input('name')
        ]);

        return redirect()->back()->with('status', 'menu has created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuMaker  $menuMaker
     * @return \Illuminate\Http\Response
     */
    public function show(MenuMaker $menuMaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuMaker  $menuMaker
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuMaker $menuMaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuMakerRequest  $request
     * @param  \App\Models\MenuMaker  $menuMaker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuMakerRequest $request, MenuMaker $menuMaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuMaker  $menuMaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuMaker $menuMaker)
    {
        //
    }
}
