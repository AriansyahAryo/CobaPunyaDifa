<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Data Makanan</title>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Edit Data Makanan</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="<?= base_url('proses_edit_makanan')?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" id="kode_makanan" name="kode_makanan" value="<?= $data_makanan->kode_makanan ?>">
                            <div class="form-group">
                                <label for="nama_makanan">Nama Makanan:</label>
                                <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" value="<?= $data_makanan->nama_makanan ?>">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="stok_makanan">Stok Makanan</label>
                                <input type="text" class="form-control" id="stok_makanan" name="stok_makanan" value="<?= $data_makanan->stok_makanan ?>">
                            </div>
                            <div class="form-group">
                                <label for="detail_makanan">Detail Makanan</label>
                                <input type="text" class="form-control" id="detail_makanan" name="detail_makanan" value="<?= $data_makanan->detail_makanan ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
