<?php require_once "views/partials/header.php";?>

    <div class="container">
        <div class="row">
            <div class="m-auto">
                <form action="/rooms/edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $room->id ?>">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="<?= $room->title ?>">
                    </div>
                    <label for="price">Price</label>
                    <div class="input-group">
                        <input type="text" id="price" name="price" class="form-control" value="<?= number_format($room->price) ?>">
                        <div class="input-group-append">
                            <span class="input-group-text">&euro;</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description" class="form-control" value="<?= $room->description ?>">
                    </div>
                    <div>
                        <div class="mb-4">
                            <img src="../public/img/<?= $room->img ?>" alt="" width="300px;" class="mr-3">
                        </div>
                        <div class="form-group justify-content-center align-items-center mb-4">
                            <h5>Change image</h5>
                            <label for="img"></label>
                            <input type="file" name="img" id="img">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Save</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once "views/partials/footer.php"; ?>