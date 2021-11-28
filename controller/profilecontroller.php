<?php
class Profile extends Controller
{
    function default() {
        $this->view("profile");
    }
    function pwchange() {
        $this->view("pwchange");
    }
}
?>