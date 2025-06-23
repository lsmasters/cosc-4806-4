<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p><a href='/reminders/create'>Create Reminder</a></p>;
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>
    <?php
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    ?>

    <?php require_once 'app/views/templates/footer.php' ?>
