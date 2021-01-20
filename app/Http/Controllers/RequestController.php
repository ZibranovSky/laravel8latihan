<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
    	$data = ['title'=>'Login | Latihan'];
    	return view('login', $data);
    }

    public function submit(Request $request)
    {
    	$email = $request->input('email');
    	$password = $request->input('password');
    	echo "Email Anda : ". $email;
    	echo "<br>";
    	echo "Password Anda : ". $password;
    }

// kalkulator

    public function kalkulator()
    {
        $data = ['title'=>'kalkulator | Latihan'];
        return view('kalkulator', $data);
    }

    public function hasil(Request $request)
    {
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $simbol = $request->input('simbol');
        switch ($simbol) {
            case '+':
                echo $angka1 + $angka2;
                break;
            case '-':
                echo $angka1 - $angka2;
                
                break;
            case '*':
                echo $angka1 * $angka2;
                
                break;
            case '/':
                echo $angka1 / $angka2;
                break;

            default:
                # code...
                break;
        }
    }

    // end kalkulator

    // Data on Page(DOP)

    public function dop()
    {
        $data = ['title'=>'Data  on View'];
        return view('dop', $data);
    }

    public function hasildop(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $kontak = $request->input('kontak');

        echo "nama anda ".$nama;
        echo "alamat anda ".$alamat;
        echo "kontak anda ".    $kontak;


    }






    // End DOP

}
