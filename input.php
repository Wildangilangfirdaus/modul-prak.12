<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Servis Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header text-center">
                    <h1>Formulir Servis Motor</h1>
                    </div>
                    <div class="card-body">
                    <form action = "input_aksi.php" method = "post">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Kendaraan</label>
                        <input type="text" class="form-control" name="nomor" id="exampleInputEmail1" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" name="nama"  id="exampleInputEmail1" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Service</label>
                        <input type="date" class="form-control" name="tanggal"  id="exampleInputEmail1" aria-describedby="emailHelp" />
                        </div>
                        <p>Jenis Service</p>
                        <select class="form-select mb-3" name="jenis" aria-label="Default select example">
                            <option selected>Jenis Service</option>
                            <option value="Service Ringan">Service Ringan</option>
                            <option value="Service Berat">Service Berat</option>
                            <option value="Cek Semua">Cek Semua</option>
                            </select>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>