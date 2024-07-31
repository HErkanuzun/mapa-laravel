<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted;
use App\Mail\Subemail;

use App\Models\Home;
use App\Models\Comment;
use App\Models\Email;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Comment::all();
        return view('pages.index',[
            'comment' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->subemail=='')
            return redirect()->back()->with('errormessage', 'Mail adres alanı boş bırakılamaz');
        
        $existingEmail = Email::where('subemail', $request->subemail)->first();

        if ($existingEmail) {
            return redirect()->back()->with('errormessage', 'Email zaten kayıt edılmış');
        }

        $emaildata = new Email;
        $emaildata->subemail = $request->subemail;
        $emaildata->save();

        Mail::to($request->subemail)->send(new Subemail(['email' => $request->subemail]));

        return redirect()->back()->with('submessage', 'Record updated.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
