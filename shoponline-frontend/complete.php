<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  if(empty($_POST))
  {
	header('Location:/index.php');exit;
  }
  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#">

    <title>Galio Laptop | Mua rẻ mua nhanh</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nivo-slider.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body> 
  		<?php include ("include/header.php"); ?>
        <?php
				if(isset($_POST['xacnhan']))
				{ 
					if(isset($_SESSION['gh']))
					{
						?>
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li>Trang Chủ</li>
                    <li class="active">Giỏ Hàng</li>
                    <li class="active">Hoàn Tất</li>
                </ul>
            </div>
        </div>
                
        <div class="main">
        	<div class="container">
                <div class="page-title">
                	<h1>XÁC NHẬN ĐƠN HÀNG</h1>
                </div>            
                <?php
				//if(isset($_POST['xacnhan']))
				//{ 
					//if(isset($_SESSION['gh']))
					//{
						if (empty($_POST['tenkhachhang']) || empty($_POST['sdtkhachhang']) || empty($_POST['diachikhachhang']))
						{
							echo "<script>alert('Bạn chưa nhập đầy đủ thông tin. Hãy nhập đầy đủ thông tin');window.location='cart.php'</script>";exit;
						}
						else
						{
							$tenkh = $_POST['tenkhachhang'];
							if(isset($_POST["sdtkhachhang"]) and strlen($_POST["sdtkhachhang"]) >9 and strlen($_POST["sdtkhachhang"])<12 and preg_match("/^[0-9]+$/", $_POST["sdtkhachhang"])) 
							{
								$sdtkh = $_POST['sdtkhachhang'];
							}
							else
							{
								echo "<script>alert('Số điện thoại chưa hợp lệ. Nhập lại số điện thoại');window.location='cart.php'</script>";exit;
							}
							$diachikh = $_POST['diachikhachhang'];
							$sqlkh = "INSERT INTO khachhang(TenKhachHang, SDTKhachHang, DiaChiKhachHang) VALUES('$tenkh', '$sdtkh', '$diachikh')";
							$querykh = mysql_query($sqlkh);
							$makh = mysql_insert_id();
							$sqldh = "INSERT INTO donhang(TrangThaiDonHang, NgayMua, MaKhachHang) VALUES('0', '".date("Y-m-d")."', '$makh')";
							$querydh = mysql_query($sqldh);
							$madh = mysql_insert_id();
							foreach($_SESSION['gh'] as $ms => $sl)
							{
								$sql = "SELECT TenSanPham, GiaSanPham FROM sanpham WHERE MaSanPham = $ms";
								$data = mysql_fetch_assoc(mysql_query($sql));
								$sqlKm = 'SELECT sum(GiaGiam) as total FROM chitietkhuyenmai WHERE NgayBatDau <= "'.date("Y-m-d").'" and NgayKetThuc >= "'.date("Y-m-d").'" and MaSanPham = '.$ms;
								$queryKm = mysql_fetch_assoc(mysql_query($sqlKm));
								$giaKm = 0;
								if(!empty($queryKm['total']))
								{
									$giaKm = ceil($data['GiaSanPham'] - $queryKm['total']);
								}
								else
								{
									$giaKm = $data['GiaSanPham'];
								}
								$tensp = $data['TenSanPham'];
								$giasp = $data['GiaSanPham'];
								$sqlctdh = "INSERT INTO chitietdonhang(MaSanPham, TenSanPham, MaDonHang, GiaMua, SoLuong) VALUES('$ms', '$tensp', '$madh', '$giaKm', '$sl')";
								$queryctdh = mysql_query($sqlctdh);
							}
							echo 'ĐƠN HÀNG CỦA BẠN ĐÃ ĐƯỢC XÁC NHẬN THÀNH CÔNG';	
							unset($_SESSION['gh']);
							unset($_POST);
							?>
                            	<a href="index.php" class="btn btn-danger btn-md">TRỞ VỀ TRANG CHỦ</a><br><br>
                            <?php
						}
						?>
                
            </div>
        </div><!-- /.main -->
        		<?php
					}	
				}
				?>
        
        <?php include ("include/footer.php"); ?>
              
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                /* special-offer slider */
                $("#special-offer .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                
                /* slider price */
                var currencies = "$";
                var toolbar_status = "1";
                var rate = "1";
                var min = "99"
                    min = Number(min);
                var max = "999"
                    max = Number(max);
                var currentMinPrice = "99"
                    currentMinPrice = Number(currentMinPrice);
                var currentMaxPrice = "999"
                //alert('min: '+min+'--max: '+ max+ 'currentMin: '+currentMinPrice);
                currentMaxPrice = Number(currentMaxPrice);
                var params = "";
                params = $.trim(params);
                //slider
                $( "#slider-range" ).slider({
                    range: true,
                    min: min,
                    max: max,
                    values: [ currentMinPrice, currentMaxPrice ],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( currencies + ui.values[ 0 ] + " - "+ currencies + ui.values[ 1 ] );
                        $('input[name="first_price"]').val(ui.values[0]);
                        $('input[name="last_price"]').val(ui.values[1]);
                    },
                    stop: function( event, ui ) {
                    }
                });
        
                $( "#amount" ).val( currencies + $( "#slider-range" ).slider( "values", 0 ) +
                    " - "+currencies + $( "#slider-range" ).slider( "values", 1 ) );
                $('input[name="first_price"]').val($( "#slider-range" ).slider( "values", 0 ));
                $('input[name="last_price"]').val($( "#slider-range" ).slider( "values", 1 ));   
                 
                //search price from input box
                $('#search_price').each(function(){
                    $(this).live('click',function(){
                        return false;
                    })
                });
                $('#slider-range a:first').addClass('first_item');
                $('#slider-range a:last').addClass('last_item');
                $('.congsl').on('click', function(){
					/* Cong so luong san pham*/
					var $id = $(this).attr('id').replace('btn','input');
					$("#"+$id).val(parseInt($("#"+$id).val()) + 1);
				});
				 $('.trusl').on('click', function() {
					/* tru so luong san pham*/
					var $id = $(this).attr('id').replace('btn','input');
					var $val = $("#"+$id).val() - 1;
					if($val > 1) {
						$("#"+$id).val($val);
					} else {
						$("#"+$id).val(1);
					}
					
				})
            });
        </script>
  </body>
</html>
