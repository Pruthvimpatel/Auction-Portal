<?php include 'includes/header.php';?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">ADD PRODUCT</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Image</li>
								<li class="breadcrumb-item active" aria-current="page">Add Image</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
				
					<form action="<?= base_url();?>Admin/insertProductImage" enctype="multipart/form-data" method="post" novalidate>
					 
					<form novalidate>
					  <div class="row">
						<div class="col-xl-6 col-12">
										

							</div>
							<div class="form-group">
								<label class="form-label">Image<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="file" name="img[]" multiple class="form-control" required data-validation-required-message="This field is required"> 
								</div>

							</div>
						</div>
</div>
</div>
</div>
						


				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->



<?php include 'includes/footer.php';?>