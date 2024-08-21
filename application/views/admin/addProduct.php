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
								<li class="breadcrumb-item" aria-current="page">Product</li>
								<li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
					<form action="<?= base_url();?>Admin/insertProduct" enctype="multipart/form-data" method="post" novalidate>
					 
					<form novalidate>
					  <div class="row">
						<div class="col-xl-6 col-12">
											
						<div class="form-group">
								<label class="form-label">Product Name<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="productName" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
								</div>
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
							<label class="form-label">SubCategory Name<span class="text-danger">*</span></label>
								<div class="controls">
								<select name="subcategoryIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select SubCategory Name</option>
                                            <?php foreach ($subcategoryData as $subcategory) {?>
                                            <option value="<?= $subcategory['subcategoryIDPK']; ?>"> 
                                                    <?= $subcategory['subCategoryName']; ?>
                                            </option>
                                            <?php }?>
                                          </select>   
								</div>
							</div>

							<div class="form-group">
								<label class="form-label">Image<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="file" name="image" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
								</div>	
							<div class="form-group">
						        <label class="form-label">Price<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="price" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
								</div>	
							<div class="form-group">
								<label class="form-label">Description<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="desc" class="form-control" required data-validation-required-message="This field is required"> 
								</div>

							</div>
							<div class="form-group">
								<label class="form-label">Start date<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="startDate" class="form-control" required data-validation-required-message="This field is required"> 
								</div>

							</div>
			
							<div class="form-group">
								<label class="form-label">End Date<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="endDate" class="form-control" required data-validation-required-message="This field is required"> 
								</div>

							</div>
							<div class="form-group">
								<label class="form-label">Multiple Image<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="file" name="img[]" multiple class="form-control" required data-validation-required-message="This field is required"> 
								</div>

							</div>
						</div>
</div>
</div>
</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</form>
					<?php } else { ?>
						<form action="<?= base_url();?>Admin/updateProduct" enctype="multipart/form-data" method="post" novalidate>
						<input type="hidden" name="productIDPK" value="<?= $productData['productIDPK'];?>"/>
					  <div class="row">
						<div class="col-xl-6 col-12">						
							<div class="form-group">
							
							<div class="form-group">
								<label class="form-label">Product Name<span class="text-danger">*</span></label>
								<div class="controls">
								<input type="text" name="productName" value="<?= $productData['productName'];?>" class="form-control" required data-validation-required-message="This field is required"> 
							
							</div>
							</div>
							<div class="form-group">
								<label class="form-label">Catrgory Name<span class="text-danger">*</span></label>
								<div class="controls">
								<select name="categoryIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select Category</option>
                                            <?php foreach ($categoryData as $category) {?>
                                            <option value="<?=$category['categoryIDPK']; ?>" 
                                                    <?php if ($category['categoryIDPK'] == $productData['categoryIDFK']) {echo "Selected";}?>>
                                                    <?= $category['categoryName']; ?>
                                            </option>
                                            <?php }?>
                                          </select>
										</div>
							</div>

							<div class="form-group">
							<label class="form-label">SubCategory Name<span class="text-danger">*</span></label>
								<div class="controls">
								<select name="subcategoryIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select SubCategory Name</option>
                                            <?php foreach ($subcategoryData as $subcategory) {?>
                                            <option value="<?= $subcategory['subcategoryIDPK']; ?>" <?php if ($subcategory['subcategoryIDPK'] == $productData['subcategoryIDFK']) {echo "Selected";}?>> 
                                                    <?= $subcategory['subCategoryName']; ?>
                                            </option>
                                            <?php }?>
                                          </select>   
								</div>
							</div>
							
								
							<div class="form-group">
						        <label class="form-label">Price<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="price" class="form-control" value="<?= $productData['price'];?>" required data-validation-required-message="This field is required"> 
								</div>
								</div>	
							<div class="form-group">
								<label class="form-label">Desc<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="desc" class="form-control" value="<?= $productData['desc'];?>" required data-validation-required-message="This field is required"> 
								</div>

							</div>

							<div class="form-group">
								<label class="form-label">Start date<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="startDate" class="form-control" value="<?= $productData['startDate'];?>" required data-validation-required-message="This field is required"> 
								</div>

							</div>
			
							<div class="form-group">
								<label class="form-label">End Date<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="endDate" class="form-control" value="<?= $productData['endDate'];?>" required data-validation-required-message="This field is required"> 
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