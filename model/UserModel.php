<?php

class usermodel extends Database
{

    public function login($ten_dang_nhap, $password){
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE ten_dang_nhap=?");
        $stmt->bind_param("s", $ten_dang_nhap);
        $stmt->execute();
        // $result = $this->conn->query($stmt);
        $result = $stmt->get_result();
        if ( $result->num_rows == 1 ) {
            $row = $result->fetch_assoc();
            if ( password_verify($password, $row['mat_khau'])  ) {
                // $password === $row['mat_khau']
                // password_verify($password, $row['password'])
                
                $_SESSION['id'] = $row['id_user'];
                $_SESSION['ho'] = $row['ho'];
                $_SESSION['ten']= $row['ten'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['dien_thoai'] = $row['dien_thoai'];
                $_SESSION['dia_chi'] = $row['dia_chi'];
                $_SESSION['ten_dang_nhap'] = $row['ten_dang_nhap'];
                $_SESSION['vai_tro'] = $row['vai_tro'];
                // echo "dang chay login";
                $_SESSION['img_profile'] = $row['img_profile'];
                return true;
            }
        }
        return false;
    }




    public function insertUser($ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro, $img_profile, $dia_chi)
    {
        $stmt = $this->conn->prepare("INSERT INTO user (ten_dang_nhap, ho, ten, email, dien_thoai, mat_khau, vai_tro, img_profile, dia_chi) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro, $img_profile,$dia_chi);
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
        $stmt = $this->conn->prepare("SELECT id_user, ten_dang_nhap, ho, ten, email, dien_thoai, mat_khau, vai_tro,img_profile, dia_chi FROM user WHERE id_user = ?");
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


    public function updateUserAdmin($ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro, $img_profile, $dia_chi, $id_user)
    {
        $stmt = $this->conn->prepare("UPDATE user SET ten_dang_nhap = ?, ho = ?, ten = ?, email = ?, dien_thoai = ?, mat_khau = ?, vai_tro = ?, img_profile=?, dia_chi=? WHERE id_user = ?");
        $stmt->bind_param("ssssssssss", $ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro, $img_profile, $dia_chi, $id_user);
        $status = $stmt->execute();
        if ($status == true) {
         

            return true;
        }
        return false;
    }



    public function updateUser($ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro, $img_profile, $dia_chi, $id_user)
    {
        $stmt = $this->conn->prepare("UPDATE user SET ten_dang_nhap = ?, ho = ?, ten = ?, email = ?, dien_thoai = ?, mat_khau = ?, vai_tro = ?, img_profile=?, dia_chi=? WHERE id_user = ?");
        $stmt->bind_param("ssssssssss", $ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $mat_khau, $vai_tro, $img_profile, $dia_chi, $id_user);
        $status = $stmt->execute();
        if ($status == true) {
            $_SESSION['ho'] = $ho;
            $_SESSION['ten']= $ten;
            $_SESSION['email'] = $email;
            $_SESSION['dien_thoai'] = $dien_thoai;
            $_SESSION['dia_chi'] = $dia_chi;
            $_SESSION['ten_dang_nhap'] = $ten_dang_nhap;
            $_SESSION['vai_tro'] = $vai_tro;
            $_SESSION['img_profile'] = $img_profile;

            return true;
        }
        return false;
    }

    public function updateUserNoPW($ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $vai_tro, $img_profile, $dia_chi, $id_user)
    {
        $stmt = $this->conn->prepare("UPDATE user SET ten_dang_nhap = ?, ho = ?, ten = ?, email = ?, dien_thoai = ?, vai_tro = ?, img_profile=?, dia_chi=? WHERE id_user = ?");
        $stmt->bind_param("sssssssss", $ten_dang_nhap, $ho, $ten, $email, $dien_thoai, $vai_tro, $img_profile, $dia_chi, $id_user);
        $status = $stmt->execute();
        if ($status == true) {
            $_SESSION['ho'] = $ho;
            $_SESSION['ten']= $ten;
            $_SESSION['email'] = $email;
            $_SESSION['dien_thoai'] = $dien_thoai;
            $_SESSION['dia_chi'] = $dia_chi;
            $_SESSION['ten_dang_nhap'] = $ten_dang_nhap;
            $_SESSION['vai_tro'] = $vai_tro;
            $_SESSION['img_profile'] = $img_profile;
            return true;
        }
        return false;
    }

    public function updateUserPW($mat_khau, $id_user)
    {
        $stmt = $this->conn->prepare("UPDATE user SET mat_khau=? WHERE id_user = ?");
        $stmt->bind_param("ss", $mat_khau, $id_user);
        $status = $stmt->execute();
        if ($status == true) {
            return true;
        }
        return false;
    }
}
