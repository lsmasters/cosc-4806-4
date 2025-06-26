<?php

class Reminders extends Controller {

    public function index() {	
      $reminder = $this->model('Reminder');
      $list_of_reminders = $reminder->get_all_reminders();
	  $this->view('reminders/index',['reminders' => $list_of_reminders]); 
    }

   public function create() {
      $reminder = $this->model('Reminder'); 
      $_SESSION['subject'] = $_REQUEST['subject'];
      $this->view('reminders/create');
      $reminder->addReminder();
      header('Location: /reminders');
      die;  
    }
    
    public function deleteItem($id) {
          $reminder = $this->model('Reminder');
          $this->view('reminders/index');

          $reminder->delete($id);
          $this->view('reminders/index');
          die; 
      }  

      
 
}

?>
