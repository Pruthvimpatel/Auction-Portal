<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://mail.metanoiainfotech.com',
            'smtp_port' => 465,
            'smtp_user' => 'pruthvipatel@metanoiainfotech.com',
            'smtp_pass' => 'pruthvi@2022',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

    }
	public function index()
	{
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['productData'] = $this->productModel->showProduct();
			$this->load->view('admin/index');
		}else{
			$this->load->view('admin/adminLogin');
		}                                         
	}
	public function showBidders($productID){
		$data['bidData'] = $this->bidModel->showbidByProduct($productID);
		$this->load->view('admin/showBidders',$data);
	}
	//Category Table
	public function addCategory() {
		
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['operation'] = "insert";
		$this->load->view('admin/addCategory',$data);
		}else{
			$this->load->view('admin/adminLogin');
		}   
		
		 
	}

	public function insertCategory() { 
		$data['categoryName'] = $this->input->post('categoryName');
		$this->categoryModel->insertCategory($data);
		redirect('Admin/showCategory');
	}

	public function editCategory($id) {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['operation'] = "Update";
		$data['categoryData'] = $this->categoryModel->searchCategory($id);
		$this->load->view('admin/addCategory',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}


	public function updateCategory() { 
		$data['categoryIDPK'] = $this->input->post('categoryIDPK');
		$data['categoryName'] = $this->input->post('categoryName');
		$this->categoryModel->updateCategory($data);
		redirect('Admin/showCategory');
	}

	public function deleteCategory($id) { 
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$this->categoryModel->deleteCategory($id);
		
		
		redirect('Admin/showCategory');
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}
	
	public function showCategory() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['categoryData'] = $this->categoryModel->showCategory();
		$this->load->view('admin/showCategory',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}
	public function showUser() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			
			$data['userData'] = $this->userModel->showuserAdminsite();
			$data['userData'] = $this->userModel->showuserAdmin();
			
		$this->load->view('admin/showUser',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}
//subCategory Table
public function addsubCategory() {
	if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
		$data['operation'] = "insert";
	
	$data['categoryData'] = $this->categoryModel->showCategory();
	$data['subcategoryData'] = $this->subcategoryModel->showsubcategory();
	$this->load->view('admin/addsubCategory',$data);
	}else{
		$this->load->view('admin/adminLogin');
	}   
	
}

public function insertsubCategory() { 
	$data['categoryIDFK'] = $this->input->post('categoryIDFK');
	$data['subCategoryName'] = $this->input->post('subCategoryName');
	$this->subcategoryModel->insertsubcategory($data);
	redirect('Admin/showsubCategory');
}
public function editsubCategory($id) {
	if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
		$data['operation'] = "Update";
		$data['categoryData'] = $this->categoryModel->showCategory();
	$data['subcategoryData'] = $this->subcategoryModel->searchsubcategory($id);
	$this->load->view('admin/addsubCategory',$data);
	}else{
		$this->load->view('admin/adminLogin');
	} 
	
}


public function updatesubCategory() { 
	$data['subcategoryIDPK'] = $this->input->post('subcategoryIDPK');
	$data['categoryIDFK'] = $this->input->post('categoryIDFK');
	$data['subCategoryName'] = $this->input->post('subCategoryName');
	$this->subcategoryModel->updatesubcategory($data);
	redirect('Admin/showsubCategory');
}

public function deletesubCategory($id) { 
	if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
		$this->subcategoryModel->deletesubcategory($id);
	redirect('Admin/showsubCategory');
	}else{
		$this->load->view('admin/adminLogin');
	} 
	
}

public function showsubCategory() {
	if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
		$data['subcategoryData'] = $this->subcategoryModel->showsubcategory();
		$data['categoryData'] = $this->categoryModel->showCategory();
	$this->load->view('admin/showsubCategory',$data);
	}else{
		$this->load->view('admin/adminLogin');
	} 
	
}

public function addBiddetail() {
	if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
	
	$data['userData'] = $this->userModel->showuser();
	$data['productData'] = $this->productModel->showproduct();
	$data['bidData'] = $this->bidModel->showbid();
	$data['productData'] = $this->productModel->showproduct();
	$this->load->view('admin/showProduct',$data);
	}else{
		$this->load->view('admin/adminLogin');
	}   
	
}

