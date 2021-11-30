<?php
class Profile extends Controller
{
    function default() {
        $this->view("profile");
    }
    function pwchange() {
        $this->view("pwchange");
    }
    function adminpage() {
        $this->view("adminpage");
    }

    function usermanager() {
        $this->view("usermanager");
    }

    function productmanager() {
        $this->view("productmanager");
    }
    function newsmanager() {
        $this->view("newsmanager");
    }
}
?>