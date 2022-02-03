<?php namespace App\Controllers;
use CodeIgniter\Controller;
 
class Hellowordci4 extends Controller
{
    public function index()
    {
        $data['title'] = "Hello World from Codeigniter 4";
        echo view('hellowordview', $data);
    }
 
}