<?php
$title = "Manajemen Data Tiket Regular";

require_once '../Koneksi/Database.php';
require_once '../Service/Tiket.php';
require_once '../Service/TiketRegular.php';

$tiket = new \TiketRegular(null, null, null, null, null, null, null);
$data_tiket = $tiket->tampilDataTiket();

ob_start();
?>

<div class="px-4 sm:px-6 lg:px-8 mt-4">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold text-gray-900 dark:text-white">Data Tiket Regular</h1>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">Daftar seluruh tiket regular yang tersedia.</p>
        </div>
    </div>

    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
                <table class="min-w-full border-separate border-spacing-0">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 backdrop-blur-sm backdrop-filter sm:pl-6 lg:pl-8 dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                ID Tiket</th>
                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Nama Film</th>
                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Jadwal Tayang</th>
                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Jumlah Kursi</th>
                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Harga Dasar</th>
                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Tipe Audio</th>
                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Lokasi Baris</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data_tiket)) : ?>
                        <?php 
                        $totalData = count($data_tiket);
                        foreach ($data_tiket as $index => $tiket_item) : 
                            $isLast = ($index === $totalData - 1);
                            $borderClass = $isLast ? '' : 'border-b border-gray-200 dark:border-white/10';
                        ?>
                        <tr>
                            <td
                                class="<?= $borderClass ?> py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-6 lg:pl-8 dark:text-white">
                                <?= htmlspecialchars($tiket_item['id_tiket']) ?>
                            </td>
                            <td
                                class="<?= $borderClass ?> px-3 py-4 text-sm whitespace-nowrap text-gray-500 dark:text-gray-400">
                                <?= htmlspecialchars($tiket_item['nama_film']) ?>
                            </td>
                            <td
                                class="<?= $borderClass ?> px-3 py-4 text-sm whitespace-nowrap text-gray-500 dark:text-gray-400">
                                <?= htmlspecialchars($tiket_item['jadwal_tayang']) ?>
                            </td>
                            <td
                                class="<?= $borderClass ?> px-3 py-4 text-sm whitespace-nowrap text-gray-500 dark:text-gray-400">
                                <?= htmlspecialchars($tiket_item['jumlah_kursi']) ?>
                            </td>
                            <td
                                class="<?= $borderClass ?> px-3 py-4 text-sm whitespace-nowrap text-gray-500 dark:text-gray-400">
                                Rp <?= number_format($tiket_item['harga_dasar_tiket'], 0, ',', '.') ?>
                            </td>
                            <td
                                class="<?= $borderClass ?> px-3 py-4 text-sm whitespace-nowrap text-gray-500 dark:text-gray-400">
                                <?= htmlspecialchars($tiket_item['tipe_audio']) ?>
                            </td>
                            <td
                                class="<?= $borderClass ?> px-3 py-4 text-sm whitespace-nowrap text-gray-500 dark:text-gray-400">
                                <?= htmlspecialchars((string)($tiket_item['lokasi_baris'] ?? '-')) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="8" class="py-8 text-center text-sm text-gray-500 dark:text-gray-400 italic">
                                Tidak ada data tiket regular.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();

require_once 'Layout.php';
?>