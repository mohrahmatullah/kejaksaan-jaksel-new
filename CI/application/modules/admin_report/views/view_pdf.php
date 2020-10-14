<style type="text/css">
    .table-zebra-striping {
        width: 100%;
        border-collapse: collapse;
    }

    .table-zebra-striping th {
        background: #8CAAD4;
        color: #FFFFFF;
        padding: 1em;
        text-align: left;
        text-transform: uppercase;
    }

    .table-zebra-striping td {
        border-bottom: 1px solid #ddd;
        padding: 1em;
    }

    /* EVEN */

    .table-zebra-striping tr:nth-child(even) {
        background: #F5F5F5;
    }

    /* ODD */

    .table-zebra-striping tr:nth-child(odd) {
        background: #D5DDE8;
    }
</style>
<div style="position: absolute;">
    <table class="table-zebra-striping">
    
        <tr>
            <th>Tanggal Dibuat</th>
            <th>Nama Pegawai</th>
            <th>Nomor Peraturan Jaksa</th>
            <th>Nama SOP</th>
            <th>Nama Uraian</th>
            <th>Time Before</th>
            <th>Time After</th>
            <th>Diapprove oleh</th>
        </tr>
    <?php
    foreach ($rec as $data){
                            ?>  
    <tr>
        <td><?= date('d-m-Y', strtotime($data['tglbuat'])) ?></td>
        <td><?= $data['namapegawai'] ?></td>
        <td><?= $data['nomorperaturan'] ?></td>
        <td><?= $data['namasop'] ?></td>
        <td><?= $data['namauraian'] ?></td>
        <td><?= $data['time_before'] ?></td>
        <td><?= $data['time_after'] ?></td>
        <td></td>
    </tr>
    <?php
    }
    ?>    
    </table>
</div>