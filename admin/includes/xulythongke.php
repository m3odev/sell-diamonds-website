<?php
	require("../../includes/connect_db.php");
    include("../../includes/check_errors.php");
    
    if($_POST['date']) {
        $date = $_POST['date'];
        var_dump($date);
    }
	$query = "select * from donhang where date(thoigiandathang) = '$date'";
	$result = mysqli_query($dbc,$query);
	check_errors($result,$query);
	while(list($madh,$makh,$tenkh,$tongtien,$tinhtrang,$thoigiandathang,$hinhthucship,$hinhthucthanhtoan) = mysqli_fetch_array($result,MYSQLI_NUM))
    { 
        var_dump($madh,$tenkh);
        ?>




<div id="mid">
    <div class="row" style="width: 100%;">
        <div class="col-sm-2">
  
        <?php
					$query_sdh = "SELECT count(madh) FROM donhang where date(thoigiandathang) = '$date'";
					$result_sdh = mysqli_query($dbc,$query_sdh);
					check_errors($result_sdh,$query_sdh);
					list($sodh) = mysqli_fetch_array($result_sdh,MYSQLI_NUM);

					$query_tt = "SELECT sum(tongtien) FROM donhang WHERE tinhtrang=N'đã giao' and date(thoigiandathang) = '$date'";
					$result_tt = mysqli_query($dbc,$query_tt);
					check_errors($result_sdh,$query_tt);
					list($tt) = mysqli_fetch_array($result_tt,MYSQLI_NUM);

					$query = "SELECT count(makh) FROM khachhang where vaitro = 0";
					$result = mysqli_query($dbc,$query);
					check_errors($result_sdh,$query);
					list($tvdk) = mysqli_fetch_array($result,MYSQLI_NUM);
                    var_dump($tvdk);


					$query = "SELECT sum(tongtien) FROM donhang where hinhthucthanhtoan = N'Ngân hàng' and date(thoigiandathang) = '$date'";
					$result = mysqli_query($dbc,$query);
					check_errors($result_sdh,$query);
					list($banking) = mysqli_fetch_array($result,MYSQLI_NUM);

                    if($banking == NULL) {
                        $banking = 0;
                    }
                    var_dump($banking);
				?>
        <div class="col-sm-10 contain_right">
            <div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
         

                <div>Số đơn hàng được đặt: <label><?php echo $sodh; echo "so don hang "; var_dump($sodh)?></label></div>
                <div class="progress" style="height:30px;margin-top: 2%;">
                    <div class="progress-bar" style="width: <?php echo ((int)$sodh / 10);?>0%;height:30px"></div>
                </div>

                <!-- tt = tien thu -->
                <div>Tổng số tiền mặt thu được: <label><?php echo number_format(($tt),0,',','.');?> đ</label></div>
                <div class="progress" style="height:30px;margin-top: 2%;">
                    <div class="progress-bar" style="width: <?php echo ((int)$tt / 100000);?>0%;height:30px"></div>
                </div>

                <div>Tổng số tiền banking thu được: <label><?php echo number_format(($banking),0,',','.');?> đ</label>
                </div>
                <div class="progress" style="height:30px;margin-top: 2%;">
                    <div class="progress-bar" style="width: <?php echo $banking / 100000;?>0%;height:30px"></div>
                </div>

                <div>Số người đăng ký thành viên: <label><?php echo $tvdk;?></label></div>
                <div class="progress" style="height:30px;margin-top: 2%;">
                    <div class="progress-bar" style="width: <?php echo $tvdk;?>0%;height:30px"></div>
                </div>

            </div>

            <?php } ?>
            
        </div>
    </div>
</div>
</div>

</body>

</html>