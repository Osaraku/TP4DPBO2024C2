<?php
include_once("connection.php");
include_once("models/Member.class.php");
include_once("models/Membership.class.php");
include_once("views/Member.view.php");
include_once("views/MemberForm.view.php");

class MemberController {
  private $member;
  private $membership;

  function __construct(){
    $this->member = new Member(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->membership = new Membership(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->member->open();
    $this->member->getMember();
    $data = array();
    while($row = $this->member->getResult()){
      array_push($data, $row);
    }

    $this->member->close();

    $view = new MemberView();
    $view->render($data);
  }

  function form_add(){
    $this->membership->open();
    $this->membership->getMembership();
    $data = array();
    while ($memberships = $this->membership->getResult()) {
        array_push($data, $memberships);
    }

    $this->membership->close();
    $view = new MemberForm();
    $view->render($data);
  }

  function form_edit($id){
    $this->member->open();
    $this->membership->open();
    $this->member->getMemberById($id);
    $data = array();
    $data = $this->member->getResult();
    
    $this->membership->getMembership();
    $membership = array();
    while($row = $this->membership->getResult()){
      array_push($membership, $row);
    }

    $this->member->close();
    $this->membership->close();

    $view = new MemberForm();
    $view->render_edit($data, $membership);
  }

  function add($data){
    $this->member->open();
    $result = $this->member->add($data);  
    if ($result){
			echo "<script>
                alert('Member telah berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
      echo "<script>
                alert('Member gagal untuk ditambahkan!');
                document.location.href = 'index.php';
            </script>";
		}

    $this->member->close();
  }

  function edit($data){
    $this->member->open();
    $result = $this->member->edit($data);
    if ($result){
			echo "<script>
              alert('Member telah berhasil diubah!');
              document.location.href = 'index.php';
            </script>";
    } else {
      echo "<script>
              alert('Member gagal untuk diubah!');
              document.location.href = 'index.php';
            </script>";
		}

    $this->member->close();
  }

  function delete($id){
    $this->member->open();
    $result = $this->member->delete($id);
    if ($result){
      echo "<script>
              alert('Member telah berhasil dihapus!');
              document.location.href = 'index.php';
            </script>";
    } else {
      echo "<script>
              alert('Member gagal untuk dihapus!');
              document.location.href = 'index.php';
            </script>";
    }

    $this->member->close();
  }


}