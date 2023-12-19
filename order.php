  <?php
  include "proses/connect.php";
  $query = mysqli_query($conn, "SELECT * FROM tb_order");
  while ($record = mysqli_fetch_array($query)){
    $result[]= $record;

  }
  ?>

  <div class="col-lg-9 mt-2">
      <div class="card">
          <div class="card-header">
              Halaman Order
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col d-flex justify-content-end">
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah
                          Pesanan</button>
                  </div>
              </div>

              <!-- modal tambah user baru -->
              <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Pesanan</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form class="needs-validation" novalidate action="proses/input_order.php" method="POST">
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-floating mb-3">
                                              <input type="number" class="form-control" id="floatingInput"
                                                  placeholder="Your Name" name="id" required>
                                              <label for="floatingInput">No Pesanan</label>
                                              <div class="invalid-feedback">
                                                  Masukkan Nama.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-floating mb-3">
                                              <input type="text" class="form-control" id="floatingInput"
                                                  placeholder="name@example.com" name="namaproduk" required>
                                              <label for="floatingInput">Nama Produk</label>
                                              <div class="invalid-feedback">
                                                  Masukkan Username.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="form-floating mb-3">

                                              <label for="floatingInput"></label>
                                              <div class="invalid-feedback">
                                                  Pilih Menu.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="form-floating mb-3">
                                              <input type="text" class="form-control" id="floatingInput"
                                                  placeholder="masukkan dekripsi" name="deskripsi">
                                              <label for="floatingInput">Deskripsi</label>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-floating">
                                      <textarea class="form-control" id="" style="height: 100px;"
                                          name="jumlah"></textarea>
                                      <label type="number" for="floatingInput">Jumlah Pesanan</label>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary"
                                          data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary" name="input_order_validate"
                                          value="12345">Save changes</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- akhir modal tambah user baru -->


              <!-- modal view -->
              <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form class="needs-validation" novalidate action="proses/input_order.php" method="POST">
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-floating mb-3">
                                              <input type="text" class="form-control" id="floatingInput"
                                                  placeholder="Your Name" name="nama"
                                                  value=" <?php echo $row['nama']?>">
                                              <label for=" floatingInput">Nama</label>
                                              <div class="invalid-feedback">
                                                  Masukkan Nama.
                                              </div>
                                              Masukkan password.
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-floating mb-3">
                                          <input type="email" class="form-control" id="floatingInput"
                                              placeholder="name@example.com" name="username"
                                              value=" <?php echo $row['username']?>">
                                          <label for="floatingInput">Username</label>
                                          <div class="invalid-feedback">
                                              Masukkan Username.
                                          </div>
                                      </div>
                                  </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="form-floating mb-3">
                                      <input type="text" class="form-control" id="floatingInput" placeholder="Your Name"
                                          name="nama" value=" <?php
                                          if($row['level'] ==1){
                                          echo "admin";
                                          } elseif($row['level'] ==2){
                                          echo "kasir";
                                          }  elseif($row['level'] ==3){
                                          echo "pelayan";
                                          } elseif($row['level'] ==4){
                                          echo "dapur";
                                          }

                                          ?>">
                                      <label for="floatingInput">Pilih Menu</label>
                                      <div class="invalid-feedback">
                                          Pilih Menu.
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-8">
                                  <div class="form-floating mb-3">
                                      <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx"
                                          name="nohp">
                                      <label for="floatingInput">No HP</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="form-floating mb-3">
                                      <input type="Password" class="form-control" id="floatingInput"
                                          placeholder="Password" disabled value="12345" name="password">
                                      <label for="floatingPassword">Password</label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-floating">
                              <textarea class="form-control" id="floatingInput" style="height: 100px;"
                                  name="alamat"></textarea>
                              <label for="floatingInput">Alamat</label>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" name="input_user_validate"
                                  value="12345">Save
                                  changes</button>
                          </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- akhir modal view -->

          <?php
              
if(empty($result)){
    echo "Data user tidak ada";
} else{

?> <div class="table-reponsive">
              <table class=" table table-hover">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">No Pesanan</th>
                          <th scope="col">Nama Produk</th>
                          <th scope="col">Deskripsi</th>
                          <th scope="col">Jumlah Pesanan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $no=1;
                        foreach ($result as $row) {
                        ?>
                      <tr>
                          <th scope="row"><?php echo $no++ ?></th>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['namaproduk']?></td>
                          <td><?php echo $row['deskripsi']?></td>
                          <td><?php echo $row['jumlah']?></td>
                          <td class="d-flex">
                              <a href="hapus_order.php?id_hapus=<?php echo $row ['id']?>"><button
                                      class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></a>
                          </td>
                      </tr>
                      <?php
                        }
                          ?>
                  </tbody>
              </table>
          </div>
          <?php
                }
              ?>
      </div>

      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (() => {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          const forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.from(forms).forEach(form => {
              form.addEventListener('submit', event => {
                  if (!form.checkValidity()) {
                      event.preventDefault()
                      event.stopPropagation()
                  }
                  form.classList.add('was-validated')

              }, false)
          })
      })()
      </script>