<?php
	
	session_start();
	// include("./model/ProductModel.php");
	// include("./model/NewsModel.php");
    // include("./model/UserModel.php");
	// $product = new ProductModel();
    // $result = $product->getAllProduct();
	
	// print_r($result[1]);
	// echo $product->insertProduct("thiet ke 1","chu de 1",50,"den","in 3d", 100) . "<br>" ;
	// echo $product->updateProduct("thiet ke","","",50,"","",2) . "<br>" ;
	// echo $product->deleteProduct(3) . "<br>" ;
	 
	// $user = new UserModel();
	// $result=$user->login("nhutanh5","123456");

	// if ($_SESSION["ten_dang_nhap"]) {
	// 	echo $_SESSION["ten_dang_nhap"];
	// }
	// include_once("./view/header.php");
	// include_once("./view/login.php");
	// include_once("./view/footer.php");
	
	// echo $result;
	// echo "<br>";
	// // var_dump($new->getNew(2));
	// echo "<br>";
	// echo "Dang chay main"; 

	// include_once("controller/Controller.php");

	// $controller = new Controller();
	// $controller->invoke();

	require_once "./core/App.php";
	require_once "./core/Controller.php";
	require_once "./core/Database.php";
	$myApp =  new App();
	
	// require_once "./model/usermodel.php";
	// $admin = new usermodel();
	// $result = $admin->getAllUser();
	// print_r($result);
	

	// echo isset( $_SESSION['ten_dang_nhap']);

	// echo $_SESSION['img_profile'] ? $_SESSION['img_profile']  : "/hello";


	// include("./model/UserModel.php");
	// $user = new usermodel();
	// echo $user->insertUser("test111","test","test","test@gmail.com","09090","123456","0","","40/20");
	// $dir    = 'public/upload/user/nhutanh123';
// $files1 = scandir($dir);
//    echo mkdir($dir, '0777', TRUE);
// print_r($files1);

// $hash = '$2y$10$i.0qTPAXlJz/1QX1v0U/6.3D22UDmTleCSbhUmtdkSAW37770S99i';
// $password = "123456";
// $result = password_hash("123456", PASSWORD_DEFAULT);
// echo $result;

// if (password_verify('123456', $hash)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }

?>	