<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function show(int $number)
    {
        return view("slides.{$number}");
    }
}
