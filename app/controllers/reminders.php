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
      $_SESSION['subject'] = $_REQUEST['subject'];
      //$id = $_SESSION['userID'];
      //$subj = $_SESSION['subject'];
      $reminder->addReminder();
      $this->view('reminders'); 
      die;  
      }
    
      public function deleteItem($id) {
          $reminder = $this->model('Reminder');
          $this->view('reminders/index'); 
          $reminder->delete($id);
          $this->view('reminders'); 
          die;  
      }  

      public function change($id,$subject) {
          $reminder = $this->model('Reminder');
          $this->view('reminders/change');
          $_SESSION['subject'] = $subject;
          $_SESSION['id'] = $id;
          $reminder->update();
          $this->view('reminders'); 
          die;  
      }  
 
}

?>
