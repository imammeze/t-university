<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Rektor;
use App\Models\Aboutme;
use App\Models\Cooperation;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cooperationImg = Cooperation::all();
        $rectors = Rektor::all();
        $abouts = Aboutme::first();
        $announcements = Announcement::latest()->take(3)->get();
        $news = News::latest()->take(3)->get();

        return view('home', compact('cooperationImg', 'rectors', 'abouts', 'announcements', 'news'));
    }
}