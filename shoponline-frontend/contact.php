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
    
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
    var gmap = new google.maps.LatLng(10.765974,106.689422);
    var marker;
    function initialize()
    {
        var mapProp = {
             center:new google.maps.LatLng(10.738296, 106.678312),
             zoom:17	,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
     
        var map=new google.maps.Map(document.getElementById("googleMap")
        ,mapProp);
     
      var styles = [
        {
          featureType: 'road.arterial',
          elementType: 'all',
          stylers: [
            { hue: '#fff' },
            { saturation: 100 },
            { lightness: -48 },
            { visibility: 'on' }
          ]
        },{
          featureType: 'road',
          elementType: 'all',
          stylers: [
     
          ]
        },
        {
            featureType: 'water',
            elementType: 'geometry.fill',
            stylers: [
                { color: '#adc9b8' }
            ]
        },{
            featureType: 'landscape.natural',
            elementType: 'all',
            stylers: [
                { hue: '#809f80' },
                { lightness: -35 }
            ]
        }
      ];
     
      var styledMapType = new google.maps.StyledMapType(styles);
      map.mapTypes.set('Styled', styledMapType);
     
      marker = new google.maps.Marker({
        map:map,
        draggable:true,
        animation: google.maps.Animation.DROP,
        position: gmap
      });
      google.maps.event.addListener(marker, 'click', toggleBounce);
    }
     
    function toggleBounce() {
     
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    }
     
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  
  <body>
		<?php include ("include/header.php"); ?>
        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li>Trang Chủ</li>
                    <li class="active">Liên Hệ</li>
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
                            <h1>LIÊN HỆ CỬA HÀNG</h1>
                        </div>
						<div>
                        	<h3><strong>CÔNG TY TNHH TIN HỌC LHP</strong></h3>
                            <h4><a><hr> Địa chỉ: 180 Cao Lỗ,  Phường 4, Quận 8, Tp. Hồ Chí Minh </hr></a></h4>
                            <h4><a> Điện thoại: 0901-2484-86 </a></h4>
                            <h4><a> Email: phuoc.lyhong@gmail.com </a></h4>
                            <h4><a> Thời gian làm việc: 8h - 20h (Tất cả các ngày trong tuần) </a></h4>
                        </div>
                        <div id="googleMap" style="width: 600px; height: 300px;">Google Map</div>
                       
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->
        
        <div class="brands">
            <div class="container">
                <div class="title-group1">
                    <h2>Thương Hiệu Đối Tác</h2>
                </div>
                <div id="brands" class="owl-container">
                    <div class="owl">
                        <div class='item'>
                            <div class="item-innner">
                                <a><img src="images/brand/logo_brand5.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a><img src="images/brand/logo_brand4.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a><img src="images/brand/logo_brand3.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a><img src="images/brand/logo_brand2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a"><img src="images/brand/logo_brand1.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div><!-- /#brands -->
            </div>
        </div><!-- /.brands -->
        
        <?php include ("include/footer.php"); ?>
        
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nivo.slider.pack.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
            /* Main Slideshow */
            $(window).load(function() {
                $(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').addClass('pos_hover');
                });
                $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').removeClass('pos_hover');
                });
            });
            $(window).load(function() {
                $('#ma-inivoslider-banner7').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: 1000,
                    pauseTime: 6000,
                    startSlide: 0,
                    controlNav: false,
                    controlNavThumbs: false,
                    pauseOnHover: true,
                    manualAdvance: false,
                    prevText: 'Prev',
                    nextText: 'Next',
                    afterLoad: function(){
                        },     
                    beforeChange: function(){ 
                    }, 
                    afterChange: function(){ 
                    }
                });
            });
            $(document).ready(function(){
                /* timely-owl */
                $("#timely-owl .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 1000,
                    paginationSpeed : 1000,
                    rewindSpeed : 1000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
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
                /* latest-news slider */
                $("#latest-news .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 1000,
                    paginationSpeed : 1000,
                    rewindSpeed : 1000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* clients-say slider */
                $("#clients-say .owl").owlCarousel({
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
                /* featured-products slider */
                $("#featured-products .owl").owlCarousel({
                    autoPlay : false,
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [991,2],
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
                /* new-products slider */
                $("#new-products .owl").owlCarousel({
                    autoPlay : false,
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [991,2],
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
            });
        </script>
        
        <!-- Hot Deals Timer 1-->
        <script type="text/javascript">
            var dthen1 = new Date("12/25/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow1 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow1)-(dthen1));
            else
                ddiff = new Date((dthen1)-(dnow1));
            gsecs1 = Math.floor(ddiff.valueOf()/1000);
            
            var iid1 = "countbox_1";
            CountBack_slider(gsecs1,"countbox_1", 1);
        </script>
        <!-- Hot Deals Timer 2-->
        <script type="text/javascript">
            var dthen2 = new Date("05/21/26 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow2 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow2)-(dthen2));
            else
                ddiff = new Date((dthen2)-(dnow2));
            gsecs2 = Math.floor(ddiff.valueOf()/1000);
            
            var iid2 = "countbox_2";
            CountBack_slider(gsecs2,"countbox_2", 2);
        </script>
        <!-- Hot Deals Timer 3-->
        <script type="text/javascript">
            var dthen3 = new Date("05/21/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow3 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow3)-(dthen3));
            else
                ddiff = new Date((dthen3)-(dnow3));
            gsecs3 = Math.floor(ddiff.valueOf()/1000);
            
            var iid3 = "countbox_3";
            CountBack_slider(gsecs3,"countbox_3", 3);
        </script>
  </body>
</html>