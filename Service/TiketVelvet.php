<?php

class TiketVelvet extends Tiket {
    public $bantal_selimut_pack;
    public $layanan_butler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $bantal_selimut_pack, $layanan_butler)
    {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->bantal_selimut_pack = $bantal_selimut_pack;
        $this->layanan_butler = $layanan_butler;
    }

    public function hitungTotalHarga()
    {
        return ($this->harga_dasar_tiket * $this->jumlah_kursi) * 1.50;
    }

    public function tampilkanInfoFasilitas()
    {
        return "Tiket Velvet dengan bantal selimut pack: " . $this->bantal_selimut_pack . " dan layanan butler: " . $this->layanan_butler;
    }
}