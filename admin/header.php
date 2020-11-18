<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="dashboard.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
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
							
							echo $_SESSION["admin_email"];?></span> 
							<i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
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
							<a href="#subPages" data-toggle="collapse" class="collapsed">
							<i class="fa fa-list"></i> <span>Categories Settings</span> 
							<i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="add_main_category.php" class="">Main Categories</a></li>
									<li><a href="add_sub_category.php" class="">Sub Categories</a></li>
									<li><a href="add_third_category.php" class="">
									Third Child Categories</a></li>
									<li><a href="add_delivery_cat.php" class="">
									Delivery Charges Categories</a></li>
									
								</ul>
							</div>
						</li>
					<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed">
							<i class="fa-product-hunt"></i> <span>Products Setting</span> 
							<i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="add_product.php" class="">Add Produts </a></li>
									<li><a href="products.php" class="">View Products</a></li>
									
								</ul>
							</div>
						</li>
					
						<li><a href="users.php" class=""><i class="lnr lnr-user"></i> 
						<span>Users</span></a></li>
						<li><a href="vendors.php" class=""><i class="fa fa-users"></i> 
						<span>Vendors</span></a></li>
						
						<li><a href="orders.php" class=""><i class="fa fa-shopping-cart"></i> 
						<span>Orders</span></a></li>
						<li><a href="currency_setting.php" class=""><i class="fa fa-dollar"></i> 
						<span>Currency Setting</span></a></li>
						<li><a href="add_city.php" class=""><i class="fa fa-map-marker"></i> 
						<span>Add City</span></a></li>
						
						</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->