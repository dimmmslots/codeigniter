<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        $produkmodel = new \App\Models\ProdukModel();
        $produk = $produkmodel->findAll();
        $data = [
            'title' => 'produk',
            'navState' => ['','','active'],
            'produk' => $produk
        ];

        return view('produk',$data);
    }

    public function detail($kode)
    {
        $produkmodel = new \App\Models\ProdukModel();
        $detail = $produkmodel->where(['kode' => $kode])->first();
        $data = [
            'title' => 'Detail',
            'navState' => ['','','active'],
            'detail' => $detail,
        ];

        return view('pages/detail',$data);
    }
}
