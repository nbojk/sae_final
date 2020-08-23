<?php require_once "views/partials/header.php"; ?>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12 col-md-6 m-auto">
            <form action="/users/edit" method="post">
                <input type="hidden" name="id" value="<?= $user->id ?>">

                <div class="form-group">
                    <label for="name">User name</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= $user->name ?>">
                </div>

                <div class="form-group">
                    <label for="email">User email</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?= $user->email ?>">
                </div>

                <div class="form-group">
                    <label for="password">Enter password to continue:</label>
                    <input type="password" id="password" name="password" class="form-control" value="">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "views/partials/header.php"; ?>
