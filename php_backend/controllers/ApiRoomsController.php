<?php
namespace App\Controllers;
use App\Core\App;

class ApiRoomsController {

    public function index()
    {
        $rooms = App::get('database')->getAll('rooms');
        echo json_encode($rooms);
    }
}