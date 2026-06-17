<?php
require_once __DIR__ . '/../Koneksi/Database.php';

abstract class Tiket extends \Database
{
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $harga_dasar_tiket;

    public function __construct()
    {
        parent::__construct();
    }

    public abstract function hitungTotalHarga();

    public abstract function tampilkanInfoFasilitas();

    public function tampilDataTiket()
    {
        $sql = "SELECT * FROM tabel_tiket";
        $hasil = $this->koneksi->query($sql);

        if ($hasil->num_rows > 0) {
            return $hasil->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}