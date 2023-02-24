<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admins;
use App\Models\user;
use App\Models\banners;
use App\Models\news;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
    $user = User::count();
    $admin = admins::count();
    $banners = banners::count();
    $news = news::count();
    return view('admin.index', [
        'user' => $user,
        'admin' => $admin,
        'banners' => $banners,
        'news' => $news
    ]);
    }
}