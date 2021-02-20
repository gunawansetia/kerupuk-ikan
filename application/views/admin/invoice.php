<div class="container-fluid">
    <h4>Invoce Pemesanan Kerupuk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Nomor Telepon</th>
            <th>Jasa Pengiriman</th>
            <th>Bank</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id_invoice ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->nomor_hp ?></td>
            <td><?php echo $inv->jasa_kirim ?></td>
            <td><?php echo $inv->bank ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><?php echo anchor('admin/invoice/detail/'.$inv->id_invoice, '
            <div class="btn btn-sm btn-primary">Detail</div>')
            ?></td>
        </tr>
    
    <?php endforeach; ?>
    </table>
</div>