       <div class="row">
           <div class="col-12">
               <?php Flasher::flash(); ?>
           </div>
       </div>
       <!-- Card peminjaman-->
       <div class="row">

           <div class="col-md-4 col-xl-3 mb-3">
               <div class="card h-100">
                   <div class="card-block d-flex justify-content-between">
                       <div>
                           <h6>Peminjaman</h6>
                           <h2><span><?php echo $data['total_peminjaman']; ?></span></h2>
                           <p>Total Peminjaman</p>
                       </div>
                       <div>
                           <img src=" <?= BASEURL ?>/img/pinjam.svg" alt="Mahasiswa">
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4 col-xl-3 mb-3">
               <div class="card h-100">
                   <div class="card-block d-flex justify-content-between">
                       <div>
                           <h6>Disetujui</h6>
                           <h2><span><?php echo $data['total_disetujui']; ?></span></h2>
                           <p>Peminjaman yang disetujui</p>
                       </div>
                       <div>
                           <img src="<?= BASEURL ?>/img/disetujui.svg" alt="Koordinator Lab">
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4 col-xl-3 mb-3">
               <div class="card h-100">
                   <div class="card-block d-flex justify-content-between">
                       <div>
                           <h6>Tidak Disetujui</h6>
                           <h2><span>0</span></h2>
                           <p>Peminjaman tidak disetujui</p>
                       </div>
                       <div>
                           <img src="<?= BASEURL ?>/img/ditolak.svg" alt="admin">
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4 col-xl-3 mb-3">
               <div class="card h-100">
                   <div class="card-block d-flex justify-content-between">
                       <div>
                           <h6>Dibatalkan</h6>
                           <h2><span>0</span></h2>
                           <p>Peminjaman yang dibatalkan</p>
                       </div>
                       <div>
                           <img src="<?= BASEURL ?>/img/dibatalkan.svg" alt="Kepala Lab">
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- End Card -->

       <div class="container-user rounded mb-5">
           <div class="row mb-3">
               <div class="col-lg-6">
                   <a href="<?= BASEURL ?>/pinjam/riwayat" class="btn btn-primary">
                       <span class="material-symbols-outlined">
                           pace
                       </span>
                       Lihat Riwayat</a>
               </div>
           </div>

           <div class="horizontal-line"></div>

           <div class="card-body mt-3 table-responsive">
               <table id="example" class="table " style="width:100%">
                   <thead>
                       <tr>
                           <th>No</th>
                           <th>Ruangan</th>
                           <th>Tanggal Peminjaman</th>
                           <th>Waktu Mulai</th>
                           <th>Waktu Selesai</th>
                           <th>Sisa Waktu</th>
                           <th>Keperluan</th>
                           <th>Status</th>
                           <th>Aksi</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php
                        $no = 0;
                        foreach ($data['peminjaman'] as $pinjam) :
                            $no++;
                        ?>
                           <tr>
                               <td><?= $no; ?></td>
                               <td><?= $pinjam['nama_ruangan'] ?></td>
                               <td><?= $pinjam['tanggal_pinjam'] ?></td>
                               <td><?= $pinjam['waktu_mulai'] ?></td>
                               <td><?= $pinjam['waktu_selesai'] ?></td>
                               <td class="sisa_waktu" data-id="<?= $pinjam['id_peminjaman'] ?>"></td>
                               <td><?= $pinjam['keperluan'] ?></td>
                               <td>
                                   <div class=" status-background <?= strtolower($pinjam['status_peminjaman']); ?>">
                                       <?= $pinjam['status_peminjaman'] ?>
                                   </div>
                               </td>
                               <td class=" icon-container" style="text-align: center;">
                                   <?php if ($pinjam['status_peminjaman'] === 'Disetujui') : ?>
                                       <a href="<?= BASEURL; ?>/pinjam/kembalikan/<?= $pinjam['id_peminjaman']; ?>" class="btn btn-warning" onclick=" kembalikan(this)">Kembalikan</a>
                                   <?php else : ?>
                                       <a href="<?= BASEURL; ?>/pinjam/batalkan_peminjaman/<?= $pinjam['id_peminjaman']; ?>" class="btn btn-danger">Batalkan</a>
                                   <?php endif; ?>
                               </td>
                           </tr>
                           <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                           <script>
                               function hitungMundur(waktuMulai, waktuSelesai, elemenSisaWaktu, statusPeminjaman) {
                                   var waktuSekarang = new Date();
                                   var sisaWaktu;

                                   console.log('Waktu Mulai:', waktuMulai);
                                   console.log('Waktu Selesai:', waktuSelesai);
                                   console.log('Waktu Sekarang:', waktuSekarang);

                                   if (statusPeminjaman === "Disetujui") {
                                       if (waktuSekarang >= waktuMulai) {
                                           sisaWaktu = waktuSelesai - waktuSekarang;
                                       } else {
                                           sisaWaktu = waktuSelesai - waktuMulai;
                                       }

                                       console.log('Sisa Waktu (milidetik):', sisaWaktu);

                                       if (sisaWaktu <= 0) {
                                           $(elemenSisaWaktu).html("Waktu Habis");
                                       } else {
                                           var jam = Math.floor(sisaWaktu / (1000 * 60 * 60));
                                           var menit = Math.floor((sisaWaktu % (1000 * 60 * 60)) / (1000 * 60));
                                           var detik = Math.floor((sisaWaktu % (1000 * 60)) / 1000);

                                           // Format waktu
                                           var sisaWaktuText = jam + ":" + (menit < 10 ? "0" : "") + menit + ":" + (detik < 10 ? "0" : "") + detik;
                                           console.log('Sisa Waktu (format):', sisaWaktuText);
                                           $(elemenSisaWaktu).html(sisaWaktuText);
                                       }
                                   } else {
                                       $(elemenSisaWaktu).html("-");
                                   }

                               }

                               var tanggalWaktuMulaiStr = "<?= $pinjam['tanggal_pinjam'] ?>T<?= $pinjam['waktu_mulai'] ?>";
                               var tanggalWaktuSelesaiStr = "<?= $pinjam['tanggal_pinjam'] ?>T<?= $pinjam['waktu_selesai'] ?>";
                               console.log("Nilai tanggalWaktuMulaiStr: ", tanggalWaktuMulaiStr);
                               console.log("Nilai tanggalWaktuSelesaiStr: ", tanggalWaktuSelesaiStr);

                               hitungMundur(new Date(tanggalWaktuMulaiStr), new Date(tanggalWaktuSelesaiStr), $(".sisa_waktu[data-id=<?= $pinjam['id_peminjaman'] ?>]"), "<?= $pinjam['status_peminjaman'] ?>");
                           </script>
                       <?php endforeach; ?>
                   </tbody>
               </table>
           </div>
       </div>