<?php require_once "views/partials/header.php"; ?>

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-12 col-md-6 m-auto p-4">
            <div class="text-center">
                <h1>User: <?= $user->name ?></h1>
                <h5>Email: <?= $user->email ?></h5>
            </div>
            <div class="mt-3 text-center">
                <a href="/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit name/email</a>
                <a href="/users/editPassword?id=<?= $user->id ?>" class="btn btn-warning">Edit password</a>
                <a href="/users/destroy?id=<?= $user->id ?>" class="btn btn-danger">Delete a user</a>
            </div>
        </div>
    </div>
</div>

<?php require_once "views/partials/footer.php"; ?>
