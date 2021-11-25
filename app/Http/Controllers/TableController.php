<?php

namespace App\Http\Controllers;

use App\Service\TableService;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){
        $data = (new TableService())->getAllData();

        return view('table',compact('data'));
    }
}
