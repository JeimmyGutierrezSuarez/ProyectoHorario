<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CrudController
{
    public function index(){
        $datos=DB::select("select * from ambientes");
        return view("welcome");
    }
}
