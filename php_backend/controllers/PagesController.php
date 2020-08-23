<?php
namespace App\Controllers;


use App\Core\App;

class PagesController {
    public function home()
    {
        check_auth();
        redirect("/rooms");
    }


    public function error404()
    {
        check_auth();

        return view('404');
    }

}