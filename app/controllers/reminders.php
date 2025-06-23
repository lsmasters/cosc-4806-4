<?php

class Reminders extends Controller {

    public function index() {	
      $reminder = $this->model('Reminder');
      $list_of_reminders = $reminder->get_all_reminders();
      // for testing only 
      /*
        echo '<pre>';
      print_r($list_of_reminders);
      echo '</pre> ';
      die;
      */
	    $this->view('reminders/index',['reminders' => $list_of_reminders]);
	    
    }

}

?>