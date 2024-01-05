<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulir Servis Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 mt-5">
        <?php
        if(isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "Data Berhasil di Input.";       
            }else if($pesan == "update"){
                echo "Data Berhasil di Update.";
            }elseif ($pesan == "hapus") {
                echo "Data Berhasil di Hapus.";
            }
            header("refresh:3;url=index.php");
        }
        ?>
        <br>
        <br>
        <a class="btn btn-primary mb-3" href="input.php" role="button">Tambah Data</a>
          <table  class="table border">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Kendaraan</th>
                <th scope="col">Nama Pemilik</th>
                <th scope="col">Tanggal Service</th>
                <th scope="col">Jenis Service</th>
              </tr>
            </thead>

            <?php
            include "koneksi.php";
            $nomor = 1;
            $data = mysqli_query($koneksi,"select * from servis");
            while($d = mysqli_fetch_array($data)){
            ?>

            <tbody>
              <!-- Data dari formulir akan ditampilkan di sini -->
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $d['nomor']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['jenis']; ?></td>
              </tr>
            </tbody>
            <?php
                }
            ?>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
