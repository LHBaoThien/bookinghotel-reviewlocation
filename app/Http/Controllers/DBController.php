<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bill;
use App\Models\Slide;
use App\Models\Blog;
use App\Models\Homestay;
class DBController extends Controller
{
    public function getDashBoard()
   {
   	$user=User::all();
   	$bill=Bill::all();
   	$slide=Slide::all();
   	$blog=Blog::all();
   	$homestay=Homestay::all();
   	return view('admin.dashboard',['user'=>$user,'bill'=>$bill,'slide'=>$slide,'blog'=>$blog,'homestay'=>$homestay]);

   }
}
