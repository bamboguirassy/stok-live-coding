<?php

namespace App\Http\Controllers;

use App\Mail\SendEMailToResponsable;
use App\Models\Filiale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FilialeController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'nomResponsable'=>'required',
            'photoResponsable'=>'required|image',
            'telephone'=>'required|min:9',
            'adresse'=>'required',
            'inaugure'=>'boolean|required',
            'dateInauguration'=>'required_if:inaugure,1'
        ]);
        $filiale = new Filiale($request->except('photoResponsable'));
        // gerer upload de fichier
        if($request->hasFile('photoResponsable')) {
            $filename = uniqid().'.'.$request->file('photoResponsable')->extension();
            $request->file('photoResponsable')->storeAs('filiales/responsables',$filename);
            $filiale->photoResponsable = $filename;
        }
        $filiale->user_id = Auth::id();
        $filiale->save();
        toastr("L'enregistrement de la filiale a reussie");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiale  $filiale
     * @return \Illuminate\Http\Response
     */
    public function show(Filiale $filiale)
    {
        return view('filiale.show',compact('filiale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiale  $filiale
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiale $filiale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filiale  $filiale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filiale $filiale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filiale  $filiale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiale $filiale)
    {
        //
    }

    public function contactResponsable(Filiale $filiale, Request $request) {
        $request->validate([
            'objet'=>'required',
            'message'=>'required',
        ]);
        Mail::to($filiale->email)->send(new SendEMailToResponsable($request->all()));
        toastr()->success("EMail envoyé avec succès !");
        return back();
    }
}
