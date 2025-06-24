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
    <div class="d-flex justify-content-between align-items-center border p-2 mb-2 rounded">
        <div>
            <?= htmlspecialchars($item['subject']) ?>
        </div>
        <div>
            <a href="reminders/update?id=<?= $item['id'] ?>" class="btn btn-primary btn-sm">EDIT</a>
            <a href="reminders/delete?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">DELETE</a>
        </div>
    </div>
<?php endforeach; ?>


<?php require_once 'app/views/templates/footer.php' ?>
