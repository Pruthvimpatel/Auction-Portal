<?php include 'includes/header.php';?>
<br/>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Product Name</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page"><?= $productData['productName'];?></li>
								<li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>   
</div>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-12">
            <form method="post" enctype="multipart/form-data" action="<?= base_url();?>admin/insertProductImage" class="product-bid-form">
                                <div class="search-icon">
                                       </div>
                                <input type="hidden" name="productID" value="<?= $productData['productIDPK'];?>"/>
                               
                                <div class="form-group">
								<!-- <label class="form-label">Add Image<span class="text-danger"></span></label> -->
								<div class="controls">
                                <input type="file" name="img[]" multiple class="form-control"/>
                                
								</div>

</div> <div class="text-xs-right">
							<button type="submit" class="btn btn-info">Add Image</button>
						</div>
                               
                            </form>
                            <br/>
            </div>
            <div class="col-xl-10 col-lg-10 col-12">
                <div class="row">
                    <?php $no=1;
                    foreach($imageData as $image) { ?>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="box">

                            <div class="box-body">

                                <div class="overlay position-relative">
                                    <div class="position-absolute r-0">
                                        
                                    </div>

                                    <img src="<?php echo base_url().$image['pic'];?>" alt="" class="img-fluid">
                                    
                                    <div class="overlay-layer">
                                    </div>
                                </div><br/>
                                <td><a href="<?= base_url();?>Admin/deleteimage/<?= $image['imageIDPK'];?>/<?= $image['productIDFK'];?>">Delete</a></td>
              

                            </div>
                        </div>
                             </div>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    </div>
    </div>
    <!-- /.content-wrapper -->



</body>




<?php include 'includes/footer.php';?>