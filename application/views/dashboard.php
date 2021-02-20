<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+62823-91346263&text=Halo Kerupuk CS, Saya butuh bantuan" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<div class="container-fluid ml-3 py-5">
    <div class="row text-center">

    <?php foreach ($barang as $brg):?>

 

        <div class="card ml-3 mb-3" style="width: 18rem;">
        <img class="card-img-top" width="100%" 
        height="180" src="<?php echo base_url(). '/uploads/'.
            $brg->gambar ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_barang?></h5>
                <small><?php echo $brg->keterangan?></small><br>
                <span class="badge badge-success mb-3">Rp <?php echo number_format
                    ($brg->harga,0,",",".")?></span><br>
                <?php echo anchor ('dashboard/tambah_ke_keranjang/' .$brg->
                    id_barang,'<div class="btn btn-sm btn-primary">
                    Tambah ke Keranjang</div>') ?>
                <?php echo anchor ('dashboard/detail/' .$brg->id_barang,'<div
                    class="btn btn-sm btn-success">Detail</div>') ?>
            
            </div>
        </div>
         
    <?php endforeach;?>
    </div>
</div>
