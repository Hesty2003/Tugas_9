<?php

namespace App\Http\Controllers;

Class HomeController extends controller{


    function showBeranda(){
        return view('admin.beranda');
    }

    function showProduk(){
        return view('admin.produk');
    }

    function showKategori(){
        return view('admin.kategori');
    }
    
}