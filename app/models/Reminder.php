<?php

class Reminder {

    public function __construct() {      
    }

    public function get_all_reminders () {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function create () {
      $db = db_connect();
      $sql = "INSERT INTO reminders (user_id,subject) VALUES (:userid, :subject)";
      $stmt = $db -> prepare($sql);
      $stmt -> bindParam(':userid', $_SESSION['userID']);
      $stmt -> bindParam(':subject', $_SESSION['subject']);
      return $stmt -> execute();
    }
    
  
    public function update_reminder ($reminder_id) {
      $db = db_connect();
        //do code for update
        /*
      $statement = $db->prepare("select * from users;");
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      return $rows;
        */
    }

    public function addReminder($id,$subj) {
      $db = db_connect();
      $sql = "INSERT INTO reminders (user_id, subject) VALUES (:userid, :subject)";     
      $stmt = $db -> prepare($sql);
      $stmt -> bindParam(':userid', $id);
      $stmt -> bindParam(':subject', $subj);

      return $stmt -> execute(); 
    }
}

    