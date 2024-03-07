           <div class="container-user rounded mb-5 table-responsive">
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
                        foreach ($data['ruangan'] as $pinjam) :
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
                                   <a href="<?= BASEURL; ?>/pinjam/kembalikan/<?= $pinjam['id_peminjaman']; ?>" class="btn btn-warning" onclick="kembalikan(this)">View</a>
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