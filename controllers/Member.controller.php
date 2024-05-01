<?php
include_once("conf.php");
include_once("models/Member.class.php");
include_once("views/Member.view.php");

class MemberController {
  private $member;

  function __construct(){
    $this->member = new Member(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
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

  
  function add($data){
    $this->member->open();
    $this->member->add($data);
    $this->member->close();
    
    header("location:member.php");
  }

  function edit($data, $id){
    $this->member->open();
    $this->member->update($data, $id);
    $this->member->close();
    
    header("location:member.php");
  }

  function delete($id){
    $this->member->open();
    $this->member->delete($id);
    $this->member->close();
    
    header("location:member.php");
  }


}