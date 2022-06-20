<div class="col-md-12">
    <h3>
        Daftar Mata Kuliah
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Semester</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen</th>
                <th>Hari</th>
                <th>Ruangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mk as $mk) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mk->kode ?></td>
                    <td><?= $mk->nama ?></td>
                    <td><?= $mk->semester ?></td>
                    <td><?= $mk->matkul ?></td>
                    <td><?= $mk->sks ?></td>
                    <td><?= $mk->dosen ?></td>
                    <td><?= $mk->hari ?></td>
                    <td><?= $mk->ruangan ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>