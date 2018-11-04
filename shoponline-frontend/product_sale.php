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
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
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
                    <li class="active">Khuyến Mãi</li>
                </ul>
            </div>
        </div>
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-left">
                        <div class="banner-left"><a href="#"><img src="images/ads/ads-01.jpg" alt=""></a>
                            <div class="banner-content">
                                <h1>quảng cáo</h1>
                                <h2>khuyến mãi</h2>
                                <p>hình banner</p>
                                <a href="#">mua ngay</a>
                            </div>
                        </div>
                        <div class="banner-left"><a href="#"><img src="images/ads/ads-01.jpg" alt=""></a>
                            <div class="banner-content">
                                <h1>quảng cáo</h1>
                                <h2>khuyến mãi</h2>
                                <p>hình banner</p>
                                <a href="#">mua ngay</a>
                            </div>
                        </div>
                        <div class="banner-left"><a href="#"><img src="images/ads/ads-01.jpg" alt=""></a>
                            <div class="banner-content">
                                <h1>quảng cáo</h1>
                                <h2>khuyến mãi</h2>
                                <p>hình banner</p>
                                <a href="#">mua ngay</a>
                            </div>
                        </div>                        
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <div class="page-title">
                            <h1>SẢN PHẨM KHUYẾN MÃI</h1>
                        </div>

                        <ol id="products-list" class="products-list">
                            <li class="item">
                                <div class="item-inner">
                                	<?php
									$sosp1trang = 4;
									if (isset($_GET["page"]))
									{
										$trang = $_GET["page"];
										settype($trang,"int");
									}
									else
									{
										$trang = 1;
									}									
									$batdautu =($trang-1)*$sosp1trang;
									$sql = "SELECT * FROM chitietkhuyenmai INNER JOIN sanpham ON chitietkhuyenmai.MaSanPham=sanpham.MaSanPham WHERE MaChiTietKhuyenMai IS NOT NULL AND NgayBatDau <= '".date("Y-m-d")."' and NgayKetThuc >= '".date("Y-m-d")."' LIMIT $batdautu, $sosp1trang";
									$query = mysql_query($sql);
									?>
                                	<?php while ($r = mysql_fetch_assoc($query))
									{
										$sqlKm = 'select sum(GiaGiam) as total from chitietkhuyenmai where NgayBatDau <= "'.date("Y-m-d").'" and NgayKetThuc >= "'.date("Y-m-d").'" and MaSanPham = '.$r['MaSanPham'];
										$queryKm = mysql_fetch_assoc(mysql_query($sqlKm));
										$giaKm = 0;
										if(!empty($queryKm['total']))
										{
											$giaKm = ceil($r['GiaSanPham'] - $queryKm['total']);
										}										
									?>
                                    <div class="row">
                                        <div class="col-sm-4 col-sms-4 col-smb-12">                                        
                                            <div class="images-container">
                                                <div class="product_icon">                                                   
                                                    <div class="sale-icon"><span>sale</span></div>
                                                    <div class='new-icon'><span>-<?php echo number_format ($r['GiaGiam'],0," ",'.'); ?></span></div>
                                                </div>                                            	 
                                                <a href="detail.php?masanpham=<?php echo $r['MaSanPham']?>"class="product-image"><img src="images/products_list/<?php echo $r['HinhSanPham']; ?>"></a>
                                            </div>
                                        </div> 
                                        <div class="product-shop col-sm-8 col-sms-8 col-smb-12">                                        
                                            <div class="f-fix">
                                                <h2 class="product-name"><a><?php echo $r['TenSanPham']; ?></a></h2>
                                                <div class="price-box">
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
                                                <?php } else {?>
                                                 	<p>		
                                                    	<span id="product-price-1" class="price">Giá: <?php echo number_format ($r['GiaSanPham'],0," ",'.'); ?> VNĐ</span>
                                                    </p>   
                                                <?php }?>                                                                                                    
                                                </div>
                                                <div class="desc std">
                                                	<p>
														<?php echo $r['ChiTietSanPham']; ?>
                                                    </p>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
                                                    	<a href="cart_add_item.php?masanpham=<?php echo $r['MaSanPham']?>">
                                                        <button class="btn btn-danger" title="Add to Cart" type="button">Cho vào giỏ hàng</button>
                                                        </a>
                                                    </div>
                                                </div>  
                                            </div>                                           
                                        </div>     
                                    </div>
                                	<?php  } ?>    
                                </div>
                            </li>
                        </ol>
                        <?php						
						$sqldemsp = mysql_query("SELECT * FROM chitietkhuyenmai INNER JOIN sanpham ON chitietkhuyenmai.MaSanPham=sanpham.MaSanPham WHERE MaChiTietKhuyenMai IS NOT NULL AND NgayBatDau <= '".date("Y-m-d")."' and NgayKetThuc >= '".date("Y-m-d")."'");	
						$tongsosp = mysql_num_rows($sqldemsp);
						$sotrang = ceil($tongsosp / $sosp1trang);
						?>
						<div>
                        	Trang <?php echo $trang ?>/<?php echo $sotrang ?>
                        </div>
                        <?php    
						for($t=1; $t<=$sotrang; $t++)
						{
						?>
                                <a href="product_sale.php?page=<?php echo $t ?>">
                                <button class="btn btn-danger" title="page" type="button"><?php echo $t ?></button>
                                </a      
                        ><?php    
						}
						?>
                    </div><!-- /.col-right -->
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
                
            });
        </script>
  </body>
</html>
