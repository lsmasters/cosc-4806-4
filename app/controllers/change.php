<?php

class Change extends Controller {

    public function index() {
      $this->view('/changeItem/index');
      die;
    }
  
    public function update() {
        
        $subject = $_REQUEST['subject'];
        $id = $_SESION['id'];
        echo $subject;  
        echo $id;
        die;
      
        $reminder = $this->model('Reminder');
      
        
        $reminder->subject = $subject;// set subject in model reminder
        $_SESSION['id'] = $id;
        $reminder->update();
        $this->view('reminders'); 
        die;  
    }  
}
