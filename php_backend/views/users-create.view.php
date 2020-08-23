<?php require_once "views/partials/header.php"; ?>
<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12 col-md-6 m-auto">
            <form action="/users" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Add new user</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "views/partials/header.php"; ?>
