<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Member.controller.php");

$member = new MemberController();

if (isset($_GET['add'])) {
    $member->form_add();
} else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $member->form_edit($id);
} else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $member->delete($id);
} else if (isset($_POST['submit'])) {
    if(isset($_POST['id'])){
        $member->edit($_POST);
    }else{
        $member->add($_POST);
    }
} else {
    $member->index();
}