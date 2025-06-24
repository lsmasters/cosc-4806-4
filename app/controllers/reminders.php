<?php

class Reminders extends Controller {

    public function index() {	
      $reminder = $this->model('Reminder');
      $list_of_reminders = $reminder->get_all_reminders();
	    $this->view('reminders/index',['reminders' => $list_of_reminders]); 
    }

   public function create() {
      $reminder = $this->model('Reminder');
      $this->view('reminders/create'); 
      //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $subj = $_REQUEST['subject'];
      //$id = $_SESSION['userID'];
      //$subj = $_SESSION['subject'];
      $reminder->addReminder($subj);
      $this->view('reminders'); 
      die;  
  }  
      
 
}

?>
