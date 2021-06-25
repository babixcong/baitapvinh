<?php
   $sql = "select * from products";
	$sanpham = sqlsrv_query($conn , $sql);
   if( $sanpham === false ) {
      die(print_r( sqlsrv_errors(), true));
   }
?>
<p class="loai">Tất cả sản phẫm</p>
<ul>

<?php
while($row=sqlsrv_fetch_array($sanpham)){
?>
 <li><a href="#">
    <?php
	echo '<img src="admincp/modules/sanpham/uploads/'.$row['product_image'].'" width="120" height="150"/>';
	?>
        <p>Tên sản phẫm: <?php echo $row['product_title'] ?></p>
        <p>Giá:<?php echo $row['product_price'] ?></p>
        <p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="color:#09C;">Chi tiết</p></a>
     
    </a></li>
   
<?php
}
?>
<div class="clear"></div>

</ul>
          