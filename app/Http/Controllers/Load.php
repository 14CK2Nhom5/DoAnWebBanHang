<?php
/**
 * Created by PhpStorm.
 * User: Nguye
 * Date: 1/1/2017
 * Time: 10:14 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class Load
{
    public function Erro(){return view('Views.404');}
    public function brands(){return view('Views.brands');}
    public function casio(){return view('Views.casio');}
    public function checkout(){return view('Views.checkout');}
    public function contact(){return view('Views.contact');}
    public function index(){return view('Views.index');}
    public function longines(){return view('Views.longines');}
    public function men(){return view('Views.men');}
    public function orient(){return view('Views.orient');}
    public function oris(){return view('Views.oris');}
    public function product(){return view('Views.product');}
    public function rolex(){return view('Views.rolex');}
    public function sangtrong(){return view('Views.sangtrong');}
    public function sarcar(){return view('Views.sarcar');}
    public function search(){return view('Views.search');}
    public function single(){return view('Views.single');}
    public function thoitrang(){return view('Views.thoitrang');}
    public function tretrung(){return view('Views.tretrung');}
    public function women(){return view('Views.women');}
    public function zenith(){return view('Views.zenith');}
	public function dangNhap()
    {
        return view('Views.dangnhap');
    }
	public function dangKy()
    {
        return view('Views.dangky');
    }
}