<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use App\Models\ModelMaker;
use App\Http\Requests\StoreModelMakerRequest;
use App\Http\Requests\UpdateModelMakerRequest;
use Illuminate\Support\Str;

class ModelMakerController extends Controller
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
     * @param  \App\Http\Requests\StoreModelMakerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModelMakerRequest $request)
    {


        if (ModelMaker::where('name', '=', $request->input('name'))->exists()) {
           return back()->with('status', 'Model '.$request->input('name').' is already exist');
        }else{
            ModelMaker::create([
                'name' => $request->input('name'),
                'menu_maker_id' => $request->input('menu')
            ]);
            //php artsian make:model $requst->name -a
            // str_plural

            Artisan::call('make:model', ['name' => $request->input('name'), '--all' => true]);

            if($request->input('create_permission')=='on'){

                foreach (config('modelMaker.permission_list') as $permission) {
                    Artisan::call('permission:create-permission', ['name' => $permission . ' ' . strtolower(Str::plural($request->input('name'), 4))]);
                }
            }

            return back()->with('status', 'model was created!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelMaker  $modelMaker
     * @return \Illuminate\Http\Response
     */
    public function show(ModelMaker $modelMaker)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelMaker  $modelMaker
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelMaker $modelMaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModelMakerRequest  $request
     * @param  \App\Models\ModelMaker  $modelMaker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModelMakerRequest $request, ModelMaker $modelMaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelMaker  $modelMaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelMaker $modelMaker)
    {
        //
    }
}
