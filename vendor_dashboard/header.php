<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href=" dashboard.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/img/user.png" class="img-circle" alt="Avatar">
							<span><?php
							
							echo $_SESSION["vendor_name"];?></span> 
							<i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
							    <li><a href="update_profile.php"><i class="lnr lnr-cog"></i> 
								<span>Profile Setting</span></a>
								</li>
								 <li><a href="change_pass.php"><i class="lnr lnr-cog"></i> 
								<span>Change Password</span></a>
								</li>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> 
								<span>Logout</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					<li><a href="dashboard.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						
					
					
					<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed">
							<i class="lnr lnr-file-empty"></i> <span>Products</span> 
							<i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="add_product.php" class="">Add Produts </a></li>
									<li><a href="products.php" class="">View Products</a></li>
									
								</ul>
							</div>
						</li>
					<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed">
							<i class="fa fa-shopping-bag"></i> <span>Orders</span> 
							<i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
								    <li><a href="orders.php" class="">Orders </a></li>
									
									<li><a href="pending_order.php" class="">Pending Order </a></li>
									<li><a href="confirmed_order.php" class="">Confirmed Order</a></li>
									<li><a href="delivered_order.php" class="">Delivered Order</a></li>
									
									
								</ul>
							</div>
						</li>
						
						<li>
							<a href="#subPages4" data-toggle="collapse" class="collapsed">
							<i class="fa fa-plane"></i> <span>Delivery/shipping Setting</span> 
							<i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages4" class="collapse">
								<ul class="nav">
								    <li><a href="city_setting.php" class="">
									City Setting
									
									</a></li>
									 <li><a href="shipping_policy.php" class="">
								     Set Amount
									
									</a></li>
									
									
								</ul>
							</div>
						</li>
						
					
					
						
						</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->