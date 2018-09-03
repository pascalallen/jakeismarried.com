<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

<<<<<<< HEAD
    public function home(){
=======
    public function home()
    {
>>>>>>> master
        $images = Image::inRandomOrder()->get();
        return view('welcome', ['images' => $images]);
    }

    public function images()
    {
        $images = Image::all();
        return view('images.index', ['images' => $images]);
    }
}
