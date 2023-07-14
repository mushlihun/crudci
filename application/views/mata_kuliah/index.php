<section class="services">
    <div class="container" style="color:black;">
        <div class="panel panel-default">
            <div align="right">
                <a href="<?= base_url() ?>mata_kuliah?state=add">
                    <img src="<?= base_url() ?>assets/images/add_green.png" width="80px" height="90px" style="margin-right:120px; margin-top:10px;">
                </a>
            </div>

            <?php
            if (isset($_SESSION['state_status']) && $_SESSION['state_status'] === true) {
                echo '<div id="message-alert" class="alert alert-success text-center" role="alert">Data berhasil di simpan</div>';
                unset($_SESSION['state_status']);
            } else if (isset($_SESSION['state_status_delete']) && $_SESSION['state_status_delete'] === true) {
                echo '<div id="message-alert" class="alert alert-success text-center" role="alert">Data berhasil di hapus</div>';
                unset($_SESSION['state_status_delete']);
            }
            ?>

            <div class="panel-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>    
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Nilai Angka</th>
                        <th>Nilai Huruf</th>
                        <th>Semester</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    // $kd_mata_kuliah = isset($data_mk->kd_mata_kuliah) ? $data_mk->kd_mata_kuliah : '';
                    // $kd_mata_kuliah = $data_mk->kd_mata_kuliah;
                    //foreach($mata_kuliah AS $no -> $val){
                        echo "$title";
                        
/*                        ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $val->kode ?></td>
                            <td><?= $val->nama_mata_kuliah ?></td>
                            <td><?= $val->sks ?></td>
                            <td><?= $val->nilai_angka ?></td>
                            <td><?= $val->nilai_huruf ?></td>
                            <td><?= $val->semester ?></td>
                            <td>
                                <a href="<?= base_url() ?>mata_kuliah?state=edit&id=<?= $val->id ?>">
                                    <img src="<?= base_url() ?>assets/images/edit_green.png" style="margin-left:10px;" width="30" height="30">
                                </a>

                                <a id="delete-row" href="<?= base_url() ?>mata_kuliah?state=delete&id=<?= $val->id ?>" onclick="return deleteConfirmation()">
                                    <img src="<?= base_url() ?>assets/images/delete_green.png" style="margin-left:10px;" width="30" height="30">
                                </a>
                            </td>
                        </tr>
                    <?php *///}
                     ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- <script>
    $(document).ready(function () {
        $('#example1').DataTable({
            responsive: true,
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: true,
        });

        setTimeout(function () {
            $("#message-alert").remove();
        }, 3000);
    });

    function deleteConfirmation() {
        const job = confirm("Apakah Anda yakin akan menghapus data?");
        if (job !== true) {
            return false;
        }
    }
</script> -->
