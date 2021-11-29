<?php

class productmodel extends Database
{

    public function insertProduct($ten_thiet_ke, $chu_de, $dien_tich, $mau, $cong_nghe, $gia , $img_product, $mo_ta)
    {
        $stmt = $this->conn->prepare("INSERT INTO product (ten_thiet_ke, chu_de, dien_tich, mau, cong_nghe, gia, img_product, mo_ta) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $ten_thiet_ke, $chu_de, $dien_tich, $mau, $cong_nghe, $gia, $img_product, $mo_ta);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->affected_rows == 1)
            return true;
        return false;
    }


    function getAllProduct()
    {
        $sql = "SELECT * FROM product";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getProduct($id)
    {
        $stmt = $this->conn->prepare("SELECT id ,ten_thiet_ke, chu_de, dien_tich, mau, cong_nghe, gia , img_product, mo_ta FROM product WHERE id = ?");
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

    public function deleteProduct($id)
    {

        $stmt = $this->conn->prepare("DELETE FROM product WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->affected_rows == 1)
            return true;
        return false;
    }

    public function updateProduct($ten_thiet_ke, $chu_de, $dien_tich, $mau, $cong_nghe, $gia, $img_product, $mo_ta, $id)
    {
        $stmt = $this->conn->prepare("UPDATE product SET ten_thiet_ke = ?, chu_de = ?, dien_tich = ?, mau = ?, cong_nghe = ?, gia = ?, img_product = ?, mo_ta = ?  WHERE id = ?");
        $stmt->bind_param("sssssssss",  $ten_thiet_ke, $chu_de, $dien_tich, $mau, $cong_nghe, $gia, $img_product,$mo_ta, $id);
        $status = $stmt->execute();
        if ($status == true) {
            // $_SESSION['name'] = $ten_dang_nhap;
            // $_SESSION['img_profile'] = $img_profile;
            return true;
        }
        return false;
    }
}
