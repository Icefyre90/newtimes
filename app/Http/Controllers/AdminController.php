<?php

namespace App\Http\Controllers;

/*
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;
use App\Logo;
use App\Image;
use App\Color;
*/
class Admin extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct() {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admintamp/adminindex');
    }

    public function tables() {
        return view('admintamp/admintables');
    }
}