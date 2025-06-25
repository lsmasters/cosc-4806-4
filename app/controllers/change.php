<?php

class Change extends Controller {

    public function index() {
      $this->view('/changeItem/index');
      die;
    }
  
    public function update() {
        
        $subject = $_REQUEST['subject'];
        // $id = $_SESSION['id';
        echo $subject;  
        //echo $id;
        die;
      
        $reminder = $this->model('Reminder');
        $this->view('changeItem');
        
        $_SESSION['subject'] = $subject;
        $_SESSION['id'] = $id;
        $reminder->update();
        $this->view('reminders'); 
        die;  
    }  
}
