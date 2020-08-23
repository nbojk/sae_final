<?php require_once "views/partials/header.php";?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 m-auto">
                <form action="/rooms/create" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <div>
                            <input type="file" id="img" name="img">
                        </div>
                    </div>
                    <label for="price">Price</label>
                    <div class="input-group">
                        <input type="text" id="price" name="price" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">&euro;</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <button type="submit" class="btn btn-info">Add</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once "views/partials/footer.php"; ?>