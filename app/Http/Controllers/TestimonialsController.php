<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Testimonials::create([
            'nama'       => $request->nama,
            'pekerjaan'  => $request->pekerjaan,
            'ulasan'     => $request->ulasan,
            'profil'     => $request->file('profil')->getClientOriginalName(),
        ]);
        $request->file('profil')->move('admin/images/testimonials', $request->file('profil')->getClientOriginalName());
        return redirect()->route('testimonials.index');
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
        $testimonials = Testimonials::findOrFail($id);
        return view('admin.testimonials.update', compact('testimonials'));
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
        $testimonials = Testimonials::findOrFail($id);
        $awal = $testimonials->profil;

        $testimonials->nama             = $request->nama;
        $testimonials->pekerjaan   = $request->pekerjaan;
        $testimonials->ulasan         = $request->ulasan;

        if($request->hasFile('profil')){
            $testimonials->profil = $awal;
            $request->file('profil')->move('admin/images/testimonials', $awal);
        } else {
            $testimonials->profil = $awal;
        }
        $testimonials->update();
        return redirect()->route('testimonials.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials = Testimonials::findOrFail($id);
        $file = public_path('admin/images/testimonials'). $testimonials->profil;
        if(file_exists($file)) {
            @unlink($file);
        }
        $testimonials->delete();
        return redirect()->route('testimonials.index');
    }
}
