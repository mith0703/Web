<?php
class News extends Controller
{
    function default()
    {
        $this->getAllNew();
    }
    function getAllNew()
    {
        require_once("./model/newsmodel.php");
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

    function getAllNewsAdmin(){
        require_once("./model/newsmodel.php");
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
            require_once("./model/newsmodel.php");
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

                require_once("./model/newsmodel.php");
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
            require_once("./model/newsmodel.php");
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

                require_once("./model/newsmodel.php");
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
        require_once("./model/newsmodel.php");
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
}
