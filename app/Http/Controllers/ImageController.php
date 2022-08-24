<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImage;
use App\Models\Image;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
    public function index()
    {
        $images = Image::latest()->get();

        return Inertia::render('Image/Index', ['images' => $images]);
    }

    public function create()
    {
        return Inertia::render('Image/Create');
    }

    public function store(StoreImage $request)
    {

    $image_path = '';

    if ($request->hasFile('image')) {
        $image_path = $request->file('image')->store('image', 'public');
    }

    $data = Image::create([
        'image' => $image_path,
    ]);


        return Redirect::route('image.index');
    }
    public function show($id){
        $image = Image::where('id',$id)->first();
        return Inertia::render('Image/ViewImage',['image'=>$image]);

    }

}