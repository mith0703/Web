<?php

class User extends Controller
{
    function signup()
    {
        if (isset($_POST['signup'])) {
            $userName = "";
            $firstName = "";
            $lastName = "";
            $email = "";
            $phone = "";
            $password = "";
            $passwordConfirm="";
            $vai_tro = "0";
            $img_profile = "";
            $address = "";
            $msg = "";
            $success = false;
            if (isset($_POST['userName'])) {
                $userName = $_POST['userName'];
                //$msg .= "1";
            }
            if (isset($_POST['passwordConfirm'])) {
                $passwordConfirm = $_POST['passwordConfirm'];
                //$msg .= "1";
            }
            if (isset($_POST['firstName'])) {
                $firstName = $_POST['firstName'];
                //$msg .= "2";
            }
            if (isset($_POST['lastName'])) {
                $lastName = $_POST['lastName'];
            }

            if (isset($_POST['password'])) {
                $password = $_POST['password'];
                //$msg .= "3";
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                //$msg .= "4";
            }
            if (isset($_POST['phone'])) {
                $phone = $_POST['phone'];
                //$msg .= "5";
            }

            if (isset($_POST['address'])) {
                $address = $_POST['address'];
                //$msg .= "7";
            }


            if ($userName == "" || $password == "" || $firstName == "" || $lastName == "" || $address == "" || $email == "" || $phone == "" || $passwordConfirm == "" || $address =="") {
                $msg = "Please fill all require fields!";
            }
            if ( $password != $passwordConfirm ) {
                $msg = "Mật khẩu không giống nhau";
            } else {
                // print_r($_FILES);
                $img_profile = $this->upload_file_user($userName, $_FILES);
             
                $password = password_hash($password, PASSWORD_DEFAULT);

                
                // $signup = $this->model("usermodel"); //usermodel la ten file usermodel.php
                
                require_once("./model/usermodel.php");
                $signup = new usermodel();
                // $signup->insertUser()
                
                $success = $signup->insertUser($userName,$firstName,$lastName,$email,$phone,$password,$vai_tro,$img_profile,$address);

                if ($success == true) {
                    $msg = "Sign Up Success! Please Login";
                    // $show = "<script>
                                    
                    //             </script>";

                    $this->view("login", [
                        // "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                }
                $this->view("signup", [
                   
                    "err" => "Username has already taken!",
                ]);
            }
            $this->view("signup", [

                "msg" => $msg,
            ]);
        } else {
            // echo "Dang o day 1";
            $this->view("signup", []);
        }
    }
    function login()
    {
        $username = "";
        $password = "";
        $success = false;
        $msg = "";
        if (isset($_POST['login'])) {
            if (isset($_POST['userName'])) {
                $username = $_POST['userName'];
            }
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            }
            if ($username == "" || $password == "") {
                $msg = "Sai mật khẩu hoặc tên đăng nhập";
            } else {
                $login = $this->model("usermodel");
                $success = $login->login($username, $password);
                if ($success == true) {
                    $msg = "Login success!";
                    $show = "<script>
                                loginPart.hide();
                                </script>";

                    $this->view("login", [
                        "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                } else {
                    $msg = "Wrong username or password!";

                    $this->view("login", [
                        "err" => $msg,
                    ]);
                    die;
                }
            }
        } else {
            $this->view("login", [

                "msg" => $msg,
            ]);
        }
    }
    function logout()
    {
        session_unset();
        session_destroy();
        header("location: /mvc/home");
    }

    function pwchange(){
        if (isset($_POST['update'])) {
            $id = $_SESSION['id'];
            $password = "";
            $passwordConfirm="";
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
                //$msg .= "1";
            }
           
            if (isset($_POST['passwordConfirm'])) {
                $passwordConfirm = $_POST['passwordConfirm'];
                //$msg .= "2";
            }

            if ( $password != $passwordConfirm ) {
                $msg = "Mật khẩu không giống nhau";
            } else {
                require_once("./model/usermodel.php");
                $user = new usermodel();
                $password = password_hash($password, PASSWORD_DEFAULT);
                $success = $user->updateUserPW($password, $id);
                if ($success == true) {
                    $msg = "Thay đổi mật khẩu thành công";
                
                    $this->view("pwchange", [
                        "msg" => $msg,
                    ]);
                    die;
                } else {
                    $msg = "Bị lỗi";

                    $this->view("pwchange", [
                        "err" => $msg,
                    ]);
                    die;
                }
                $this->view("pwchange",[
                    "msg" => "Lỗi nhập liệu",
                ]);
            }
        } else {
            $this->view("pwchange");
        }
    }



    function userprofile()
    {
        $userdata = [];
    
        require_once("./model/usermodel.php");
        $user = new usermodel();
    
        $userdata = $user->getUser($_SESSION['id']);
        // if (isset($id[0])) {
        //     $user = $this->model("usermodel");
        //     $userdata = $user->getuser($id[0]);
        //     if ($userdata != []){
        //         $this->view("userprofileupdateview",$userdata);
        //     }
        // }

        if (isset($_POST['update'])) {

            $userName = $_SESSION['ten_dang_nhap'];
            $firstName = "";
            $lastName = "";
            $email = "";
            $phone = "";
            // $password = "";
            // $passwordConfirm="";
            $vai_tro = "0";
            $img_profile = "";
            $address = "";



            $id = $_SESSION['id'];
        
            if (isset($_POST['userName'])) {
                $userName = $_POST['userName'];
                //$msg .= "1";
            }
           
            if (isset($_POST['firstName'])) {
                $firstName = $_POST['firstName'];
                //$msg .= "2";
            }
            if (isset($_POST['lastName'])) {
                $lastName = $_POST['lastName'];
            }

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                //$msg .= "4";
            }
            if (isset($_POST['phone'])) {
                $phone = $_POST['phone'];
                //$msg .= "5";
            }

            if (isset($_POST['address'])) {
                $address = $_POST['address'];
                //$msg .= "7";
            }


            if ($userName == "" || $firstName == "" || $lastName == "" || $address == "" || $email == "" || $phone == "" || $address =="") {
                $msg = "Please fill all require fields!";
            } else {

                if ( $_FILES["file"]["error"] == 0){
                    $img_profile = $this->upload_file_user($userName, $_FILES); 
                    $success = $user->updateUserNoPW( $userName, $firstName, $lastName, $email, $phone, $vai_tro, $img_profile,  $address, $id );
                }
                    else {
                    $success = $user->updateUserNoPW( $userName, $firstName, $lastName, $email, $phone, $vai_tro, $_SESSION['img_profile'],  $address, $id );
                }
                if ($success == true) {
                    $msg = "Đã cập nhật thành công!";
                    // $show = "<script>
                    //                 MySUSModal1.show();
                    //             </script>";

                    $this->view("profile", [
                        // "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                } else {
                    $msg = "Không cập nhật thành công";
                    $this->view("profile", [
                        "err" => $msg,
                    ]);
                    die;
                }
            }
        } else {
            $this->view("profile", [
                'msg'=> "Kiểm tra internet",
            ]);
        }
    }
}
