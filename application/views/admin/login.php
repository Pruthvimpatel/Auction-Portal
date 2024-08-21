<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://employx-admin-templates.multipurposethemes.com/html/images/favicon.ico">

    <title>EmployX - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?=ADMIN_ASSET_PATH;?>src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="<?=ADMIN_ASSET_PATH;?>src/css/style.css">
	<link rel="stylesheet" href="<?=ADMIN_ASSET_PATH;?>src/css/skin_color.css">	

</head>
	
<body class="hold-transition dark-skin theme-primary bg-img" style="background-image: url(<?=ADMIN_ASSET_PATH;?>images/auth-bg/bg-16.jpg)" data-overlay="5" align="center">
	
	<div class="container w-p40">
		<div class="row align-items-center justify-content-md-center">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-gray-800 rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary fw-600">Let's Get Started</h2>
								<p class="mb-0 text-fade">Sign in to continue to EmployX.</p>							
							</div>
							<div class="p-40">
								<form action="<?=base_url();?>admin/login" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-user"></i></span>
											<input type="text" name="email" class="form-control ps-15 " placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="text-fade ti-lock"></i></span>
											<input type="password" name="password" class="form-control ps-15" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="text-primary fw-500 hover-primary"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-primary w-p30 mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
											</div>
								
								<div class="text-center">
								  <p class="mt-20 text-fade">- Sign With -</p>
								  <p class="gap-items-2 mb-0">
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook-light" href="#"><i class="fa fa-facebook"></i></a>
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter-light" href="#"><i class="fa fa-twitter"></i></a>
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram-light" href="#"><i class="fa fa-instagram"></i></a>
									</p>	
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="<?=ADMIN_ASSET_PATH;?>src/js/vendors.min.js"></script>
	<script src="<?=ADMIN_ASSET_PATH;?>src/js/pages/chat-popup.js"></script>
    <script src="<?=ADMIN_ASSET_PATH;?>assets/icons/feather-icons/feather.min.js"></script>	

</body>

<!-- Mirrored from employx-admin-templates.multipurposethemes.com/html/template/vertical/main/auth_login_dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Feb 2022 09:36:40 GMT -->
</html>
