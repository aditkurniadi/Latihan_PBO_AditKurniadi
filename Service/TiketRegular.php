<?php
require_once __DIR__ . '/Tiket.php';

class TiketRegular extends \Tiket{
    public $tipe_audio;
    public $lokasi_baris;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $tipe_audio, $lokasi_baris)
    {
        parent::__construct();
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->harga_dasar_tiket = $harga_dasar_tiket;
        $this->tipe_audio = $tipe_audio;
        $this->lokasi_baris = $lokasi_baris;
    }

    public function hitungTotalHarga()
    {
        return $this->harga_dasar_tiket * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas()
    {
        return "Tiket Regular dengan tipe audio: " . $this->tipe_audio . " dan lokasi baris: " . $this->lokasi_baris;
    }

    public function tampilDataTiket()
    {
        $sql = "SELECT * FROM tabel_tiket WHERE jenis_studio = 'Regular'";
        $hasil = $this->koneksi->query($sql);

        if ($hasil->num_rows > 0) {
            return $hasil->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}