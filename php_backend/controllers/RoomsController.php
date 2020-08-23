<?php
namespace App\Controllers;
use App\Core\App;

class RoomsController {

    public function index()
    {
        check_auth();
        $rooms = App::get('database')->getAll('rooms');

        return view('rooms', compact('rooms'));
    }

    public function create()
    {
        check_auth();
        return view('rooms-create');
    }

    public function store()
    {
        check_auth();


        $_POST['title'] = filter_var($_POST['title'], FILTER_SANITIZE_STRING);

        $_POST['description'] = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

        $_POST['price'] = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT);
        if(!filter_var($_POST['price'], FILTER_VALIDATE_FLOAT)){
            return redirect('/rooms');
        }

        if(isset($_FILES['img'])){
            if($_FILES['img']['tmp_name'] != '' OR $_FILES['img']['name'] != ''){

                if($_FILES['img']['type'] == 'image/jpeg'
                    OR $_FILES['img']['type'] == 'image/png'
                    OR $_FILES['img']['type'] == 'image/jpg'){

                    $uploadDir = getcwd()."/public/img";

                    $imageName = "room-".time().$_FILES['img']['name'];

                    move_uploaded_file($_FILES['img']['tmp_name'],$uploadDir."/".$imageName);

                    $_POST['img'] = $imageName;
                }
            } else {
                return redirect('/items');
            }
        }

        App::get('database')->insert('rooms', $_POST);

        return redirect('/rooms');
    }

    public function show()
    {

        check_auth();
        $room = App::get('database')->getOne('rooms', $_GET['id']);

        return view('rooms-show', compact('room'));
    }

    public function edit()
    {
        check_auth();
        $room = App::get('database')->getOne('rooms', $_GET['id']);

        return view('rooms-edit', compact('room'));
    }

    public function update()
    {
        check_auth();
        $_POST['id'] = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($_POST['id'],FILTER_VALIDATE_INT))
        {
            redirect('/rooms');
        }

        $_POST['title'] = filter_var($_POST['title'], FILTER_SANITIZE_STRING);

        $_POST['description'] = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

        $_POST['oldImageName'] = filter_var($_POST['oldImageName'], FILTER_SANITIZE_STRING);


        $_POST['price'] = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        if(!filter_var($_POST['price'], FILTER_VALIDATE_FLOAT)){
            return redirect('/rooms');
        }


        if($_FILES['img']['tmp_name'] != '' OR $_FILES['img']['name'] != ''){

            if($_FILES['img']['type'] == 'image/jpeg'
                OR $_FILES['img']['type'] == 'image/png'
                OR $_FILES['img']['type'] == 'image/jpg') {

                $uploadDir = getcwd() . "/public/img";

                $newImageName = "room-" . time() . $_FILES['img']['name'];

                move_uploaded_file($_FILES['img']['tmp_name'], $uploadDir . "/" . $newImageName);

                $_POST['img'] = $newImageName;

                if(is_file($uploadDir."/".$_POST['oldImageName'])){

                    unlink($uploadDir."/".$_POST['oldImageName']);

                }

            }
        }

        unset($_POST['oldImageName']);

        App::get('database')->update('rooms', $_POST);

        return redirect('/rooms');
    }

    public function destroy()
    {
        check_auth();

        $room = App::get('database')->getOneAssoc('rooms', $_GET['id']);
        App::get('database')->delete('rooms', $room);

        return redirect('/rooms');

    }

}