<?php

class newsmodel extends Database
{

    public function insertNew($tieu_de, $noi_dung, $mo_ta, $thoi_gian, $img_new)
    {
        $stmt = $this->conn->prepare("INSERT INTO news (tieu_de, noi_dung, mo_ta, thoi_gian, img_new) 
                VALUES (?, ?, ?, ? , ?)");
        $stmt->bind_param("sssss", $tieu_de, $noi_dung,  $mo_ta, $thoi_gian, $img_new);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->affected_rows == 1)
            return true;
        return false;
    }


    function getAllNew()
    {
        $sql = "SELECT * FROM news";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getNew($id)
    {
        $stmt = $this->conn->prepare("SELECT id_new,  tieu_de, noi_dung, mo_ta, thoi_gian, img_new FROM news WHERE id_new = ?");
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

    public function deleteNew($id)
    {

        $stmt = $this->conn->prepare("DELETE FROM news WHERE id_new = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->affected_rows == 1)
            return true;
        return false;
    }

    public function updateNew($tieu_de, $noi_dung, $mo_ta, $thoi_gian, $img_new, $id_new)
    {
        $stmt = $this->conn->prepare("UPDATE news SET tieu_de = ?, noi_dung = ?,  mo_ta=?, thoi_gian =? , img_new=? WHERE id_new = ?");
        $stmt->bind_param("ssssss",$tieu_de, $noi_dung, $mo_ta, $thoi_gian, $img_new, $id_new);
        $status = $stmt->execute();
        if ($status == true) {
            // $_SESSION['name'] = $ten_dang_nhap;
            // $_SESSION['img_profile'] = $img_profile;
            return true;
        }
        return false;
    }
}
