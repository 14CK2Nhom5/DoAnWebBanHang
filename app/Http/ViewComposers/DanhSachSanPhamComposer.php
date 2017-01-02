<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class DanhSachSanPhamComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function Casio(View $view)
    {
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        $result = mysqli_query($connect, "SELECT * from thuonghieu where thuonghieu = 'Casi'");
        $view->with('DanhSachSanPham', $result);
    }
    public function longines(View $view)
    {
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        $result = mysqli_query($connect, "SELECT * from thuonghieu where thuonghieu = 'Long'");
        $view->with('DanhSachSanPham', $result);
    }
    public function men(View $view)
    {
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        $result = mysqli_query($connect, "SELECT * from thuonghieu where phai = 'Nam'");
        $view->with('DanhSachSanPham', $result);
    }
    public function orient(View $view)
    {
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        $result = mysqli_query($connect, "SELECT * from thuonghieu where thuonghieu = 'Orie'");
        $view->with('DanhMucSanPham', $result);
    }
    public function oris(View $view)
    {
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        $result = mysqli_query($connect, "SELECT * from thuonghieu where thuonghieu = 'Oist'");
        $view->with('DanhMucSanPham', $result);
    }

}
?>