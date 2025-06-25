<?php require_once 'app/views/templates/header.php' ?>

<main role="main" class="container">
<h1>Change a Reminder</h1>
<br>

<div class="row">
    <div class="col-sm-auto">
        <form action="/reminders/change" method="POST" >
        <fieldset>
            <br>
            <div class="form-group">
                <label for="subject">Change reinder here</label>
                <input required type="text" class="form-control" name="subject" value="<?= isset($_SESSION['subject']) ? htmlspecialchars($_SESSION['subject']) : '' ?>" 
                   autofocus>
            </div>
            <br>

            <br>
            <button type="SUBMIT CHANGES" class="btn btn-primary">SUBMIT</button>
        </fieldset>
        </form> 

    </div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
