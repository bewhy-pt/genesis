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
        return view('template::genesis.docs.index');
    }

    public function install(){
        return view('template::genesis.docs.install');
    }

    public function whatsNew(){
        return view('template::genesis.docs.new');
    }

    public function rules(){
        return view('template::genesis.docs.rules');
    }

    public function contributions(){
        //TODO only auth
        return view('template::genesis.docs.contributions');
    }

    public function more(){
        return view('template::genesis.docs.more');
    }

}
