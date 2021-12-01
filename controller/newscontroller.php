<?php
class News extends Controller
{
    function default()
    {
        $this->getAllNewPagination();
    }
    function getAllNew()
    {
        require_once("./model/NewsModel.php");
        $new = new newsmodel();
        $success = $new->getAllNew();
        // print_r($success);
        if ($success == true) {
            $msg = "Lấy dữ liệu thành công";
            $this->view("news", [
                "data" => $success,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("news", [
                "err" => "SQL bị lỗi",
            ]);
        }
    }

    function getAllNewPagination()
    {
        $results_per_page = 4;  
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

        $query = "select count(*) as total_row from news";  
        $result = mysqli_query($conn, $query);  
        $row = $result->fetch_assoc();
  
        $number_of_result =  $row['total_row'];

        $number_of_page = ceil ($number_of_result / $results_per_page);  
   
        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }  

        $page_first_result = ($page-1) * $results_per_page;  
  
        $query = "SELECT *FROM news LIMIT " . $page_first_result . ',' . $results_per_page;  
        $result = mysqli_query($conn, $query);  
        $ket_qua="";    
        for($pageload = 1; $pageload<= $number_of_page; $pageload++) { 
                
                if ($pageload == $page){
                    $ket_qua = $ket_qua . "<li id='pagination' class='page-item active'><a class='page-link' href='/mvc/news?page=$pageload'>$pageload</a></li>";//getAllNew
                }

                else {
                    $ket_qua = $ket_qua . "<li id='pagination' class='page-item'><a class='page-link' href='/mvc/news?page=$pageload'>$pageload</a></li>"	;//getAllNewPagination
                }
            }
        if ($result == true) {
            $msg = "Lấy dữ liệu thành công";
            $this->view("news", [
                "ket_qua" => $ket_qua,
                "paginationData" => $result,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("news", [
                "err" => "SQL bị lỗi",
            ]);
        }
    }



    function getAllNewAdminPagination()
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

        $query = "select count(*) as total_row from news";  
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
  
        $query = "SELECT *FROM news LIMIT " . $page_first_result . ',' . $results_per_page;  
        $result = mysqli_query($conn, $query);  
        
        $ket_qua="";    
        for($pageload = 1; $pageload<= $number_of_page; $pageload++) { 
                
                if ($pageload == $page){
                    $ket_qua = $ket_qua . "<li id='pagination' class='page-item active'><a class='page-link' href='/mvc/news?page=$pageload'>$pageload</a></li>";//getAllNewAdminPagination
                }

                else {
                    $ket_qua = $ket_qua . "<li id='pagination' class='page-item'><a class='page-link' href='/mvc/news?page=$pageload'>$pageload</a></li>"	;//getAllNewAdminPagination
                }
            }
        if ($result == true) {
            $msg = "Lấy dữ liệu thành công";
            $this->view("newsmanager", [
                "ket_qua" => $ket_qua,
                "data" => $result,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("newsmanager", [
                "err" => "SQL bị lỗi",
            ]);
        }
    }
    function getAllNewsAdmin(){
        require_once("./model/NewsModel.php");
        $new = new newsmodel();
        $success = $new->getAllNew();
        // print_r($success);
        if ($success == true) {
            $msg = "Lấy dữ liệu thành công";
            $this->view("newsmanager", [
                "data" => $success,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("newsmanager", [
                "err" => "SQL bị lỗi",
            ]);
        }
    }
    
    function getDetail()
    {
        if (isset($_POST['xem'])) {
            $id = $_POST['xem'];
            // print($id);
            require_once("./model/NewsModel.php");
            $admin = new newsmodel();
            $success = $admin->getNew($id);
            if ($success == true) {
                $msg = "Lấy dữ liệu thành công";
                $this->view("newsDetail", [
                    "data" => $success,
                    "msg" => $msg,
                ]);
                die;
            } else {
                $this->view("newsDetail", [
                    "err" => "SQL bị lỗi hàm getDetails",
                ]);
            }
        } else {
            $this->view("newsDetail", ["msg" => "Bị lỗi SQL hàm getDetails"]);
        }
    }

    function addNews()
    {
        if (isset($_POST['signup'])) {
            $tieu_de = "";
            $noi_dung = "";
            $mo_ta = "";
            $thoi_gian = date("Y/m/d h:i:sa");
            $img_new = "";
            

            $msg = "";
            $success = false;
            if (isset($_POST['tieu_de'])) {
                $tieu_de = $_POST['tieu_de'];
                //$msg .= "1";
            }
            if (isset($_POST['noi_dung'])) {
                $noi_dung = $_POST['noi_dung'];
                //$msg .= "1";
            }
            if (isset($_POST['mo_ta'])) {
                $mo_ta = $_POST['mo_ta'];
                //$msg .= "2";
            }

            if ($tieu_de == "" || $noi_dung == "" || $thoi_gian == "" || $mo_ta == "") {
                $msg = "Please fill all require fields!";
            } else {
                // print_r($_FILES);
                $img_new = $this->upload_file_news($tieu_de, $_FILES);



                // $signup = $this->model("usermodel"); //usermodel la ten file usermodel.php

                require_once("./model/NewsModel.php");
                $product = new newsmodel();
                // $signup->insertUser()

                $success = $product->insertNew(
                    $tieu_de ,
                    $noi_dung ,
                    $mo_ta,
                    $thoi_gian ,
                    $img_new ,
                );

                if ($success == true) {
                    $msg = "Tạo tin tức thành công";
          
                    $this->view("newsmanager", [
                        // "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                }
                $this->view("newsmanager", [

                    "err" => "Lỗi sản phẩm",
                ]);
            }
            $this->view("newsmanager", [

                "msg" => $msg,
            ]);
        } else {
            // echo "Dang o day 1";
            $this->view("newsmanager", [

                "err" => "Không có đầu vào"
            ]);
        }
    }

    function getDetailAndEdit(){
        if (isset($_POST['sua'])) {
            $id = $_POST['sua'];
            // print($id);
            require_once("./model/NewsModel.php");
            $admin = new newsmodel();
            $success = $admin->getNew($id);
            if ($success == true) {
                $msg = "Lấy dữ liệu thành công";
                $this->view("editNewsDetails", [
                    "data" => $success,
                    "msg" => $msg,
                ]);
                die;
            } else {
                $this->view("editNewsDetails", [
                    "err" => "SQL bị lỗi hàm getDetails",
                ]);
            }


        } else {
        $this->view("editNewsDetails", [ "msg" => "Bị lỗi SQL hàm getDetails"]);
        }
        
    }

    function updateNew()
    {
    
        if (isset($_POST['update'])) {
            $id = "";
            $tieu_de = "";
            $noi_dung = "";
            $mo_ta = "";
            $thoi_gian = date("Y/m/d h:i:sa");
            $img_new = "";
            

            $msg = "";
            $success = false;

            if (isset($_POST['id_new'])) {
                $id_new = $_POST['id_new'];
                //$msg .= "1";
            }

            if (isset($_POST['tieu_de'])) {
                $tieu_de = $_POST['tieu_de'];
                //$msg .= "1";
            }
            if (isset($_POST['noi_dung'])) {
                $noi_dung = $_POST['noi_dung'];
                //$msg .= "1";
            }
            if (isset($_POST['mo_ta'])) {
                $mo_ta = $_POST['mo_ta'];
                //$msg .= "2";
            }

            if ($tieu_de == "" || $noi_dung == "" || $thoi_gian == "" || $mo_ta == "") {
                $msg = "Please fill all require fields!";
            } else {
                $img_new = $this->upload_file_news($id_new, $_FILES);

                require_once("./model/NewsModel.php");
                $product = new newsmodel();
 
                $success = $product->updateNew(
                    $tieu_de ,
                    $noi_dung ,
                    $mo_ta,
                    $thoi_gian ,
                    $img_new ,
                    $id_new,
                );

                if ($success == true) {
                    $msg = "Tạo update thành công thành công";
          
                    $this->view("newsmanager", [
                        // "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                }
                $this->view("newsmanager", [

                    "err" => "Lỗi sản phẩm",
                ]);
            }
            $this->view("newsmanager", [

                "msg" => $msg,
            ]);
        } else {
            // echo "Dang o day 1";
            $this->view("newsmanager", [

                "err" => "Không có đầu vào"
            ]);
        }
    }

    function deleteNew() {
        if (isset($_POST['xoa'])) {
            $id = $_POST['xoa'];
        require_once("./model/NewsModel.php");
        $admin = new newsmodel();
        $success = $admin->deleteNew($id);
        if ($success == true) {
            $msg = "Xóa liệu thành công";
            $this->view("newsmanager", [
                "data" => $success,
                "msg" => $msg,
            ]);
            die;
        } else {
            $this->view("newsmanager", [
                "err" => "SQL bị lỗi hàm getDetails",
            ]);
        }

        } else {
            $this->view("newsmanager", [ "msg" => "Bị lỗi SQL hàm getDetails"]);
        }
        
    }

    function getNewShow(){
        if (isset($_POST['xem'])) {
            $id = $_POST['xem'];


            
            require_once("./model/NewsModel.php");
            $admin = new newsmodel();
            $success = $admin->getNew($id);
            // print_r($success);
            if ($success == true) {
            
                $msg = "Lấy dữ liệu thành công";
                $this->view("newsDetailShow", [
                    "data" => $success,
                    "msg" => $msg,
                ]);
                // echo "đang chay trong 2";
                die;
            } else {
                // echo "đang chay trong 1";
                $this->view("newsDetailShow", [
                    "err" => "SQL bị lỗi hàm getDetails",
                ]);
            }
        } else {
            $this->view("newsDetailsShow", ["msg" => "Bị lỗi SQL hàm getDetails"]);
        }
    }
}
