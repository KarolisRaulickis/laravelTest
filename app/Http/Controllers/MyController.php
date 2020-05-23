<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyCreatedModels\MyDataModel;  
use Barryvdh\Debugbar\Facade as Debugbar;

class MyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]); // i ka be login leist
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $title = "My title"; 
        // return view('pages.index')->with('title', $title);// 
        $Data = MyDataModel::orderBy('id','desc')->paginate(10);
        Debugbar::info($Data);
        return view('DB.index')->with('Data', $Data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DB.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //dd($request);
        
        $this->validate($request, [
            'age' => 'required', 
            'name' => 'required', 
        ]);
 

        // Create Post
        $Data = new MyDataModel;
        $Data->Age = $request->input('age'); 
        $Data->Name = $request->input('name'); 
        $Data->Message = ""; // Net jei tusia reikia!
        $Data->save();

        return redirect('/')->with('success', 'Added Created');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
