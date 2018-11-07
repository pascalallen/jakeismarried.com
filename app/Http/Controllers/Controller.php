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

    public function home()
    {
        $images = Image::inRandomOrder()->get();
        return view('welcome', ['images' => $images]);
    }

    public function images()
    {
        $images = Image::all();
        return view('images.index', ['images' => $images]);
    }

    public function details()
    {
        $image = Image::where('slug', 'unflaterring-trump')->first();
        return view('details', ['image' => $image]);
    }
}
