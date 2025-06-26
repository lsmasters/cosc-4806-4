<?php

class Change extends Controller {

    public function index() {
      $this->view('/changeItem/index');
      die;
    }
  
    public function update() {
        
        $subject = $_REQUEST['subject'];
        
        echo "Controller change/update<br>";
        echo  'SUBJECT:   ' . $subject . '<br>';   
        echo  'USERID:    ' . $_SESSION['userID'] . '<br>';
        die;
      
        $reminder = $this->model('Reminder');
      
        
        $reminder->subject = $subject;// set subject in model reminder
        $_SESSION['id'] = $id;
        $reminder->update();
        $this->view('reminders'); 
        die;  
    }  
}
