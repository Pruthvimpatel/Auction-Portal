<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/sbidu/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 06:08:58 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Auction Portal</title>

    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/owl.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/client/assets/css/main.css">

    <link rel="shortcut icon" href="<?= base_url();?>assets/client/assets/images/auction/sm-logo.png" type="image/x-icon">

    <style type="text/css">
    .owl-item {
        width: 100px;
    }
    </style>



</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">


                    </ul>
                    <ul class="cart-button-area">
                   
                        
                        <li>
                        
                            <?php if(isset($_SESSION['userIDPK'])&& $_SESSION['userType']=="client") { ?>
                                <?php $count = count($this->cartProductModel->showcartProduct($_SESSION['userIDPK'])); { ?>
                                <a href="<?= base_url();?>client/cart/<?= $_SESSION['cartIDPK'];?>" class="cart-button" style="color:black"><i class="flaticon-shopping-basket"></i><span class="amount"><?= $count;?></span></a>
                      <?php } ?>
                            <a href="<?=base_url();?>client/profile/<?= $_SESSION['userIDPK'];?>" style="color:black"
                                class="user-button"><i class="flaticon-user"></i><?=$_SESSION['userName']?></a>
                            <?php } else {?>
                            <a href="<?=base_url();?>client/signin" class="user-button"><i
                                    class="flaticon-user"></i></a>
                            <?php }?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="<?=base_url();?>client/index">
                            <img src="<?= base_url();?>assets/client/assets/images/auction/header3-logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="<?=base_url();?>client/index" style="color:black">Home</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/showProduct" style="color:black">Auction</a>
                        </li>
                        <ul class="menu ml-auto">
                            <li>
                                <a href="#0" style="color:black">Category</a>
                                <ul class="submenu">
                                    <?php $catgoryData = $this->categoryModel->showCategory();
                                foreach($catgoryData as $category) { ?>
                                    <li>
                                        <a
                                            href="<?=base_url();?>client/showCategory/<?= $category['categoryIDPK'];?>"><?= $category['categoryName'];?></a>
                                        <ul class="submenu">
                                            <?php $subcatgoryData = $this->subcategoryModel->showsubcategorybyID($category['categoryIDPK']);
                                   
                                foreach($subcatgoryData as $subcategory) { ?>
                                            <li>
                                                <a
                                                    href="<?=base_url();?>client/showsubCategory/<?= $subcategory['subcategoryIDPK'];?>"><?= $subcategory['subCategoryName'];?></a>
                                            </li>
                                            <?php } ?>

                                        </ul>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li>
                                <a href="<?=base_url();?>client/contact" style="color:black">Contact</a>
                            </li>

                            <li>
                                <a href="<?=base_url();?>client/aboutus" style="color:black">About Us</a>
                            </li>


                        </ul>

                        <span></span>
                        <span></span>
                        <span></span>
                </div>
            </div>
        </div>
        </div>
    </header>
    
    <!--============= Header Section Ends Here =============-->
    