public function insertBiddetail($id,$productId) { 
	$data['productIDFK'] = $productId;
	$bidData = $this->bidModel->searchbid($id);
	$data['bidIDFK'] = $bidData['bidIDPK'];
	$data['productIDFK'] = $bidData['productIDFK'];
	$data['productName'] =$bidData['productName'];
	$data['userIDFK'] = $bidData['userIDFK'];
	$data['userName'] = $bidData['userName'];
	$data['price'] =$bidData['price'];
	//print_r($bidData);
	//print_r($data);
	$this->biddetailModel->insertbiddetail($data);
    $this->productModel->deleteproduct($productId);
$userData = $this->userModel->searchuser($data['userIDFK']);
//print_r($userData);
	$this->email->set_newline("\r\n");
      $this->email->from('pruthvipatel@metanoiainfotech.com',"Auction Portal"); // change it to yours
      $this->email->to($userData['email']);// change it to yours
      $this->email->subject('Winning Bid');
      $this->email->message('Congrautulations Your Bid is successfull Thank You for participanting in Auction!!!!');
	  $this->email->send();
	  //print_r( $this->email->send()); 
      //if()
     //{
    //  echo 'Email sent.';
     //}else{
	//	echo 'Email sent Failed.'; 
	// }
	// echo $this->email->print_debugger();
	
	redirect('Admin/showProduct');
}


	public function addBid() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['operation'] = "insert";
		$data['userData'] = $this->userModel->showuser();

		$data['auctionproductData'] = $this->auctionproductModel->showauctionproduct();
		$this->load->view('admin/addBid',$data);
		}else{
			$this->load->view('admin/adminLogin');
		}   
		
	}

	public function insertBid() { 
		$data['auctionproductIDFK'] = $this->input->post('auctionproductIDFK');
		$data['userIDFK'] = $this->input->post('userIDFK');
		$data['price'] = $this->input->post('price');
		$data['date'] = $this->input->post('date');
		$data['paymentType'] = $this->input->post('paymentType');
		$this->biddetailModel->insertbiddetail($data);
		redirect('Admin/showBid');
	}

	public function editBid($id) { 
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['operation'] = "Update";
		$data['bidData'] = $this->biddetailModel->searchbiddetail($id);
		$this->load->view('admin/addBid',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}


	public function updateBid() { 
		$data['biddetailIDPK'] = $this->input->post('biddetailIDPK');
		$data['auctionproductIDFK'] = $this->input->post('auctionproductIDFK');
		$data['userIDFK'] = $this->input->post('userIDFK');
		$data['price'] = $this->input->post('price');
		$data['date'] = $this->input->post('date');
		$data['paymentType'] = $this->input->post('paymentType');
		$this->biddetailModel->updatebiddetail($data);
		redirect('Admin/showBid');
	}

	public function deleteBid($id) { 
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$this->biddetailModel->deletebiddetail($id);
		redirect('Admin/showBid');
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}
	


    public function showBid() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['bidData'] = $this->bidModel->showbid();
		$this->load->view('admin/showBid',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}

    
	public function addproduct() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['operation'] = "insert";
		$data['productData'] = $this->productModel->showproduct();
		$data['categoryData'] = $this->categoryModel->showCategory();
		$data['subcategoryData'] = $this->subcategoryModel->showsubCategory();
		$this->load->view('admin/addProduct',$data);
		}else{
			$this->load->view('admin/adminLogin');
		}   
		
	}

	public function insertproduct() { 
		$data['productName'] = $this->input->post('productName');
		$data['categoryIDFK'] = $this->input->post('categoryIDFK');
		$data['subcategoryIDFK'] = $this->input->post('subcategoryIDFK');
		$data['image'] = $this->photo_upload1();
		$data['price'] = $this->input->post('price');
		$data['desc'] = $this->input->post('desc');
		$data['startDate'] = $this->input->post('startDate');
		$data['endDate'] = $this->input->post('endDate');
		$data['status']=1;
		$id=$this->productModel->insertproduct($data);
		$this->do_upload_event($id);
		
		redirect('Admin/showproduct');
	}

	
	public function photo_upload1()
    {
        $type = explode('.', $_FILES["image"]["name"]);
        $type = strtolower($type[count($type) - 1]);
        $url = "upload_Product/". rand(1, 999) . '.' . $type;
        if (in_array($type, array("jpeg", "jpg", "png", "gif"))) {
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $url)) {
                    return $url;
                }
            }
        } else {
            echo "file not supported";
        }
    }

	public function insertProductImage() { 
		$productID = $this->input->post('productID');
		
		$this->do_upload_event($productID);
		
		redirect('Admin/showGallery/'.$productID);
	}


