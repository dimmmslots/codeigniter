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
            'navState' => ['','','active',''],
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
            'navState' => ['','','active',''],
            'detail' => $detail,
        ];

        return view('pages/detail',$data);
    }

    public function input()
    {
        $data = [
            'title' => 'Input Produk',
            'navState' => ['','','','active'],
        ];
        return view('pages/input',$data);
    }

    public function simpan()
    {
        $produkmodel = new \App\Models\ProdukModel();
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $this->request->getVar('gambar')
        ];
        $produkmodel->insert($data);
        return redirect()->to('/produk');
    }
}
