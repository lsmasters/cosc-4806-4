<?php require_once 'app/views/templates/header.php' ?>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                
                <p class="lead"> <?= date("F jS, Y"); ?></p>
                <p><a href='/reminders/create'>Create Reminder</a></p>
            </div>
        </div>
    </div>
</div>


<?php foreach($data['reminders'] as $item): ?>
    <?php if (!empty(trim($item['subject']))): ?>
        
    <div class="d-flex justify-content-between align-items-center border p-2 mb-2 rounded">
        <div>
            <?=   $_SESSION['id'] =$item['id'] ?>
        </div>
           
        <div>
            <?= htmlspecialchars($item['subject']) ?>
            
        </div>
        <div>
            <a href="change" class="btn btn-primary btn-sm">EDIT</a>

            <a href="/reminders/deleteItem/<?= $item['id'] ?>" class="btn btn-danger btn-sm">DELETE</a>
        </div>
    </div>
    <?php endif; ?>
<?php endforeach; ?>


<?php require_once 'app/views/templates/footer.php' ?>
