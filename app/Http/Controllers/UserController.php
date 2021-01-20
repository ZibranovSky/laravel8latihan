<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = ['title'=>'Belajar Laravel'];
    	return view('posts.index', $data);
    }

    public function basic($title)
    {
    	return view('posts.basic');
    }

    public function copy($waifu)
    {
    	echo "<title>waifu</title>";
    	echo $record = $waifu. " Chan Kawai";

    }
    public function count($angka1, $angka2)
    {
      echo $angka1 + $angka2;
    }

    public function compact()
    {
        $data = array("nama"=>"zibran");
        return view('compact',compact('data'));
    }

  
}
