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
                foreach ($data['mhs'] as $mahasiswa) :
                    $no++;
                ?>
                   <tr>
                       <td><?= $no; ?></td>
                       <td>Adam Adnan</td>
                       <td>Lab Multimedia</td>
                       <td>2024-01-20</td>
                       <td>15:00</td>
                       <td>17:00</td>
                       <td>Lomba</td>
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