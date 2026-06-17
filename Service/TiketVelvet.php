<?php
require_once __DIR__ . '/Tiket.php';

class TiketVelvet extends \Tiket {
    public $bantal_selimut_pack;
    public $layanan_butler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $bantal_selimut_pack, $layanan_butler)
    {
        parent::__construct();
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->harga_dasar_tiket = $harga_dasar_tiket;
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

    public function tampilDataTiket()
    {
        $sql = "SELECT * FROM tabel_tiket WHERE jenis_studio = 'Velvet'";
        $hasil = $this->koneksi->query($sql);

        if ($hasil->num_rows > 0) {
            return $hasil->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }
}