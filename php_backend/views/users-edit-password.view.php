<?php require_once "views/partials/header.php"; ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6 m-auto">
                <form action="/users/editPassword" method="post">
                    <input type="hidden" name="id" value="<?= $user->id ?>">

                    <p><strong>User: </strong> <?= $user->name ?></p>
                    <p><strong>Email: </strong><?= $user->email ?></p>

                    <div class="form-group">
                        <label for="currentPassword">Current password:</label>
                        <input type="password" id="currentPassword" name="currentPassword" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label for="password">New password:</label>
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