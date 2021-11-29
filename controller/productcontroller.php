<?php 
    class Product extends Controller
    {
        function default() {
            // $this->view("product");
            $this->getAllProduct();
        }

        function getAllProduct() {
            require_once("./model/productmodel.php");
            $product = new productmodel();
            $success = $product->getAllProduct();
            // print_r($success);
            if ($success == true) {
                $msg = "Lấy dữ liệu thành công";
                $this->view("product", [
                    "data" => $success,
                    "msg" => $msg,
                ]);
                die;
            } else {
                $this->view("product", [
                    "err" => "SQL bị lỗi",
                ]);
            }
        }

   
        function getAllProductAdmin() {
            require_once("./model/productmodel.php");
            $product = new productmodel();
            $success = $product->getAllProduct();
            // print_r($success);
            echo 1;
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
            $img_product="";
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

           

            if ( $ten_thiet_ke == "" || $dien_tich == "" || $gia == ""  ) {
                $msg = "Please fill all require fields!";
        
            } else {
                // print_r($_FILES);
                $img_product = $this->upload_file_product($ten_thiet_ke, $_FILES);
             

                
                // $signup = $this->model("usermodel"); //usermodel la ten file usermodel.php
                
                require_once("./model/productmodel.php");
                $product = new productmodel();
                // $signup->insertUser()
                
                $success = $product->insertProduct(
                    $ten_thiet_ke, $chu_de, $dien_tich, $mau,  $cong_nghe,$gia ,$img_product,$mo_ta
                );

                if ($success == true) {
                    $msg = "Tạo sản phẩm thành công";
                    // $show = "<script>
                                    
                    //             </script>";

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

}
?>