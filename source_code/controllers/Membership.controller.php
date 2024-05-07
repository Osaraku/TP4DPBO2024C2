<?php
include_once("connection.php");
include_once("models/Membership.class.php");
include_once("views/Membership.view.php");
include_once("views/MembershipForm.view.php");

class MembershipController {
  private $membership;

  function __construct(){
    $this->membership = new Membership(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->membership->open();
    $this->membership->getMembership();
    $data = array();
    while($row = $this->membership->getResult()){
      array_push($data, $row);
    }

    $this->membership->close();

    $view = new MembershipView();
    $view->render($data);
  }

  function form_add(){
    $view = new MembershipForm();
    $view->render();
  }

  function form_edit($id){
    $this->membership->open();
    $this->membership->getMembershipById($id);
    $data = array();
    $data = $this->membership->getResult();

    $this->membership->close();

    $view = new MembershipForm();
    $view->render_edit($data);
  }
  
  function add($data){
    $this->membership->open();
    $result = $this->membership->add($data);
    if ($result){
			echo "<script>
                alert('Membership telah berhasil ditambahkan!');
                document.location.href = 'membership.php';
            </script>";
    } else {
      echo "<script>
                alert('Membership gagal untuk ditambahkan!');
                document.location.href = 'membership.php';
            </script>";
		}

    $this->membership->close();

  }

  function edit($id){
    $this->membership->open();
    $result = $this->membership->edit($id);
    if ($result){
			echo "<script>
              alert('Membership telah berhasil diubah!');
              document.location.href = 'membership.php';
            </script>";
    } else {
      echo "<script>
              alert('Membership gagal untuk diubah!');
              document.location.href = 'membership.php';
            </script>";
		}

    $this->membership->close();

  }

  function delete($id){
    $this->membership->open();
    $result = $this->membership->delete($id);
    if ($result){
      echo "<script>
              alert('Membership telah berhasil dihapus!');
              document.location.href = 'membership.php';
            </script>";
    } else {
      echo "<script>
              alert('Membership gagal untuk dihapus!');
              document.location.href = 'membership.php';
            </script>";
    }

    $this->membership->close();
  }
}