<?php include 'includes/header.php';?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">ADD SUBCATEGORY</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">SubCategory</li>
								<li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
					<?php if($operation == "insert") { ?>
					<form action="<?= base_url();?>Admin/insertsubCategory" method="post" novalidate>
					  <div class="row">
						<div class="col-xl-6 col-12">
                        <div class="form-group">
							<label class="form-label">Category Name<span class="text-danger">*</span></label>
								<div class="controls">
								<select name="categoryIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select Category Name</option>
                                            <?php foreach ($categoryData as $category) {?>
                                            <option value="<?= $category['categoryIDPK']; ?>"> 
                                                    <?= $category['categoryName']; ?>
                                            </option>
                                            <?php }?>
                                          </select>   
								</div>
							</div>
											
							<div class="form-group">
							
								<label class="form-label">SUBCATEGORY Name<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="subCategoryName" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							
						
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</form>

					<?php } else { ?>
						<form action="<?= base_url();?>Admin/updatesubCategory" method="post" novalidate>
						<input type="hidden" name="subcategoryIDPK" value="<?= $subcategoryData['subcategoryIDPK'];?>"/>
					  <div class="row">
						<div class="col-xl-6 col-12">	
                        <div class="form-group">
								<label class="form-label">Catrgory Name<span class="text-danger">*</span></label>
								<div class="controls">
								<select name="categoryIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select Category</option>
                                            <?php foreach ($categoryData as $category) {?>
                                            <option value="<?=$category['categoryIDPK']; ?>" 
                                                    <?php if ($category['categoryIDPK'] == $subcategoryData['categoryIDFK']) {echo "Selected";}?>>
                                                    <?= $category['categoryName']; ?>
                                            </option>
                                            <?php }?>
                                          </select>
										</div>
							</div>
					
							<div class="form-group">
							
								<label class="form-label">SUBCATEGORY Name<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="subCategoryName" class="form-control"value="<?= $subcategoryData['subCategoryName'];?>"  required data-validation-required-message="This field is required"> 
								</div>
							
						
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</form>

					<?php } ?>

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