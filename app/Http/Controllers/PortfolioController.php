<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
        $portfolio = Portfolio::create([
            'nama'      => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $request->file('gambar')->getClientOriginalName(),
        ]);
        $portfolio->save();
        $request->file('gambar')->move('admin/images/portfolio', $request->file('gambar')->getClientOriginalName());
        return redirect()->route('portfolio.index');
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
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.update', compact('portfolio'));
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
        $portfolio = Portfolio::findOrFail($id);
        $awal  = $portfolio->gambar;

        $portfolio->nama        = $request->nama;
        $portfolio->deskripsi   = $request->deskripsi;
        if($request->hasFile('gambar')) {
            $portfolio->gambar = $awal;
            $request->file('gambar')->move('admin/images/portfolio', $awal);
        } else {
            $portfolio->gambar = $awal;
        }
        $portfolio->update();
        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $file = public_path('admin/images/portfolio/').$portfolio->gambar;
        if(file_exists($file)) {
            @unlink($file);
        }
        $portfolio->delete();
        return redirect()->route('portfolio.index');
    }
}
