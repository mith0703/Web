<?php
	session_start();
	// include("./model/ProductModel.php");
	include("./model/NewsModel.php");
    include("./model/UserModel.php");
	// $product = new ProductModel();
    // $result = $product->getAllProduct();
	
	// print_r($result[1]);
	// echo $product->insertProduct("thiet ke 1","chu de 1",50,"den","in 3d", 100) . "<br>" ;
	// echo $product->updateProduct("thiet ke","","",50,"","",2) . "<br>" ;
	// echo $product->deleteProduct(3) . "<br>" ;
	 
	$user = new UserModel();
	// $result=$user->login("nhutanh5","123456");

	// if ($_SESSION["ten_dang_nhap"]) {
	// 	echo $_SESSION["ten_dang_nhap"];
	// }
	include_once("./view/header.php");
	include_once("./view/login.php");
	include_once("./view/footer.php");
	
	// echo $result;
	// echo "<br>";
	// // var_dump($new->getNew(2));
	// echo "<br>";
	// echo "Dang chay main"; 
?>	