<?php

namespace App\Http\Controllers;
use \App\Models\Room;

use Illuminate\Http\Request;

class foruser extends Controller
{
    public function index()
    {
        
        $data = Room::orderBy('created_at','desc')->limit(4)->get();
        return view('welcome',compact('data'));
    }
    public function about()
    {
        return view('about');
    }
    public function akomodasi()
    {
        $data = Room::orderBy('created_at','desc')->paginate(6);
        return view('akomodasi',compact('data'));
    }
    public function galeri()
    {
        return view('galeri');
    }
    public function kontak()
    {
        return view('kontak');
    }
}
