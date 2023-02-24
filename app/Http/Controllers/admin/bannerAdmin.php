<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bannerAdmin extends Controller
{
    public function index()
    {
        return view('admin.banner.index');
    }

    public function create()
    {
        return view('admin.banner.create');
    }
}
