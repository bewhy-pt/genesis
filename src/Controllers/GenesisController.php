<?php

namespace BeWhy\Genesis\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class GenesisController extends Controller {

    public function index(){
        return view('template::genesis.homepage');
    }

    public function docs(){
        return view('template::genesis.pages.docs.index');
    }

}
