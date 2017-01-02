<?php
/**
 * Created by PhpStorm.
 * User: Nguye
 * Date: 1/1/2017
 * Time: 8:07 AM
 */?>

<div class="col1">
    <div class="h_nav">
        <?php
        while($row = mysqli_fetch_array($DanhMucSanPham, MYSQLI_ASSOC)){
        $href = trim($row['tenth']);
        $ten = trim($row['tenthuonghieu']);
        ?>
        <ul>
            <li><a href="<?php echo $href ?>"> <?php echo $ten ?> </a></li>
        </ul>
            <?php } ?>
    </div>
</div>
