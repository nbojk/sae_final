<?php require_once "views/partials/header.php"; ?>
<div class="container">
    <div class="text-center m-4">
        <a href="/users/create" class="btn btn-info">Add new user</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php foreach ($users as $user): ?>
            <tr>
                <td class="border-bottom border-secondary"><?= $user->id ?></td>
                <td class="border-bottom border-secondary"><?= $user->name ?></td>
                <td class="border-bottom border-secondary"><?= $user->email ?></td>
                <td class="border-bottom border-secondary">
                    <a href="/users/show?id=<?= $user->id ?>" class="btn btn-danger mb-2">Change information</a>

                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>


<?php require_once "views/partials/footer.php"; ?>
