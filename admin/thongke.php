	<?php
		session_start();
		if(isset($_SESSION['usr']['uid']))
		{
			include("includes/header.php");
		}
		else
		{
			 header('Location:login.php');
		}
		require("../includes/connect_db.php");
		include("../includes/check_errors.php");
	?>
	<div id="mid">
	    <div class="row" style="width: 100%;">
	        <div class="col-sm-2">
	            <?php
						if($_SESSION['usr']['vaitro']==2)
						{
							include('includes/menu_left1.php');
						}
						else
						{
							 include('includes/menu_left.php');
						}
					?>
	        </div>
	        <?php
					$query_sdh = "SELECT count(madh) FROM donhang";
					$result_sdh = mysqli_query($dbc,$query_sdh);
					check_errors($result_sdh,$query_sdh);
					list($sodh) = mysqli_fetch_array($result_sdh,MYSQLI_NUM);

					$query_tt = "SELECT sum(tongtien) FROM donhang WHERE tinhtrang=N'đã giao'";
					$result_tt = mysqli_query($dbc,$query_tt);
					check_errors($result_sdh,$query_tt);
					list($tt) = mysqli_fetch_array($result_tt,MYSQLI_NUM);

					$query = "SELECT count(makh) FROM khachhang where vaitro = 0";
					$result = mysqli_query($dbc,$query);
					check_errors($result_sdh,$query);
					list($tvdk) = mysqli_fetch_array($result,MYSQLI_NUM);

					$query = "SELECT sum(tongtien) FROM donhang where hinhthucthanhtoan = N'Ngân hàng'";
					$result = mysqli_query($dbc,$query);
					check_errors($result_sdh,$query);
					list($banking) = mysqli_fetch_array($result,MYSQLI_NUM);
				?>

	        <div class="col-sm-10 contain_right">
	            <div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
	                <h3>Thống kê</h3>

	                <select name="date" id="date" onchange="searchByDate()">
	                    <option value="">Select date</option>
	                    <?php
									$query = "SELECT DISTINCT date(thoigiandathang) FROM donhang"; //load các loai sản phẩm 
									$result = mysqli_query($dbc,$query);
                                    check_errors($result,$query);
									while(list($date) = mysqli_fetch_array($result,MYSQLI_NUM))
								    {?>
	                    <option value="<?php echo $date; ?>">
	                        <?php echo $date; ?>
	                    </option>

	                    <?php }
								?>
	                </select>




	                <div>Số đơn hàng được đặt: <label><?php echo $sodh;?></label></div>
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

	                <script type="text/javascript">
	                function searchByDate() {
	                    // var name = document.getElementById('tensp').value;
	                    var date = document.getElementById('date').value;
	                    // var price = document.getElementById('gia').value;
	                    if (date != "") {
	                        $.ajax({
	                            type: "POST",
	                            url: "includes/xulythongke.php",
	                            data: {
	                                date: date
	                            },
	                            cache: false,
	                            success: function(results) {
	                                // alert(date)
									
	                                $('.product-wrapper').html(results);
	                                // window.location="includes/xulythongke.php";
	                            }
	                        });
	                    }
	                    // else{
	                    // 	phantrang(1);
	                    // }
	                }
	                </script>


	            </div>
	        </div>
	    </div>
	</div>
	</div>
	</body>

	</html>