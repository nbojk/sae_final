<?php require_once "views/partials/header.php";?>
<div class="container">
    <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card" style="width: 300px">
                    <div style="height:200px; overflow: hidden;">
                        <img src="../public/img/<?= $room->img?>" alt="" style="width: 300px">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $room->title ?></h5>
                        <h6><?= number_format($room->price) ?>&euro;/day</h6>
                        <p style="color: darkgrey"><?= $room->description ?></p>
                        <a href="/rooms/edit?id=<?= $room->id?>" class="btn btn-warning">Edit</a>
                        <a href="/rooms/destroy?id=<?= $room->id?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php require_once "views/partials/footer.php"; ?>