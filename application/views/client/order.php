<?php include 'includes/header.php';?>

<br/><br/><br/><br/><br/><br/><br/>

<div class="newslater-wrapper">
    <div class="container">
        <div class="table-responsive">
            <h4 class="box-title">Add Address</h4>


            <section class="content">


                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <?php { ?>
                            <form action="<?= base_url();?>client/insertorder" method="post" novalidate>
                                <input type="hidden" name="totalprice" value="<?= $cartData['totalprice'];?>" />

                                <form novalidate>
                                    <div class="row">
                                        <div class="col-xl-6 col-12">

                                            <div class="form-group">

                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <div class="controls">

                                                        <select name="address" class="form-control" required data-validation-required-message="This field is required">
                                                            <?php foreach ($addressData as $address) {?>
                                                            <option value="<?= $address['addressIDPK']; ?>">
                                                                <?= $address['address']; ?>
                                                            </option>
                                                            <?php }?>
                                                        </select>


                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Payment</label>
                                                        <div class="controls">

                                                            <select name="paymentType" class="form-control" disabled data-validation-required-message="This field is required">
                                                                
                                                                <option value="cod" selected>Cash On delivery </option>



                                                                </option>

                                                            </select>


                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="text-xs-right">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                </form>
                                <?php } ?>
                                <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

            </section><br/>
        <h5> Add Another Adddress:  <a href="<?=base_url();?>client/addaddress/<?= $_SESSION['userIDPK'];?>" style="color:blue">Add Address</a></h5>
                          

        

<?php include 'includes/footer.php';?>