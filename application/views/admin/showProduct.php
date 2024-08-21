<?php include 'includes/header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">TABLE</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							
								
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Product Table</h4>
							
                            <div class="table-responsive">
								<table class="text-fade table" height="80" width="100">
									<thead class="bg-primary">
										<tr>
											<th>#</th>
											<th>Product Name</th>
											<th>Category Name</th>
											<th>SubCategory Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Description</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Edit</th>
											<th>Delete</th>
											<th>Bidders</th>
											<th>Gallery</th>
											
									</tr>
									</thead>
									<tbody>
                                        <?php $no = 1; 
										foreach($productData as $product) {
											 ?>
											<tr>
												<td><?= $no++;?></td>
												<td><?= $product['productName'];?></td>
												<td><?= $product['categoryName'];?></td>
												<td><?= $product['subCategoryName'];?></td>
												<td><img src="<?php echo base_url().$product['image']; ?>" height="100px" width="100px"/></td>

												<td><?= $product['price'];?></td>
												<td><?= $product['desc'];?></td>
												<td><?= $product['startDate'];?></td>
												<td><?= $product['endDate'];?></td>
												<td><a href="<?= base_url();?>Admin/editproduct/<?= $product['productIDPK'];?>">Edit</a></td>
												<td><a href="<?= base_url();?>Admin/deleteproduct/<?= $product['productIDPK'];?>">Delete</a></td>
												<td><a href="<?= base_url();?>Admin/showBidders/<?= $product['productIDPK'];?>">View Bidders</a></td>
												<td><a href="<?= base_url();?>Admin/showGallery/<?= $product['productIDPK'];?>">Gallery</a></td>
												
											</tr>
                                        <?php } ?>
                                    </tbody>
</table>

</div>	
</div>		

</div>		

</div>		

</div>

  
<?php include 'includes/footer.php';?>