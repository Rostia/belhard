<?php namespace App\Http\Controllers;


class TestController extends Controller {
    public function getIndex($id = 5){
        echo 'GetIndex'.$id;
    }
    public function getProfile($id) {
        echo 'ProfileAction'.$id;
    }
}
