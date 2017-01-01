<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class DanhMucSanPhamComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        $result = mysqli_query($connect, "SELECT * from thuonghieu");
        $view->with('DanhMucSanPham', $result);
    }
}
?>