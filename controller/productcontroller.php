<?php
class Product extends Controller
{
    function default()
    {
        // $this->view("product");
        $this->getAllProductPagination();
    }

    // function getAllProduct()
    // {
    //     require_once("./model/productmodel.php");
    //     $product = new productmodel();
    //     $success = $product->getAllProduct();




        
    //     // print_r($success);
    //     if ($success == true) {
    //         $msg = "Lấy dữ liệu thành công";
    //         $this->view("product", [
    //             "data" => $success,
    //             "msg" => $msg,
    //         ]);
    //         die;
    //     } else {
    //         $this->view("product", [
    //             "err" => "SQL bị lỗi",
    //         ]);
    //     }
    // }

    function getAllProductAdminPagination()
    {
        $results_per_page = 4;  
        
        //find the total number of results stored in the database  

        $conn = NULL;
        $server = 'localhost';
        $dbName = 'nadu';
        $user = 'root';
        $password = '';

        $conn = new mysqli($server, $user, $password, $dbName);

		if ($conn->connect_error) {
			printf($conn->connect_error);
			exit();
		}
		$conn->set_charset("utf8");

        $query = "select count(*) as total_row from product";  
        $result = mysqli_query($conn, $query);  
        $row = $result->fetch_assoc();
  
        $number_of_result =  $row['total_row'];

        //determine the total number of pages available  
        $number_of_page = ceil ($number_of_result / $results_per_page);  
   
        //determine which page number visitor is currently on  
        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }  

        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page-1) * $results_per_page;  
 
        //retrieve the selected results from database   
        $query = "SELECT *FROM product LIMIT " . $page_first_result . ',' . $results_per_page;  
        $result = mysqli_query($conn, $query);  
        
        // '<a href = "index2.php?page=' . $page . '">' . $page . ' </a>';  
        //display the link of the pages in URL  
        $ket_qua="";    
        for($pageload = 1; $pageload<= $number_of_page; $pageload++) { 
                
                if ($pageload == $page){
                    $ket_qua = $ket_qua . "<li id='pagination' class='page-item active'><a class='page-link' href='/mvc/product/getAllProductAdminPagination?page=$pageload'>$pageload</a></li>";
                }

                else {
                    $ket_qua = $ket_qua . "<li id='pagination' class='page-item'><a class='page-link' href='/mvc/product/getAllProductAdminPagination?page=$pageload'>$pageload</a></li>"	;
                }
            }
        // print_r($success);
        if ($result == true) {
            $msg = "Lấy dữ liệu thành công";
            $this->view("productmanager", [
                "ket_qua" => $ket_qua,
                "data" => $result,
                // "data" => $success,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("productmanager", [
                "err" => "SQL bị lỗi",
            ]);
        }
    }
    function getAllProductPagination()
    {
        $results_per_page = 4;  
        
        //find the total number of results stored in the database  

        $conn = NULL;
        $server = 'localhost';
        $dbName = 'nadu';
        $user = 'root';
        $password = '';

        $conn = new mysqli($server, $user, $password, $dbName);

		if ($conn->connect_error) {
			printf($conn->connect_error);
			exit();
		}
		$conn->set_charset("utf8");

        $query = "select count(*) as total_row from product";  
        $result = mysqli_query($conn, $query);  
        $row = $result->fetch_assoc();
  
        $number_of_result =  $row['total_row'];

        //determine the total number of pages available  
        $number_of_page = ceil ($number_of_result / $results_per_page);  
   
        //determine which page number visitor is currently on  
        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }  

        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page-1) * $results_per_page;  
 
        //retrieve the selected results from database   
        $query = "SELECT *FROM product LIMIT " . $page_first_result . ',' . $results_per_page;  
        $result = mysqli_query($conn, $query);  
        
        // '<a href = "index2.php?page=' . $page . '">' . $page . ' </a>';  
        //display the link of the pages in URL  
        $ket_qua="";    
        for($pageload = 1; $pageload<= $number_of_page; $pageload++) { 
                
                if ($pageload == $page){
                    $ket_qua = $ket_qua . "<li id='pagination' class='page-item active'><a class='page-link' href='/mvc/product/getAllProductPagination?page=$pageload'>$pageload</a></li>";
                }

                else {
                    $ket_qua = $ket_qua . "<li id='pagination' class='page-item'><a class='page-link' href='/mvc/product/getAllProductPagination?page=$pageload'>$pageload</a></li>"	;
                }
            }
        // print_r($success);
        if ($result == true) {
            $msg = "Lấy dữ liệu thành công";
            $this->view("product", [
                "ket_qua" => $ket_qua,
                "paginationData" => $result,
                // "data" => $success,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("product", [
                "err" => "SQL bị lỗi",
            ]);
        }
    }


    function getProductShow(){
        if (isset($_POST['xem'])) {
            $id = $_POST['xem'];
            // echo $id;

            
            require_once("./model/productmodel.php");
            $admin = new productmodel();
            $success = $admin->getProduct($id);
            // print_r($success);
            if ($success == true) {
        
                $msg = "Lấy dữ liệu thành công";
                $this->view("productDetailsShow", [
                    "data" => $success,
                    "msg" => $msg,
                ]);
                // echo "đang chay trong 2";
                die;
            } else {
                // echo "đang chay trong 1";
                $this->view("productDetailsShow", [
                    "err" => "SQL bị lỗi hàm getDetails",
                ]);
            }
        } else {
            $this->view("productDetailsShow", ["msg" => "Bị lỗi SQL hàm getDetails"]);
        }
    }


    function getAllProductAdmin()
    {
        require_once("./model/productmodel.php");
        $product = new productmodel();
        $success = $product->getAllProduct();
        // print_r($success);

        if ($success == true) {
            $msg = "Lấy dữ liệu thành công";
            $this->view("productmanager", [
                "data" => $success,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("productmanager", [
                "err" => "SQL bị lỗi",
            ]);
        }
    }

    

    function addProduct()
    {
        if (isset($_POST['signup'])) {
            $ten_thiet_ke = "";
            $chu_de = "";
            $dien_tich = "";
            $mau = "";
            $cong_nghe = "";
            $gia = "";
            $img_product = "";
            $mo_ta = "";

            $msg = "";
            $success = false;
            if (isset($_POST['ten_thiet_ke'])) {
                $ten_thiet_ke = $_POST['ten_thiet_ke'];
                //$msg .= "1";
            }
            if (isset($_POST['chu_de'])) {
                $chu_de = $_POST['chu_de'];
                //$msg .= "1";
            }
            if (isset($_POST['dien_tich'])) {
                $dien_tich = $_POST['dien_tich'];
                //$msg .= "2";
            }
            if (isset($_POST['mau'])) {
                $mau = $_POST['mau'];
            }

            if (isset($_POST['cong_nghe'])) {
                $cong_nghe = $_POST['cong_nghe'];
                //$msg .= "3";
            }
            if (isset($_POST['gia'])) {
                $gia = $_POST['gia'];
                //$msg .= "4";
            }
            if (isset($_POST['mo_ta'])) {
                $mo_ta = $_POST['mo_ta'];
                //$msg .= "5";
            }



            if ($ten_thiet_ke == "" || $dien_tich == "" || $gia == "") {
                $msg = "Please fill all require fields!";
            } else {
                // print_r($_FILES);
                $img_product = $this->upload_file_product($dien_tich, $_FILES);



                // $signup = $this->model("usermodel"); //usermodel la ten file usermodel.php

                require_once("./model/productmodel.php");
                $product = new productmodel();
                // $signup->insertUser()

                $success = $product->insertProduct(
                    $ten_thiet_ke,
                    $chu_de,
                    $dien_tich,
                    $mau,
                    $cong_nghe,
                    $gia,
                    $img_product,
                    $mo_ta
                );

                if ($success == true) {
                    $msg = "Tạo sản phẩm thành công";
          
                    $this->view("productmanager", [
                        // "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                }
                $this->view("productmanager", [

                    "err" => "Sản phẩm đã tạo",
                ]);
            }
            $this->view("productmanager", [

                "msg" => $msg,
            ]);
        } else {
            // echo "Dang o day 1";
            $this->view("productmanager", [

                "err" => "Không có đầu vào"
            ]);
        }
    }

    function getDetail()
    {
        if (isset($_POST['xem'])) {
            $id = $_POST['xem'];
            // print($id);
            require_once("./model/productmodel.php");
            $admin = new productmodel();
            $success = $admin->getProduct($id);
            if ($success == true) {
                $msg = "Lấy dữ liệu thành công";
                $this->view("productDetails", [
                    "data" => $success,
                    "msg" => $msg,
                ]);
                die;
            } else {
                $this->view("productDetails", [
                    "err" => "SQL bị lỗi hàm getDetails",
                ]);
            }
        } else {
            $this->view("productDetails", ["msg" => "Bị lỗi SQL hàm getDetails"]);
        }
    }


    function getDetailAndEdit()
    {
        if (isset($_POST['sua'])) {
            $id = $_POST['sua'];
            // print($id);
            require_once("./model/productmodel.php");
            $admin = new productmodel();
            $success = $admin->getProduct($id);
            if ($success == true) {
                $msg = "Lấy dữ liệu thành công";
                $this->view("editProductDetails", [
                    "data" => $success,
                    "msg" => $msg,
                ]);
                die;
            } else {
                $this->view("editProductDetails", [
                    "err" => "SQL bị lỗi hàm getDetails",
                ]);
            }
        } else {
            $this->view("editProductDetails", ["msg" => "Bị lỗi SQL hàm getDetails"]);
        }
    }

    function updateProduct()
    {
       
        if (isset($_POST['update'])) {
            
            $ten_thiet_ke = "";
            $chu_de = "";
            $dien_tich = "";
            $mau = "";
            $cong_nghe = "";
            $gia = "";
            $img_product = "";
            $mo_ta = "";
            $id  = "";
            $msg = "";
            $success = false;
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                //$msg .= "1";
            }
            if (isset($_POST['ten_thiet_ke'])) {
                $ten_thiet_ke = $_POST['ten_thiet_ke'];
                //$msg .= "1";
            }
            if (isset($_POST['chu_de'])) {
                $chu_de = $_POST['chu_de'];
                //$msg .= "1";
            }
            if (isset($_POST['dien_tich'])) {
                $dien_tich = $_POST['dien_tich'];
                //$msg .= "2";
            }
            if (isset($_POST['mau'])) {
                $mau = $_POST['mau'];
            }

            if (isset($_POST['cong_nghe'])) {
                $cong_nghe = $_POST['cong_nghe'];
                //$msg .= "3";
            }
            if (isset($_POST['gia'])) {
                $gia = $_POST['gia'];
                //$msg .= "4";
            }
            if (isset($_POST['mo_ta'])) {
                $mo_ta = $_POST['mo_ta'];
                //$msg .= "5";
            }


            
            if (false)
                {
                $msg = "Please fill all require fields!";  
            } else {

                echo "dang chay trong 1";
                // $password = password_hash($password, PASSWORD_DEFAULT);
                // if ( $_FILES["file"]["error"] == 0){
                $img_product = $this->upload_file_product($dien_tich, $_FILES);

                require_once("./model/productmodel.php");
                $admin = new productmodel();
                $success = $admin->updateProduct(
                    $ten_thiet_ke,
                    $chu_de,
                    $dien_tich,
                    $mau,
                    $cong_nghe,
                    $gia,
                    $img_product,
                    $mo_ta,
                    $id
                );
                if ($success == true) {
                    $msg = "Đã cập nhật thành công!";

                    $this->view("productmanager", [

                        "msg" => $msg,
                    ]);
                    die;
                } else {
                    $msg = "Không cập nhật thành công";
                    $this->view("productmanager", [
                        "msg" => $msg,
                        "err" => $msg,
                    ]);
                    die;
                }
            } 



        } else {
            $this->view("productmanager", [
                'msg' => "Kiểm tra internet",
            ]);
        }
    }


    function deleteProduct() {
        if (isset($_POST['xoa'])) {
            $id = $_POST['xoa'];
        require_once("./model/productmodel.php");
        $admin = new productmodel();
        $success = $admin->deleteProduct($id);
        if ($success == true) {
            $msg = "Xóa liệu thành công";
            $this->view("usermanager", [
                "data" => $success,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("usermanager", [
                "err" => "SQL bị lỗi hàm getDetails",
            ]);
        }

        } else {
            $this->view("usermanager", [ "msg" => "Bị lỗi SQL hàm getDetails"]);
        }
        
    }

}
