<?php
defined('BASEPATH') or exit('No direct script access allowed');

class client extends CI_Controller
{

    public function index()
    {
        $data['productData'] = $this->productModel->showPopularProduct();

        $this->load->view('client/index', $data);
    }
    public function showAntique()
    {
        $data['antiqueData'] = $this->antiqueModel->showantique();

        $this->load->view('client/showAntique', $data);
    }

    public function showCategory($id)
    {
        $data['productData'] = $this->productModel->showproductByCategory($id);
        $data['bidData'] = $this->bidModel->showbidById($id);

        $this->load->view('client/product', $data);
    }

    public function showsubCategory($id)
    {
        $data['productData'] = $this->productModel->showproductBysubCategory($id);
        $data['bidData'] = $this->bidModel->showbidById($id);

        $this->load->view('client/product', $data);
    }

    public function showproduct()
    {
        $data['productData'] = $this->productModel->showproductByDate();
        $this->load->view('client/product', $data);
    }

    public function signin()
    {
        $this->load->view('client/signIn');
    }

    public function signup()
    {
        $this->load->view('client/signUp');
    }

    public function dashboard()
    {
        $data['productData'] = $this->productModel->showproduct();
        $data['userData'] = $this->userModel->showuser();
        $this->load->view('client/dashBoard');
    }

    public function aboutus()
    {
        $this->load->view('client/aboutUs');
    }

  
    public function contact()
    {

        $this->load->view('client/Contact');

    }

    public function mybid($id)
    {
        $data['userData'] = $this->userModel->showuser();
        $data['bidData'] = $this->bidModel->showbidUser($id);
        $data['productData'] = $this->productModel->showproductsDetail($id);

        $this->load->view('client/myBid', $data);
    }
    public function insertcartProduct()
    {
        $data['productIDFK'] = $this->input->post('productID');
        $data['cartIDFK'] = $_SESSION['cartIDPK'];

        $data['total'] = $this->input->post('price');

        $this->cartProductModel->insertcartProduct($data);

        $cartData = $this->cartModel->searchcart($_SESSION['cartIDPK']);

        $total = (int) $cartData['totalprice'] + (int) $data['total'];

        $cartData['totalprice'] = $total;

        $this->cartModel->updatecart($cartData);

        redirect('client/winningbid/');
    }

    public function addaddress($id)
    {
        $data['userData'] = $this->userModel->showuser();
        $data['stateData'] = $this->stateModel->showstate();
        $data['cityData'] = $this->cityModel->showcity();

        $this->load->view('client/addAddress', $data);
    }

    public function winningbid()
    {
        $data['biddetailData'] = $this->biddetailModel->showbiddetailUser($_SESSION['userIDPK']);

        $this->load->view('client/winningBid', $data);
    }

    public function referral()
    {
        $this->load->view('client/referral');
    }

    public function cart($id)
    {
        $data['cartProductData'] = $this->cartProductModel->showcartProduct();

        $data['userData'] = $this->userModel->showuser();
        $data['cartData'] = $this->cartModel->searchcart($_SESSION['cartIDPK']);

        $this->load->view('client/cartProduct', $data);
    }

    public function cartProduct($id)
    {
        $data['cartProductData'] = $this->cartProductModel->showcartProduct();
        $data['cartData'] = $this->cartModel->searchcart($_SESSION['cartIDPK']);
        $data['addressData'] = $this->addressModel->showaddress();

        $this->load->view('client/cartProduct', $data);
    }

    public function insertOrder()
    {
        $data['userIDFK'] = $_SESSION['userIDPK'];
        $data['userName'] = $_SESSION['userName'];
        $data['addressIDFK'] = $this->input->post('address');
        $data['paymentType'] = $this->input->post('paymentType');
        $data['total'] = $this->input->post('totalprice');

        $orderId = $this->orderModel->insertorder($data);
        $cartProductData = $this->cartProductModel->searchCartProductByCart($_SESSION['cartIDPK']);
        foreach ($cartProductData as $cartProduct) {
            $orderProduct['orderIDFK'] = $orderId;
            $orderProduct['productIDFK'] = $cartProduct['productIDFK'];
            $orderProduct['total'] = $cartProduct['total'];
            $this->orderModel->insertOrderProduct($orderProduct);
        }
        $this->cartProductModel->removeProduct($_SESSION['cartIDPK']);
        $cart['cartIDPK'] = $_SESSION['cartIDPK'];
        $cart['totalprice'] = "0";
        $this->cartModel->updatecart($cart);
        redirect('client');
    }

    public function addOrder()
    {


        
        $data['addressData'] = $this->addressModel->showaddress($_SESSION['userIDPK']);
        $data['cartData'] = $this->cartModel->searchcart($_SESSION['cartIDPK']);

        $this->load->view('client/order', $data);
    }

    public function insertAddress()
    {
        $data['userIDFK'] = $_SESSION['userIDPK'];
        $data['address'] = $this->input->post('address');
        $data['contact'] = $this->input->post('contact');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
        $data['pincode'] = $this->input->post('pincode');
        if($data['address'] != null && $data['contact'] != null && $data['state'] != null && $data['city'] != null && $data['pincode'] != null){

            $this->addressModel->insertaddress($data);
            redirect('client');

        }else{
            $data['invalid'] = "Please Enter All The Fields";
            $data['userData'] = $this->userModel->showuser();
            $data['stateData'] = $this->stateModel->showstate();
            $data['cityData'] = $this->cityModel->showcity();
    
            $this->load->view('client/addAddress', $data);
        }

        
    }

    public function profile($id)
    {
        $data['userData'] = $this->userModel->searchuser($id);
        
        $this->load->view('client/profile', $data);
    }

