<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function information()
    {
        return view('pages.information');
    }
    public function programs()
    {
        return view('pages.programs');
    }
    public function aboutus()
    {
        return view('pages.aboutus');
    }
    public function news()
    {
        return view('pages.news.index');
    }
    public function detail($slug, $id)
    {
        $data = news::find($id);
        return view('pages.news.detail', [
            'data' => $data
        ]);
    }
}
