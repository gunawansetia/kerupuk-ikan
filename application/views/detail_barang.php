<div class="container-fluid">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+62823-91346263&text=Halo Kerupuk CS, Saya butuh bantuan" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    <div class="card">
        <div class="card-header">
            Detail Kerupuk
        </div>
        <div class="card-body">
            <?php foreach($barang as $brg): ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'uploads/'.$brg->gambar 
                    ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_barang
                                ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->keterangan
                                ?></strong></td>
                        </tr>

                        <tr>
                            <td>Variasi</td>
                            <td><strong><?php echo $brg->variasi
                                ?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $brg->stok
                                ?></strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp 
                                <?php echo number_format($brg->harga,0,',','.')
                                  ?></div></strong></td>
                        </tr>

                    </table>

                    <?php echo anchor ('dashboard/tambah_ke_keranjang/' .$brg->
                        id_barang,'<div class="btn btn-sm btn-primary">
                        Tambah ke Keranjang</div>') ?>

                    <?php echo anchor ('welcome/index/','<div class="btn btn-sm btn-danger">
                        Kembali</div>') ?>

                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>