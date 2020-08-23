<?php require_once "views/partials/header.php";?>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <a href="/rooms/create" class="btn btn-info">Add a room</a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($rooms as $room): ?>
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                    <div class="card" style="width: 300px; overflow: hidden">
                        <div style="height:200px; overflow: hidden;">
                            <img src="../public/img/<?= $room->img?>" alt="" style="width: 300px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $room->title ?></h5>
                            <h6><?= number_format($room->price) ?>&euro;/day</h6>
                            <p style="color: darkgrey"><?= $room->description ?></p>
                            <a href="/rooms/show?id=<?= $room->id?>" class="btn btn-info">Show</a>
                            <a href="/rooms/edit?id=<?= $room->id?>" class="btn btn-warning">Edit</a>
                            <a href="/rooms/destroy?id=<?= $room->id?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php require_once "views/partials/footer.php"; ?>