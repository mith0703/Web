<?php
include_once("./controller/Controller.php");
class User extends Controller
{
    function signup()
    {
        if (isset($_POST['signup'])) {
            $username = "";
            $password = "";
            $fname = "";
            $lname = "";
            $address = "";
            $email = "";
            $phone = "";
            $img_profile = "";
            $msg = "";
            $success = false;
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                //$msg .= "1";
            }
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
                //$msg .= "2";
            }
            if (isset($_POST['password2'])) {
                $password2 = $_POST['password2'];
            }
            if (isset($_POST['fname'])) {
                $fname = $_POST['fname'];
                //$msg .= "3";
            }
            if (isset($_POST['lname'])) {
                $lname = $_POST['lname'];
                //$msg .= "4";
            }
            if (isset($_POST['address'])) {
                $address = trim($_POST['address']);
                //$msg .= "5";
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                //$msg .= "6";
            }
            if (isset($_POST['phone'])) {
                $phone = $_POST['phone'];
                //$msg .= "7";
            }
            if ($username == "" || $password == "" || $fname == "" || $lname == "" || $address == "" || $email == "" || $phone == "" || $password2 == "" || $password != $password2) {
                $msg = "Please fill all require fields!";
            } else {

                // Upload file
                // print_r($_FILES);
                $img_profile = $this->upload_file_user($username, $_FILES);
                // if (isset($_FILES["file"])) {
                //     //add some restrictions to the file upload, filter: .gif, .jpeg, and .png files; and the file size must be under 5MB
                //     $allowedExts = array("jpg", "jpeg", "gif", "png");
                //     $nameParts = explode(".", $_FILES["file"]["name"]);
                //     $extension = end($nameParts);
                //     if ((($_FILES["file"]["type"] == "image/gif")
                //             || ($_FILES["file"]["type"] == "image/jpeg")
                //             || ($_FILES["file"]["type"] == "image/png")
                //             || ($_FILES["file"]["type"] == "image/pjpeg"))
                //         && ($_FILES["file"]["size"] < 5000000)
                //         && in_array($extension, $allowedExts)
                //     ) {
                //         if ($_FILES["file"]["error"] > 0) {
                //             // echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                //         } else {
                //             mkdir("./public/upload/user/" . $username);
                //             if (file_exists("./public/upload/user/" . $username . $_FILES["file"]["name"])) {
                //                 unlink("./public/upload/user/" . $username . $_FILES["file"]["name"]);
                //             }

                //             move_uploaded_file($_FILES["file"]["tmp_name"], "./public/upload/user/" . $username . "/" . $_FILES["file"]["name"]);
                //             $img_profile = "/ltw/public/upload/user/" . $username . "/" . $_FILES["file"]["name"];
                //         }
                //     } else {
                //         //   echo "Invalid file";
                //         $img_profile = "";
                //     }
                // }
                //End Upload File





                $password = password_hash($password, PASSWORD_DEFAULT);
                $signup = $this->model("usermodel"); //usermodel la ten file usermodel.php
                $success = $signup->signup($username, $password, $fname, $lname, $address, $email, $phone, $img_profile);
                if ($success == true) {
                    $msg = "Sign Up Success! Please Login";
                    $show = "<script>
                                    MySUSModal1.show();
                                </script>";

                    $this->view("signupview", [
                        "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                }
                $this->view("signupview", [
                    "err" => "Username has already taken!",
                ]);
            }
            $this->view("signupview", [
                "msg" => $msg,
            ]);
        } else {
            $this->view("signupview", []);
        }
    }
    function login()
    {
        $username = "";
        $password = "";
        $success = false;
        $msg = "";
        if (isset($_POST['login'])) {
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
            }
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            }
            if ($username == "" || $password == "") {
                $msg = "Wrong username or password";
            } else {
                $login = $this->model("usermodel");
                $success = $login->login($username, $password);
                if ($success == true) {
                    $msg = "Login success!";
                    $show = "<script>
                                    MySUSModal1.show();
                                </script>";

                    $this->view("loginview", [
                        "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                } else {
                    $msg = "Wrong username or password!";

                    $this->view("loginview", [
                        "err" => $msg,
                    ]);
                    die;
                }
            }
        } else {
            $this->view("loginview");
        }
    }
    function logout()
    {
        session_unset();
        session_destroy();
        header("location: /ltw/home");
    }

    function userprofile()
    {
        $userdata = [];
        $user = $this->model("usermodel");
        $userdata = $user->getuser($_SESSION['id']);
        // if (isset($id[0])) {
        //     $user = $this->model("usermodel");
        //     $userdata = $user->getuser($id[0]);
        //     if ($userdata != []){
        //         $this->view("userprofileupdateview",$userdata);
        //     }
        // }

        if (isset($_POST['update'])) {

            $fname = "";
            $lname = "";
            $address = "";
            $email = "";
            $phone = "";
            $img_profile = "";
            $id = $_SESSION['id'];
            if (isset($_POST['fname'])) {
                $fname = $_POST['fname'];
                //echo $fname;
            }
            if (isset($_POST['lname'])) {
                $lname = $_POST['lname'];
                //echo $lname;
            }
            if (isset($_POST['address'])) {
                $address = trim($_POST['address']);
                //echo $address;
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                //echo $email;
            }
            if (isset($_POST['phone'])) {
                $phone = $_POST['phone'];
                //echo $phone;
            }

            if ($fname == "" || $lname == "" || $address == "" || $email == "" || $phone == "") {
                $msg = "Please fill all require fields!";
            } else {

                // Upload file
                if (isset($_FILES["file"])) {

                    $username = $userdata['username'];
                    //add some restrictions to the file upload, filter: .gif, .jpeg, and .png files; and the file size must be under 5MB
                    $allowedExts = array("jpg", "jpeg", "gif", "png");
                    $nameParts = explode(".", $_FILES["file"]["name"]);
                    $extension = end($nameParts);
                    if ((($_FILES["file"]["type"] == "image/gif")
                            || ($_FILES["file"]["type"] == "image/jpeg")
                            || ($_FILES["file"]["type"] == "image/png")
                            || ($_FILES["file"]["type"] == "image/pjpeg"))
                        && ($_FILES["file"]["size"] < 5000000)
                        && in_array($extension, $allowedExts)
                    ) {
                        if ($_FILES["file"]["error"] > 0) {
                            // echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                        } else {
                            //mkdir("./public/upload/user/" . $username);
                            if (file_exists("./public/upload/user/" . $username . $_FILES["file"]["name"])) {
                                unlink("./public/upload/user/" . $username . $_FILES["file"]["name"]);
                            }

                            move_uploaded_file($_FILES["file"]["tmp_name"], "./public/upload/user/" . $username . "/" . $_FILES["file"]["name"]);
                            $img_profile = "/ltw/public/upload/user/" . $username . "/" . $_FILES["file"]["name"];
                        }
                    } else {
                        //   echo "Invalid file";
                        $img_profile = "";
                    }
                }
                //End Upload File

                $success = $user->updateuser($fname, $lname, $address, $email, $phone, $img_profile, $id);
                if ($success == true) {
                    $msg = "Update success!";
                    $show = "<script>
                                    MySUSModal1.show();
                                </script>";

                    $this->view("userprofileupdateview", [
                        "show" => $show,
                        "msg" => $msg,
                    ]);
                    die;
                } else {
                    $msg = "Update Failed! Please try again!";
                    $this->view("userprofileupdateview", [
                        "err" => $msg,
                    ]);
                    die;
                }
            }
        } else {
            $this->view("userprofileupdateview", $userdata);
        }
    }
}
