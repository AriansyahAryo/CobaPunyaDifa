<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Page</title>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome Admin Kedai-J, Semangat!</h3>
                            <h6 class="font-weight-normal mb-0">Belanja hemat dan tenang <span class="text-primary">Kedai-J solusinya!</span></h6>
                            <h2 class="font-weight-bold">Stok Makanan yang Tersedia</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-end mb-3">
                    <button onclick="window.location.href='<?= base_url('add_data_makanan') ?>'" class="btn btn-primary mr-3">Tambah Makanan</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($makanan as $makananItem) : ?>
                                <tr>
                                    <td><?= $makananItem['kode_makanan'] ?></td>
                                    <td><?= $makananItem['nama_makanan'] ?></td>
                                    <td><img src="<?= $makananItem['gambar'] ?>" alt="<?= $makananItem['nama_makanan'] ?>" class="img-fluid" style="max-width: 150px; height: auto;"></td>
                                    <td><?= $makananItem['stok_makanan'] ?></td>
                                    <td><?= $makananItem['detail_makanan'] ?></td>
                                    <td>
                                        <a href="<?= base_url('templates/edit_data_makanan').'/'.$makananItem['kode_makanan'] ?>" class="btn btn-warning">Edit</a>
                                        <form action="/makananadm/<?= $makananItem['kode_makanan']; ?>" method="post" class="d-inline">
                                        <?= Csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
