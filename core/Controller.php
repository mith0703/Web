<?php 
    class Controller
    {
        function model($model) {
            require_once "./model/" . $model . ".php";
            return new $model;
        }

        function view( $view, $data = []) {
            require_once "./view/" . $view . ".php";
        }
        //PHUC TODO - CHECK VALIDATE INPUT

        function upload_file_user($ten_dang_nhap, $file) {
            if (isset($file["file"])) {
                $allowedExts = array("jpg", "jpeg", "gif", "png");
                $nameParts = explode(".", $file["file"]["name"]);
                $extension = end($nameParts);
                if ((($file["file"]["type"] == "image/gif")
                        || ($file["file"]["type"] == "image/jpeg")
                        || ($file["file"]["type"] == "image/png")
                        || ($file["file"]["type"] == "image/pjpeg"))
                    && ($file["file"]["size"] < 5000000)
                    && in_array($extension, $allowedExts)
                ) {
                    if ($file["file"]["error"] == 0) {
                       if (!file_exists("public/upload/user/$ten_dang_nhap"))
                            mkdir("public/upload/user/" . $ten_dang_nhap , 0777, 1);
                        if (file_exists("public/upload/user/" . $ten_dang_nhap . $file["file"]["name"])) {
                            unlink("public/upload/user/" . $ten_dang_nhap . $file["file"]["name"]);
                        }

                        move_uploaded_file($file["file"]["tmp_name"], "public/upload/user/" . $ten_dang_nhap . "/" . $file["file"]["name"]);
                        $img_profile = "/mvc/public/upload/user/" . $ten_dang_nhap . "/" . $file["file"]["name"];
                    }
                    // if ($file["file"]["error"] == 0) {
                    //     echo "dang chay upload file user";
                    //    if (!file_exists("/mvc/public/upload/user/$ten_dang_nhap"))
                    //         mkdir("/mvc/public/upload/user/" . $ten_dang_nhap , 0777, 1);
                    //     if (file_exists("/mvc/public/upload/user/" . $ten_dang_nhap . $file["file"]["name"])) {
                    //         unlink("/mvc/public/upload/user/" . $ten_dang_nhap . $file["file"]["name"]);
                    //     }

                    //     move_uploaded_file($file["file"]["tmp_name"], "/mvc/public/upload/user/" . $ten_dang_nhap . "/" . $file["file"]["name"]);
                    //     $img_profile = "/mvc/public/upload/user/" . $ten_dang_nhap . "/" . $file["file"]["name"];
                    // }
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }

        function upload_file_item($foldername, $file) {
            if (isset($file)) {
                $allowedExts = array("jpg", "jpeg", "gif", "png");
                $nameParts = explode(".", $file["name"]);
                $extension = end($nameParts);
                if ((($file["type"] == "image/gif")
                        || ($file["type"] == "image/jpeg")
                        || ($file["type"] == "image/png")
                        || ($file["type"] == "image/pjpeg"))
                    && ($file["size"] < 5000000)
                    && in_array($extension, $allowedExts)
                ) {
                    if ($file["error"] > 0) {
                    } else {
                        if (!file_exists("./public/upload/item/" . $foldername)){
                            mkdir("./public/upload/item/" . $foldername);
                        }
                        if (file_exists("./public/upload/item/" . $foldername . $file["name"])) {
                            unlink("./public/upload/item/" . $foldername . $file["name"]);
                        }

                        move_uploaded_file($file["tmp_name"], "./public/upload/item/" . $foldername . "/" . $file["name"]);
                        $img_profile = "/ltw/public/upload/item/" . $foldername . "/" . $file["name"];
                    }
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }

        function upload_file_founder($name, $file) {
            if (isset($file["file"])) {
                $allowedExts = array("jpg", "jpeg", "gif", "png");
                $nameParts = explode(".", $file["file"]["name"]);
                $extension = end($nameParts);
                if ((($file["file"]["type"] == "image/gif")
                        || ($file["file"]["type"] == "image/jpeg")
                        || ($file["file"]["type"] == "image/png")
                        || ($file["file"]["type"] == "image/pjpeg"))
                    && ($file["file"]["size"] < 5000000)
                    && in_array($extension, $allowedExts)
                ) {
                    if ($file["file"]["error"] > 0) {
                    } else {
                        if (!file_exists("./public/upload/founder/" . $name))
                            mkdir("./public/upload/founder/" . $name);
                        if (file_exists("./public/upload/founder/" . $name . $file["file"]["name"])) {
                            unlink("./public/upload/founder/" . $name . $file["file"]["name"]);
                        }

                        move_uploaded_file($file["file"]["tmp_name"], "./public/upload/founder/" . $name . "/" . $file["file"]["name"]);
                        $img_profile = "/ltw/public/upload/founder/" . $name . "/" . $file["file"]["name"];
                    }
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }

        function upload_file_partner($name, $file) {
            if (isset($file["file"])) {
                $allowedExts = array("jpg", "jpeg", "gif", "png");
                $nameParts = explode(".", $file["file"]["name"]);
                $extension = end($nameParts);
                if ((($file["file"]["type"] == "image/gif")
                        || ($file["file"]["type"] == "image/jpeg")
                        || ($file["file"]["type"] == "image/png")
                        || ($file["file"]["type"] == "image/pjpeg"))
                    && ($file["file"]["size"] < 5000000)
                    && in_array($extension, $allowedExts)
                ) {
                    if ($file["file"]["error"] > 0) {
                    } else {
                        if (!file_exists("./public/upload/partner/" . $name))
                            mkdir("./public/upload/partner/" . $name);
                        if (file_exists("./public/upload/partner/" . $name . $file["file"]["name"])) {
                            unlink("./public/upload/partner/" . $name . $file["file"]["name"]);
                        }

                        move_uploaded_file($file["file"]["tmp_name"], "./public/upload/partner/" . $name . "/" . $file["file"]["name"]);
                        $img_profile = "/ltw/public/upload/partner/" . $name . "/" . $file["file"]["name"];
                    }
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }
    }
?>