<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
//        print_r($slide);
//        die;
        $new_product = Product::where('new', 1)->get();
//        dd($new_product);
        return view('page.trangchu', compact('slide', 'new_product'));
    }

    public function getLoaiSp(){
        return view('page.loai_sanpham');
    }

    public function getChiTiet(){
        return view('page.chitiet_sanpham');
    }

    public function getLienHe(){
        return view('page.lienhe');
    }

    public function getGioiThieu(){
        return view('page.gioithieu');
    }
}
