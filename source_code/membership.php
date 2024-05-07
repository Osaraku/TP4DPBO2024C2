<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Membership.controller.php");

$membership = new MembershipController();

if (isset($_GET['add'])) {
    $membership->form_add();
} else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $membership->form_edit($id);
} else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $membership->delete($id);
} else if (isset($_POST['submit'])) {
    if(isset($_POST['id'])){
        $membership->edit($_POST);
    }else{
        $membership->add($_POST);
    }
} else {
    $membership->index();
}