<?php

namespace App\Http\Controllers\Frontend\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
       public function index(Request $request)
    {
        return view('frontend.pages.menu.menu_page');
    }
}
