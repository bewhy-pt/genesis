<?php

namespace BeWhy\Genesis\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class GenesisController extends Controller {

    public function index(){
        return view('welcome');
    }

    public function docs(){
        return view('template::genesis.pages.docs.index');
    }

    public function install(){
        return view('template::genesis.pages.docs.install');
    }

    public function rules(){
        return view('template::genesis.pages.docs.rules');
    }

    public function contributions(){
        //TODO only auth
        return view('template::genesis.pages.docs.contributions');
    }

    public function more(){
        return view('template::genesis.pages.docs.more');
    }

}
