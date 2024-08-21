<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= ADMIN_ASSET_PATH;?>images/sm-logo.png">

    <title>Bidout - Dashboard</title>
    <?PHP include 'css.php';?>

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <!-- Logo -->
                <a href="<?= base_url();?>Admin" class="logo">
                    <!-- logo-->
                    
                    <div class="logo-lg">
                        <span class="light-logo"><img src="<?= ADMIN_ASSET_PATH;?>images/header-logo.png"
                                alt="logo"></span>
                        <span class="dark-logo"><img src="<?= ADMIN_ASSET_PATH;?>images/logo-light-text.png"
                                alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                                data-toggle="push-menu" role="button">
                                <i data-feather="menu"></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <!-- <input type="search" class="form-control" placeholder="Search"> -->
                                            <div class="input-group-append">
                                                <!-- <button class="btn" type="submit" id="button-addon3"><i -->
                                                        <!-- class="icon-Search"><span class="path1"></span><span -->
                                                            <!-- class="path2"></span></i></button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group d-md-inline-flex d-none">
                            <label class="switch">
                                <span class="waves-effect skin-toggle waves-light">
                                    <input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
                                    <span class="switch-on"><i data-feather="moon"></i></span>
                                    <span class="switch-off"><i data-feather="sun"></i></span>
                                </span>
                            </label>
                        </li>
                        <li class="dropdown notifications-menu btn-group ">
                            <a href="#" class="waves-effect waves-light btn-primary-light svg-bt-icon"
                                data-bs-toggle="dropdown" title="Notifications">
                                <i data-feather="bell"></i>
                                <div class="pulse-wave"></div>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <?php $readorderData = $this->orderModel->showreadorder();?>
                                        <li>
                                        <?php foreach($readorderData as $readorder){ ?>
                            <li>
                                <a href="<?= base_url();?>Admin/showorderdetail">
                                   
                                    User Name: <?= $readorder['userName']; ?><br>
                                    Total price: <?= $readorder['total']; ?><br>
                                   
                                </a>
                            </li>
                            <?php } ?>
                                        </li>
                                </ul>
                                </li>
                                <li class="footer">
                                    <a href="<?= base_url();?>Admin/showorderdetail">View all</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="btn-group d-xl-inline-flex d-none">
                            
                        </li>

                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#"
                                class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow"
                                title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
                                <img src="<?= ADMIN_ASSET_PATH;?>images/avatar/avatar-13.png"
                                    class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 97%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="<?= base_url();?>Admin">
                                    <i data-feather="home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url();?>Admin/showUser">
                                    <i data-feather="user"></i>
                                    <span>User</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Category</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?= base_url();?>Admin/addCategory"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Add
                                            Category</a>
                                    </li>
                                    <li><a href="<?= base_url();?>Admin/showCategory">
                                            <i class="icon-Commit"><span class="path1"></span>
                                                <span class="path2"></span></i>Show Category</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>SubCategory</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?= base_url();?>Admin/addsubCategory"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Add
                                            SubCategory</a>
                                    </li>
                                    <li><a href="<?= base_url();?>Admin/showsubCategory">
                                            <i class="icon-Commit"><span class="path1"></span>
                                                <span class="path2"></span></i>Show SubCategory</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Sell Product</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    
                                    <li><a href="<?= base_url();?>Admin/showbiddetail"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show
                                            Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Product</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?= base_url();?>Admin/addProduct"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Add
                                            Product</a>

                                    </li>
                                    <li><a href="<?= base_url();?>Admin/showProduct"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show
                                            Product</a>

                                    </li>
                                </ul>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Bid</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    
                                    <li><a href="<?= base_url();?>Admin/showBid"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show Bid</a>

                                    </li>
                                </ul>
                           
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Contact Us</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    
                                    <li><a href="<?= base_url();?>Admin/showcontactUs"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show ContactUs</a>

                                    </li>
                                </ul>
                           <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Feedback</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    
                                    <li><a href="<?= base_url();?>Admin/showfeedback"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show Feedback</a>

                                    </li>
                                </ul>
                           
                                <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Order Detail</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    
                                    <li><a href="<?= base_url();?>Admin/showorderdetail"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show
                                            Detail</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>


                        </ul>



                        </ul>
                        </ul>
                    </div>
                </div>
            </section>
        </aside>