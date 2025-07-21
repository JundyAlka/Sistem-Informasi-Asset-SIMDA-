<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenyusutan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPenyusutan');
    }

    public function index()
    {
        // Ambil semua data penyusutan dengan join ke tabel asset dan barang
        $this->db->select('penyusutan.*, asset.kode_asset, barang.nama_barang');
        $this->db->from('penyusutan');
        $this->db->join('asset', 'penyusutan.id_asset = asset.id_asset');
        $this->db->join('barang', 'asset.id_barang = barang.id_barang');
        $penyusutan = $this->db->get()->result();
        
        // Hitung nilai penyusutan dan nilai buku untuk setiap item
        foreach ($penyusutan as $item) {
            // Gunakan nilai default jika field tidak ada
            $harga_perolehan = isset($item->harga_perolehan) ? $item->harga_perolehan : 0;
            $umur_ekonomis = isset($item->umur_ekonomis) ? $item->umur_ekonomis : 1; // default 1 tahun
            $tahun_pemakaian = isset($item->tahun_pemakaian) ? $item->tahun_pemakaian : 1; // default 1 tahun
            
            // Hitung nilai penyusutan per tahun
            $item->nilai_penyusutan = $harga_perolehan / $umur_ekonomis;
            
            // Hitung nilai buku
            $item->nilai_buku = $harga_perolehan - ($item->nilai_penyusutan * $tahun_pemakaian);
        }
        
        $data = [
            'title' => 'Penyusutan Asset',
            'penyusutan' => $penyusutan
        ];
        
        // Load view
        $this->load->view('KepalaDesa/Layout/head', $data);
        $this->load->view('KepalaDesa/Layout/aside');
        $this->load->view('KepalaDesa/vPenyusutan', $data);
        $this->load->view('KepalaDesa/Layout/footer');
    }
}
