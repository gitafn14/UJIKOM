<?php

include 'koneksi.php';

  $id_spp = $_POST['id_spp'];
  $tahun   = $_POST['tahun'];
  $nominal     = $_POST['nominal'];
 


                  $query = "INSERT INTO spp VALUES  ('$id_spp', '$tahun', '$nominal')";
                  $result = mysqli_query($koneksi, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='spp.php';</script>";
                  }

            ?>