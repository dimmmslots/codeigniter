<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'navState' => ['active','','',''],
        ];
        echo view('pages/home_dimas',$data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'navState' => ['','active','',''],
        ];
        echo view('pages/about_dimas',$data);
    }

    // public function contact()
    // {
    //     $data = [
    //         'title' => 'Contact',
    //         'navState' => ['active','',''],
    //     ];
    //     echo view('pages/contact',$data);
    // }
}
