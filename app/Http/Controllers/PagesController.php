<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    return view('pages.index');
    }
    public function rooms(){
        return view('pages.rooms');
        }
        public function contact(){
            return view('pages.contact');
            }
            public function about(){
                return view('pages.about');
                }
}
