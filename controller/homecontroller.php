<?php 
    class Home extends Controller
    {
        function default() {
            
           $this->getAllProduct();
            
        }

        function getAllProduct()
        {
            require_once("./model/productmodel.php");
            $product = new productmodel();
            $success = $product->getAllProduct();
            // print_r($success);
            if ($success == true) {
                $msg = "Lấy dữ liệu thành công";
                $this->view("home", [
                    "data" => $success,
                    "msg" => $msg,
                ]);
                die;
            } else {
                $this->view("home", [
                    "err" => "SQL bị lỗi",
                ]);
            }
        }
}
?>
