<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imgur;
use Yish\Imgur\Upload;
use Illuminate\Http\UploadedFile;
use App\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('images.index', ['images' => $images]);
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
        //
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

    public function upload(Request $request)
    {
        foreach($request->files as $upload){
            dd($upload);
            $file = new UploadedFile($upload->path, $upload->originalName, $upload->mimeType, $upload->size, $upload->error, $upload->test);
            dd($file);

            $result = Imgur::setHeaders([
                'headers' => [
                    'authorization' => 'Client-ID ' . env('IMGUR_CLIENT_ID'),
                    'content-type' => 'application/x-www-form-urlencoded',
                ]
            ])->setFormParams([
                'form_params' => [
                    'image' => $file,
                ]
            ])->upload($file);

            $image = new Image();
            $image->name = '';
            $image->description = '';
            $image->imgur_id = '';
            $image->category_id = 1;
            $image->slug = '';
            $image->main = 0;
            $image->imgur_link = $result->link();
            $image->save();

            return redirect()->back();
        }
    }
}
