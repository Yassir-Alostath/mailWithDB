<?php

namespace App\Http\Controllers;

use App\Mail\newMail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class testController extends Controller
{
    function create () {
        Admin::create([
            'name'=>'yass',
            'title'=>'num'
        ]);
        }
    function index () {

        Mail::to ('info@test.com')->send(new newMail);
    }

}
