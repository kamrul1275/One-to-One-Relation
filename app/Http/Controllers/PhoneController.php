<?php

namespace App\Http\Controllers;

use App\Models\phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhoneController extends Controller
{

    public function index()
    {

        $phones =phone::get();
       return view('phone',compact('phones'));
    }


}
