<?php

namespace App\Http\Controllers;

use App\Models\Trainner;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTrainnerRequest;
use App\Http\Requests\UpdateTrainnerRequest;
use Illuminate\Support\Facades\Storage;


class TrainnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //$request->user()->authorizeRoles(['admin']);
        $trainers = Trainner::all();
        return view('Trainners.index', compact(['trainers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Trainners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainnerRequest $request)
    {   

        if($request->hasFile('fileTrainner')){
            $file = $request->file('fileTrainner');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }

        $trainer = new Trainner();
        $trainer->name = $request-> input('nameTrainner');
        $trainer->slug = $request-> input('nameTrainner');
        $trainer->avatar = $name;
        $trainer->description = $request -> input('text_description');
        $trainer-> save();
        
        
        return  redirect()-> route("trainneresource.index")->with('status','create trainner');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        //$trainner = Trainner::find($id);
        $trainner = Trainner::where('slug','=',$slug)->firstOrFail();
        return view('Trainners.trainner' , compact('trainner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $trainner = Trainner::where('slug','=',$slug)->firstOrFail();
        return view('Trainners.edit_trainner',compact('trainner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainnerRequest $request, $slug)
    {   
        if($request->hasFile('updatefileTrainner')){
            $file = $request->file('updatefileTrainner');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }

        $trainner = Trainner::where('slug','=',$slug)->firstOrFail();
        $trainner->name = $request-> input('updateTrainner');
        $trainner->slug = $request-> input('updateTrainner');
        $trainner->description = $request-> input('update_text_description');
        $trainner->avatar = $name;
        $trainner->save();

        return redirect()->route('trainneresource.show', [$trainner->slug])->with('status','trainner update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {   
        $trainner = Trainner::Where('slug','=',$slug)->firstOrFail();
        $trainner->delete();
        $file_path = public_path().'/images/'.$trainner->avatar;
        if(Storage::exists($file_path)){
            Storage::delete($file_path);
        }
        $trainner->delete();
        return redirect()->route('trainneresource.index')->with('status','delete trainner');
    }
}