public function showGallery($id)
{
    if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
		$data['imageData'] = $this->imageModel->showproductImage($id);
		$data['productData'] = $this->productModel->showproductsDetail($id);
	$this->load->view('admin/showGallery',$data);
	}else{
		$this->load->view('admin/adminLogin');
	} 
}

	public function editproduct($id) { 
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['operation'] = "Update";
		$data['productData'] = $this->productModel->searchproductAdmin($id);
		$data['categoryData'] = $this->categoryModel->showCategory();
		$data['subcategoryData'] = $this->subcategoryModel->showsubCategory();
		$this->load->view('admin/addproduct',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}


	public function updateproduct() { 
		$data['productIDPK'] = $this->input->post('productIDPK');
		$data['productName'] = $this->input->post('productName');
		$data['categoryIDFK'] = $this->input->post('categoryIDFK');
		$data['subcategoryIDFK'] = $this->input->post('subcategoryIDFK');
		//$data['image'] = $this->input->post('image');
		
		// if($_FILES['image']['name']!=null){
		// 	$data['image'] = $this->photo_upload1();
		// }
		$data['price'] = $this->input->post('price');
		$data['desc'] = $this->input->post('desc');
		$data['startDate'] = $this->input->post('startDate');
		$data['endDate'] = $this->input->post('endDate');
		$this->productModel->updateproduct($data);
		redirect('Admin/showproduct');
	}

	public function deleteproduct($id) { 
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$this->productModel->deleteproduct($id);
		redirect('Admin/showProduct');
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}

	public function deleteuser($id) { 
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$this->userModel->deleteuser($id);
		redirect('Admin/showUser');
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}
	
	public function showproduct() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['productData'] = $this->productModel->showproduct();

		$this->load->view('admin/showProduct',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}
	public function do_upload_event($id)
    {

        $url_array = array();
		//print_r($_FILES["img"]['name']);die;
        if (count($_FILES["img"]['name']) > 0) {
            for ($i = 0; $i < count($_FILES["img"]['name']); $i++) {

                $type = explode('.', $_FILES["img"]["name"][$i]);
                $type = end($type);


                $url = "upload_Product/". rand(1, 999) . '.' . $type;

                if (in_array($type, array("jpg", "jpeg", "gif", "png"))) {
                    if (is_uploaded_file($_FILES["img"]["tmp_name"][$i])) {
                        if (move_uploaded_file($_FILES["img"]["tmp_name"][$i], $url)) {
                            $data['productIDFK'] = $id;
                            $data['pic'] = $url;
                            $this->imageModel->insertimage($data);
                        }
                    }
                }
            }
        }
    }
	
	public function deleteimage($id,$productID) { 
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$imageData = $this->imageModel->searchimage($id);
			unlink($data['pic']);
			$this->imageModel->deleteimage($id);
		redirect('Admin/showGallery/'.$productID);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}
	
	public function showbiddetail() {

		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['biddetailData'] = $this->biddetailModel->showbiddetail();
			$data['productData'] = $this->productModel->showproduct();
			$data['userData'] = $this->userModel->showuser();
			$this->load->view('admin/showbiddetail',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 

		
	}
	
	public function showorderdetail() {

		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['orderProductData'] = $this->orderModel->showorder();
			$data['productData'] = $this->productModel->showproduct();
			$data['orderData'] = $this->orderModel->showorder();
			$this->load->view('admin/showorder',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 

		
	}
	
	public function addTables() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$this->load->view('admin/addTables');
		}else{
			$this->load->view('admin/adminLogin');
		}   
		
	}

	public function showDelivery() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$this->load->view('admin/showDelivery');
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}
	public function showContactUS() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['contactData'] = $this->contactModel->showcontact();
		$this->load->view('admin/showContactUS',$data);
		}else{
			$this->load->view('admin/adminLogin');
		}  
		
	}

	
	public function showFeedback() {
		if(isset($_SESSION['userIDPK']) && $_SESSION['userType'] == "admin") {
			$data['feedbackData'] = $this->feedbackModel->showfeedback();
		$this->load->view('admin/showFeedback',$data);
		}else{
			$this->load->view('admin/adminLogin');
		} 
		
	}


	
	public function index1()
	{
		if(isset($_SESSION['user_id']) && $_SESSION['userType'] == "admin"){
			$data['admin']=$this->user_model->user_data($_SESSION['user_id']);
			
			$data['worker_count']=count($this->worker_model->worker_list());
			$data['client_count']=count($this->user_model->user_data_by_type("client"));
			$data['contractor_count']=count($this->user_model->user_data_by_type("contractor"));
			$data['request_count']=count($this->service_request_model->service_request_data_by_status("booked"));
			$data['booking_count']=count($this->booking_model->booking_data_by_status("0"));
			$data['complete_count']=count($this->booking_model->booking_data_by_status("1"));
			
			$this->load->view('admin/index',$data);
		}else{
			$data['operation']='login';
			$this->load->view('admin/login',$data);
		}
		
	}
	public function adminLogin(){
		$this->load->view('admin/adminLogin');
	}
	public function login()
	{
		$data['email']=$this->input->post('email');
		$data['password']=$this->input->post('password');
		$data['userType']="Admin";
		
		$result = $this->userModel->login($data);
		 
		if($result!=null){
            $_SESSION['userIDPK'] = $result['userIDPK'];
            $_SESSION['userType'] = $result['userType'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['userName'] = $result['userName'];
			$_SESSION['address'] = $result['address'];
			$_SESSION['birthdate'] = $result['birthdate'];
			$_SESSION['password'] = $result['password'];
            $_SESSION['contactNo'] = $result['contactNo'];
            redirect('admin');
        
		}else{
			$data['invalid']="Invalid Usename Or Password";
			$data['operation']='login';
			$this->load->view('admin/adminLogin',$data);
		}
	}
		
	
	public function logout()
	{
		if(isset($_SESSION['user_id']) && $_SESSION['userType'] == "admin"){
		
			unset($_SESSION['userIDPK']);
			unset($_SESSION['userType']);
			unset($_SESSION['email']);
			unset($_SESSION['userName']);
		
		redirect('admin');
		}else{
			$this->load->view('admin/adminLogin');
		} 
	}
	public function extraprofile(){
		$this->load->view('admin/extraProfile');
	}

}