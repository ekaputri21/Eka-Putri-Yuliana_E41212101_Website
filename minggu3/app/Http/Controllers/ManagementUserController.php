<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //di sini isi controller Management User
    public function index(){
        //return "Halo ini adalah method index, dalam controller ManagementUser.";
        // return "Halo ini adalah method index, dalam controller ManagementUser.";
        $nama = "Eka Putri Yuliana";

        $pelajaran = ["WS. Mobile","WS. SI Web","Literasi Digital"];

        return view('home', compact('nama','pelajaran'));
    }
}
?>
    <!-- // public function create()
    // {
    //     return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    // }

    // public function store(Request $request)
    // {
    //     return "Method ini nantinya akan digunakan untuk menciptakan data user yang abru";
    // }

    // public function show($id)
    // {
    //     return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" .$id;
    // }

    // public function destroyed($id)
    // {
    //     return " Method ini nantinya digunakan untuk menghapus data user dengan id+" .$id;
    // }

 -->
