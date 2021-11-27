<?php
include_once("./model/Database.php");
class UserModel extends Database
{

    public function login($ten_dang_nhap, $password){
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE ten_dang_nhap=?");
        $stmt->bind_param("s", $ten_dang_nhap);
        $stmt->execute();
        // $result = $this->conn->query($stmt);
        $result = $stmt->get_result();
        if ( $result->num_rows == 1 ) {
            $row = $result->fetch_assoc();
            
            if ( $password === $row['mat_khau'] ) {
                // password_verify($password, $row['password'])
                $_SESSION['id'] = $row['id_user'];
                $_SESSION['ho_ten'] = $row['ho'] . " " . $row['ten'];
                $_SESSION['ten_dang_nhap'] = $row['ten_dang_nhap'];
                $_SESSION['vai_tro'] = $row['vai_tro'];
                echo "dang chay 1";
                // $_SESSION['img_profile'] = $row['img_profile'];
                return true;
            }
        }

        return false;
    }




    public function insertUser($ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro)
    {
        $stmt = $this->conn->prepare("INSERT INTO user (ten_dang_nhap, ho, ten, email, dien_thoai, mat_khau, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->affected_rows == 1)
            return true;
        return false;
    }


    function getAllUser()
    {
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getUser($id)
    {
        $stmt = $this->conn->prepare("SELECT id_user, ten_dang_nhap, ho, ten, email, dien_thoai, mat_khau, vai_tro FROM user WHERE id_user = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            [];
        }
    }

    public function deleteUser($id)
    {

        $stmt = $this->conn->prepare("DELETE FROM user WHERE id_user = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->affected_rows == 1)
            return true;
        return false;
    }

    public function updateUser($ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro, $id_user)
    {
        $stmt = $this->conn->prepare("UPDATE user SET ten_dang_nhap = ?, ho = ?, ten = ?, email = ?, dien_thoai = ?, mat_khau = ?, vai_tro = ? WHERE id_user = ?");
        $stmt->bind_param("ssssssss", $ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro, $id_user);
        $status = $stmt->execute();
        if ($status == true) {
            $_SESSION['name'] = $ten_dang_nhap;
            // $_SESSION['img_profile'] = $img_profile;
            return true;
        }
        return false;
    }
}
