<!DOCTYPE html>
<html lang="en">
  <head>
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
        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li>Trang Chủ</li>
                    <li class="active">Giỏ Hàng</li>
                </ul>
            </div>
        </div>
                
        <div class="main">
        	<div class="container">
                <div class="page-title">
                	<h1>GIỎ HÀNG CỦA BẠN</h1>
                </div>            
                <div class="cart">
                	<?php
					$tongtien = 0;
					if(!empty($_SESSION["gh"]))
					{
						$gh=$_SESSION['gh'];
						$total = 0;
					?>                	
                	<form action="/cart_update.php" method='post'>
                    <div class="table-responsive">
                	<table class="table custom-table">                    	
                        <thead>
                            <tr class="first last">
                                <th>Xóa</th>
                                <th>Hình Sản Phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>                                
                            </tr>
                        </thead>
                        <tbody> 
                                               		
								<?php										
								foreach ($_SESSION["gh"] as $ms => $sl)
								{													
									$sql = "SELECT MaSanPham, HinhSanPham, TenSanPham, GiaSanPham, ChiTietSanPham FROM sanpham where MaSanPham = $ms";
									$r = mysql_fetch_array(mysql_query($sql));									
								    $sqlKm = 'select sum(GiaGiam) as total from chitietkhuyenmai where NgayBatDau <= "'.date("Y-m-d").'" and NgayKetThuc >= "'.date("Y-m-d").'" and MaSanPham = '.$r['MaSanPham'];
									$queryKm = mysql_fetch_assoc(mysql_query($sqlKm));
									$giaKm = 0;
									if(!empty($queryKm['total']))
									{
										$giaKm = ceil($r['GiaSanPham'] - $queryKm['total']);
										$tongtien += $giaKm*$sl;
									} 
									else 
									{
										$tongtien += $r['GiaSanPham'] * $sl;
									}											 
								?>   
                            <tr>                         
            					<td class="text-center"><a class="btn-remove" href="cart_del_item.php?masanpham=<?php echo $ms ?>"><span class="fa fa-trash-o"></span></a></td>
            					<td><a class="product-image"><img src="images/products_list/<?php echo $r['HinhSanPham']; ?>"></a></td>
            					<td><a><?php echo $r['TenSanPham']; ?></a>
                                    <div class="text-muted"><?php echo $r['ChiTietSanPham']; ?></div>
                                </td>
            					<td class="price-box">
                                <?php
								if ( $giaKm > 0)
								{
								?>
                                	<p class="special-price">
                                    	<span id="product-price-1" class="price" >Giá Khuyến Mãi: <?php echo number_format ($giaKm,0," ",'.'); ?> VNĐ</span>
                                    </p> <br>
                                    <p class="old-price">		
                                        <span id="product-price-1" class="price" >Giá: <?php echo number_format ($r['GiaSanPham'],0," ",'.'); ?> VNĐ</span>
                                    </p> 
                                <?php } else { ?>
                                    <p>		
                                    	<span id="product-price-1" class="price">Giá: <?php echo number_format ($r['GiaSanPham'],0," ",'.'); ?> VNĐ</span>
                                    </p>   
                                <?php } ?>
                                </td>
                        		<td class="qty">
                               		<div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn trusl" id='btn<?php echo $ms?>'  type="button">-</button>
                                        </span>
                                        <input readonly type="text" id='input<?php echo $ms?>' name='sl[<?php echo $ms?>]'  class="form-control" value="<?php echo $sl?>">
                                        <span class="input-group-btn">
                                            <button class="btn congsl" id='btn<?php echo $ms?>' type="button">+</button>
                                        </span>
                                    </div><!-- /input-group -->
                            	</td>
                        		<td class="subtotal price-box">
                                <?php
								if ( $giaKm > 0)
								{
								?>                                
                                	<div class="price"><?php echo number_format (($giaKm*$sl),0," ",'.') ?> VNĐ</div>
                                <?php } else { ?>    
                                    <div class="price"><?php echo number_format (($r['GiaSanPham']*$sl),0," ",'.') ?> VNĐ</div>
                                <?php } ?>    
                                </td>
                           </tr>
                                <?php
								}
								?>
                        </tbody>
                    </table>
                        <div class="text-right">
                        <a href="product_list.php" class="btn btn-default btn-md">TIẾP TỤC MUA SẮM</a>
                        <button type="submit" class="btn btn-danger btn-md">CẬP NHẬT SỐ LƯỢNG SẢN PHẨM</button>
                        </div>
                    </div>
                    </form>
                    <form action="/complete.php" method='post'>
                    <?php									
				    /* }
					else
					{
						echo 'GIỎ HÀNG CỦA BẠN HIỆN ĐANG TRỐNG';
					?>
                    	<a href="product_list.php" class="btn btn-danger btn-md">MUA SẮM NGAY</a>
                    <?php
					} */
					?>                         	
                    <!-- <div class="text-right">
                    	<a href="product_list.php" class="btn btn-default btn-md">TIẾP TỤC MUA SẮM</a>
                        <button type="submit" class="btn btn-danger btn-md">CẬP NHẬT SỐ LƯỢNG SẢN PHẨM</button>
                    </div> -->
                    <div class="line2"></div>
                    <div class="row">
                    	<div class="col-sm-4">
                        	<h4>THÔNG TIN GIAO HÀNG</h4>
                            <p class="text-muted"></p>
                            <div class="form-group">
                            	<label class="control-label">Địa chỉ của bạn</label>
                                <input type="text" class="form-control" name="diachikhachhang">
                            </div>
                        </div>
                        
                    	<div class="col-sm-4">
                        	<h4>THÔNG TIN KHÁCH HÀNG</h4>
                        	<p class="text-muted"></p>
                            <div class="form-group">
                            	<label class="control-label">Tên của bạn</label>
                            	<input type="text" class="form-control" name="tenkhachhang">
                            </div>
                            <div class="form-group">
                            	<label class="control-label">Số điện thoại của bạn</label>
                            	<input type="text" class="form-control" name="sdtkhachhang">
                            </div>
                        </div>                        

                    	<div class="col-sm-4">
                        	<table class="table table-cart-total">
                            	<tr>
                                	<td>Tổng Cộng:</td>
                                    <td class="text-right price-box"><div class="price"><?php echo number_format (($tongtien),0," ",'.') ?> VNĐ</div></td>
                                </tr>                                
                            </table>
							<div class="text-right">
                            	<p><input type="submit" class="btn btn-danger btn-md" name="xacnhan"value="XÁC NHẬN"></p>
                                <p><a class="text-muted">xác nhận đơn hàng của bạn</a></p>
                            </div>
                        </div>
                    </div>
                    <?php									
					}
					else
					{
						echo 'GIỎ HÀNG CỦA BẠN HIỆN ĐANG TRỐNG';
					?>
                    	<a href="product_list.php" class="btn btn-danger btn-md">MUA SẮM NGAY</a><br><br>
                    <?php
					}
					?>
                    </form>
                </div>
            </div>
        </div><!-- /.main -->
        
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
