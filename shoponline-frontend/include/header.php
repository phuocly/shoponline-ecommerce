<?php
include ("connect.php");
?>
        <div class="header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar-left">
                        <ul class="topbar-nav clearfix">
                            <li><span class="phone">0901-2484-86</span></li>
                            <li><span class="email">phuoc.lyhong@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="topbar-nav clearfix">
                            <li><a href="/admin" class="login">Login</a></li>                            
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <div class="support-client">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="box-container time">
                                            <div class="box-inner">
                                                <h2>giờ làm việc</h2>
                                                <p>Thứ 2 đến Chủ Nhật: 8h - 20h</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>giao hàng</h2>
                                                <p>Miễn phí cho nội thành HCM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>giá tốt nhất</h2>
                                                <p>Thanh toán khi nhận hàng COD</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->	
                            <form class="form-search" action="search.php" method="get">
                                <input type="text" class="input-text" name="search" id="search" placeholder="Tìm kiếm sản phẩm...">
                                <button type="submit" class="btn btn-danger" name="ok" value="search"><span class="fa fa-search"></span></button>
                            </form>
                            <div class="mini-cart">
                                <div class="top-cart-title">
                                    <a href="cart.php" class="dropdown-toggle" >
                                        Giỏ Hàng
                                        <span class="price"> sản phẩm:
										<?php
										if (isset($_SESSION['gh']))
										{
											echo count($_SESSION['gh']);
										}
										else
										{
											echo 0;
										}
										?>
                                        </span>
                                    </a>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3>THƯƠNG HIỆU</h3></div>
                                    <div class="mega-menu-category">
                                        <ul class="nav">
                                        	<?php
											$sql = "SELECT * FROM hangsanpham";
											$query = mysql_query($sql);
											while ($r = mysql_fetch_assoc($query))
											{
											?>
                                            <li class="nosub">
                                                <a href="product_list.php?mahangsanpham=<?php echo $r['MaHangSanPham']?>"><?php echo $r['TenHangSanPham']; ?>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul class="menu clearfix visible-lg visible-md">
                                <li><a href="index.php">trang chủ</a></li>
                                <li><a href="product_list.php">sản phẩm</a></li>
                                <li><a href="product_sale.php">khuyến mãi</a></li>
                                <li><a href="contact.php">liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                	<!-- xem file code1.txt -->
            </div><!-- /.header-bottom -->
        </div><!-- /.header -->