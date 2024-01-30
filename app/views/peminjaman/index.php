   <!-- Card peminjaman-->
   <div class="row mb-3">

       <div class="col-md-4 col-xl-3">
           <div class="card">
               <div class="card-block d-flex justify-content-between">
                   <div>
                       <h6>Peminjaman</h6>
                       <h2><span>0</span></h2>
                       <p>Total Peminjaman</p>
                   </div>
                   <div>
                       <img src="..\public\img\pinjam.svg" alt="Mahasiswa">
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-4 col-xl-3">
           <div class="card">
               <div class="card-block d-flex justify-content-between">
                   <div>
                       <h6>Disetujui</h6>
                       <h2><span>0</span></h2>
                       <p>Peminjaman Disetujui</p>
                   </div>
                   <div>
                       <img src="..\public\img\disetujui.svg" alt="Koordinator Lab">
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-4 col-xl-3">
           <div class="card">
               <div class="card-block d-flex justify-content-between">
                   <div>
                       <h6>Ditolak</h6>
                       <h2><span>0</span></h2>
                       <p>Peminjaman Ditolak</p>
                   </div>
                   <div>
                       <img src="..\public\img\ditolak.svg" alt="admin">
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-4 col-xl-3">
           <div class="card">
               <div class="card-block d-flex justify-content-between">
                   <div>
                       <h6>Dibatalkan</h6>
                       <h2><span>0</span></h2>
                       <p>Peminjaman Dibatalkan</p>
                   </div>
                   <div>
                       <img src="..\public\img\dibatalkan.svg" alt="Kepala Lab">
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- End Card -->

   <div class="container-user rounded mb-3">
       <table id="example" class="table table-bordered table-striped" style="width:100%">
           <thead>
               <tr style="vertical-align: middle;">
                   <th>No</th>
                   <th>Peminjam</th>
                   <th>Ruangan</th>
                   <th>Tanggal <br>Peminjaman</th>
                   <th>Waktu <br>Mulai</th>
                   <th>Waktu <br>Selesai</th>
                   <th>Keperluan</th>
                   <th>Status</th>
                   <th>Aksi</th>
               </tr>
           </thead>
           <tbody>
               <?php
                $no = 0;
                foreach ($data['peminjaman'] as $pj) :
                    $no++;
                ?>
                   <tr>
                       <td><?= $no; ?></td>
                       <td><?= $pj['nama_user']; ?></td>
                       <td><?= $pj['nama_ruangan']; ?></td>
                       <td><?= $pj['tanggal_pinjam']; ?></td>
                       <td><?= $pj['waktu_mulai']; ?></td>
                       <td><?= $pj['waktu_selesai']; ?></td>
                       <td><?= $pj['keperluan']; ?></td>
                       <td>Pending</td>
                       <td>
                           <button type="submit" class="btn btn-primary">Setuju</button>

                           <button type="reset" class="btn btn-danger">Tolak</button>
                       </td>
                   </tr>
               <?php endforeach; ?>
           </tbody>
       </table>
   </div>