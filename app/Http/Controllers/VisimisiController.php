<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisis = Visimisi::all();
        
        if($visimisis) {
            $visi = $visimisis->visi;
            $misi = $visimisis->misi;
            $visiMisiImg = $visimisis->image;
        } else {
            $visi = 'No Data Available';
            $misi = 'No Data Available';
            $visiMisiImg = [];
        }

        return view('visimisi', compact('visi', 'misi', 'visiMisiImg'));
    }
}