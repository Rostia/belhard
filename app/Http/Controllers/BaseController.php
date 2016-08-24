<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BaseController extends Controller {
    public function __construct() {
       // parent::__construct();
    }
    public function getIndex($url = 'index')
    {
        $body = "<h1>Hello world</h1>";
        return view('index')->with('url', $url)->with("body" , $body);
    }
}
