<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Photo::all();
        return view('photo.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = Photo::all();
        return view('photo.create', compact('rows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pho = new Photo();
        $pho->photo_date = $request->photo_date;
        $pho->photo_title = $request->photo_title;
        $pho->photo_teks = $request->photo_teks;
        $pho->photo_upload = $request->photo_upload;
        $pho->post_id = $request->post_id;
        $pho->save();
        return redirect('/photo');
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
        $row = Photo::findOrFail($id);
        return view('photo.edit', compact('row'));
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
        $row = Photo::findOrFail($id);
        $row ->update([
            'photo_date' => request('photo_date'),
            'photo_title' => request('photo_title'),
            'photo_teks' => request('photo_teks'), 
            'photo_upload' => request('photo_upload'),  
            'post_id' => request('post_id'),     
           ]);
        return redirect('/photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Photo::findOrFail($id);
        $row->delete();
        return redirect('photo');
    }
}
