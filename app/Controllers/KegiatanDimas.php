<?php

namespace App\Controllers;

class KegiatanDimas extends BaseController
{
    public function index()
    {
        $kegiatanmodel = new \App\Models\KegiatanModel_dimas();
        $kegiatan = $kegiatanmodel->findAll();
        $data = [
            'title' => 'Kegiatan',
            'navState' => ['','','active'],
            'kegiatan' => $kegiatan,
        ];

        return view('pages/kegiatan_dimas',$data);
    }

    public function input()
    {
        $data = [
            'title' => 'Input Kegiatan',
            'navState' => ['','','','active'] 
        ];

        return view('pages/input',$data);
    }
}
