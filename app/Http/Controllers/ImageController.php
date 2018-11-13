<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imgur;
use Yish\Imgur\Upload;
use Illuminate\Http\UploadedFile;
use App\Image;

class ImageController extends Controller
{
    public function __construct()
    {
        // ini_set('post_max_size', '15M');
        // ini_set('upload_max_filesize', '15M');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('created_at','desc')->get();
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
            $file = new UploadedFile($upload->getPathName(), $upload->getClientOriginalName(), $upload->getMimeType(), $upload->getClientSize(), $upload->getError());

            if($file->isValid()){
                $result = Imgur::setHeaders([
                    'headers' => [
                        'authorization' => 'Client-ID ' . env('IMGUR_CLIENT_ID'),
                        'content-type' => 'application/x-www-form-urlencoded',
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
}
