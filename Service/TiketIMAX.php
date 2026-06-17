<?php
class TiketIMAX extends Tiket {
    public $kacamata_3d_id;
    public $efek_gerak_fitur;
    
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $kacamata_3d_id, $efek_gerak_fitur)
    {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->kacamata_3d_id = $kacamata_3d_id;
        $this->efek_gerak_fitur = $efek_gerak_fitur;
    }

    public function hitungTotalHarga()
    {
        return ($this->harga_dasar_tiket * $this->jumlah_kursi) + 35000;
    }

    public function tampilkanInfoFasilitas()
    {
        return "Tiket IMAX dengan kacamata 3D ID: " . $this->kacamata_3d_id . " dan efek gerak fitur: " . $this->efek_gerak_fitur;
    }
}