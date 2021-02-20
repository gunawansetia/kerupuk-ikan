<div class="container fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) 
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "<h5>Total Belanja Anda: Rp ".number_format($grand_total,0,
                ',','.');
                
                ?>
            </div><br><br>

            <h4>Input Alamat Pengiriman dan Pembayaran</h4>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan
            ">
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" required
                    placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" required 
                    placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="nomor_hp" required
                    placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label> required
                    <select class="form-control" name="jasa_kirim">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>Pos Indonesia</option>
                        <option>Gojek</option>
                        <option>Grab</option>                        
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih BANK</label> required
                    <select class="form-control" name="bank">
                        <option>BCA - XXXXXXXXX</option>
                        <option>BNI - XXXXXXXXX</option>
                        <option>BRI - XXXXXXXX</option>
                        <option>MANDIRI - XXXXXXX</option>                      
                    </select>

                </div>
                <button type="submit" class="btn btn-lg btn-outline-primary mb-3 px-5">Pesan
                </button>

            </form>

            <?php 
                } else
                {                  
                    echo "<h4 class='text center'>Keranjang Belanja Anda Masih Kosong</h4>";
                    
                }
            ?>

        </div>
        <a href="<?php echo base_url('welcome/index')?>">
        <div class="btn ml-4 btn-sm btn-info">Lanjutkan Belanja</div></a>
        <div class="col-md-2 mb-5"></div>

    </div>

</div>