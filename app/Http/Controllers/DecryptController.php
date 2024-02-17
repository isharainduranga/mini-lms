<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DecryptController extends Controller
{
    public function decrypt(){
        
        session_start();
        if (isset($_GET["video"]) && isset($_SESSION[$_GET["video"]])) {
        header("Content-Type: video/mp4");
        $file = $_SESSION[$_GET["video"]]; //Get the filename
        readfile($file); //Proxy
        die();       

        }
    }
}