    public function notification()
    {
        $this->load->view('client/notification');
    }
    public function edituser($id)
    {

        $data['userData'] = $this->userModel->searchuser($id);
        $this->load->view('client/profileupdate', $data);

    }

    public function updateuser()
    {
        $data['userIDPK'] = $this->input->post('userIDPK');
        $data['userName'] = $this->input->post('userName');
        $data['birthdate'] = $this->input->post('birthdate');
        $data['email'] = $this->input->post('email');
        $data['contactNo'] = $this->input->post('contactNo');
        $this->userModel->updateuser($data);
        redirect('client/profile/' . $data['userIDPK']);
    }

    public function insertuser()
    {
        $data['userName'] = $this->input->post('userName');
        $data['email'] = $this->input->post('email');
        $data['address'] = $this->input->post('address');

        $data['userType'] = "Client";
        $id = $this->userModel->insertuser($data);

        redirect('client/login');
    }
    public function showproductDetail($id)
    {
        $data['productData'] = $this->productModel->showproductsDetail($id);
        $data['bidData'] = $this->bidModel->showbidById($id);
        $data['bidListData'] = $this->bidModel->showbidByProduct($id);
        $data['imageData'] = $this->imageModel->showProductimage($id);
        //print_r($data);die;
        $this->load->view('client/productDetail', $data);
    }

    public function showPopularProduct()
    {
        $data['productData'] = $this->productModel->showPopularProduct();
        redirect('client');
    }

    public function addBid()
    {
        if (isset($_SESSION['userIDPK'])) {
            $data['bidData'] = $this->bidModel->showbid();
            $this->load->view('client/productDetail', $data);
        } else {
            $this->load->view('client/signIn');
        }

    }

    public function deletecart($id,$productID) { 
        $cartProductData = $this->cartProductModel->searchcartProduct($id);
			
			$this->cartProductModel->removecartProduct($id);
            $cartData = $this->cartModel->searchcart($_SESSION['cartIDPK']);

            $total = (int) $cartData['totalprice'] - (int) $cartProductData['total'];
    
            $cartData['totalprice'] = $total;
    
            $this->cartModel->updatecart($cartData);
		
		redirect('client/cart/'.$productID);
		
		
	}

    public function insertbid()
    {
        if (isset($_SESSION['userIDPK']) && $_SESSION['userType'] == 'client') {
            $data['price'] = $this->input->post('price');
            $current_price = $this->input->post('current_price');
            $data['productIDFK'] = $this->input->post('productID');
            $data['productName'] = $this->input->post('productName');
            if ($data['price'] > $current_price) {

                $data['userIDFK'] = $_SESSION['userIDPK'];
                $data['userName'] = $_SESSION['userName'];
                $this->bidModel->insertbid($data);
                redirect('client/showproductDetail/' . $data['productIDFK']);
            } else {
                $data['productData'] = $this->productModel->showproductsDetail($data['productIDFK']);
                $data['bidData'] = $this->bidModel->showbidById($data['productIDFK']);
                $data['imageData'] = $this->imageModel->showProductimage($data['productIDFK']);
                $data['message'] = "!!oops Please Enter Higher Bid Than current bid";
                $data['bidListData'] = $this->bidModel->showbidByProduct($data['productIDFK']);
                $this->load->view('client/productDetail', $data);
            }
        } else {
            $this->load->view('client/signIn');
        }

    }

    public function insertFeedback()
    {
        if (isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "client") {
            $data['feedback'] = $this->input->post('feedback');
            $data['userIDFK'] = $_SESSION['userIDPK'];
            $data['userName'] = $_SESSION['userName'];

            $this->feedbackModel->insertfeedback($data);
            $data['userData'] = $this->userModel->showuserFeedback($data['userIDFK']);

            redirect('client');
        } else {
            $this->load->view('client/signin');
        }

    }
    public function insertContact()
    {
        if (isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "client") {
            $data['subject'] = $this->input->post('subject');
            $data['message'] = $this->input->post('message');
            $data['userIDFK'] = $_SESSION['userIDPK'];
            $data['userName'] = $_SESSION['userName'];

            $this->contactModel->insertcontact($data);
            $data['userData'] = $this->userModel->showuserContact($data['userIDFK']);

            redirect('client/index');
        } else {
            $this->load->view('client/signin');
        }
    }

    public function insertRegister()
    {

        $data['userName'] = $this->input->post('userName');
        $data['gender'] = $this->input->post('gender');
        $data['birthdate'] = $this->input->post('birthdate');
        $data['contactNo'] = $this->input->post('contactNo');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $data['userType'] = 'client';

        $this->userModel->insertuser($data);
        $data['userData'] = $this->userModel->showuser();

        $this->load->view('client/signIn');

    }

    public function login()
    {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $data['userType'] = "client";

        $result = $this->userModel->login($data);

        if ($result != null) {
            $_SESSION['userIDPK'] = $result['userIDPK'];
            $_SESSION['userType'] = $result['userType'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['userName'] = $result['userName'];

            $cartData = $this->cartModel->searchCartByUser($result['userIDPK']);
            if ($cartData != null) {
                $_SESSION['cartIDPK'] = $cartData['cartIDPK'];
            } else {
                $cart['userIDFK'] = $result['userIDPK'];
                $cart['totalprice'] = "0";
                $cartID = $this->cartModel->insertcart($cart);
                $_SESSION['cartIDPK'] = $cartID;
            }
            redirect('client');

        } else {
            $data['invalid'] = "Invalid Usename Or Password";
            $data['operation'] = 'login';
            $this->load->view('client/signIn', $data);
        }

    }
    public function logout()
    {
        unset($_SESSION['userIDPK']);
        unset($_SESSION['userType']);
        unset($_SESSION['email']);
        unset($_SESSION['userName']);

        redirect('client');

    }

}
