<div class="col-md-12">
    <h3>
        Daftar Dosen
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Mata Kuliah</th>
                <th>Pendidikan</th>
                <th>Semester</th>
                <th>Hari</th>
                <th>Ruangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_dsn as $dsn) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $dsn->nidn ?></td>
                    <td><?= $dsn->nama ?></td>
                    <td><?= $dsn->gender ?></td>
                    <td><?= $dsn->tmp_lahir ?></td>
                    <td><?= $dsn->tgl_lahir ?></td>
                    <td><?= $dsn->matkul ?></td>
                    <td><?= $dsn->pendidikan ?></td>
                    <td><?= $dsn->semester ?></td>
                    <td><?= $dsn->hari ?></td>
                    <td><?= $dsn->ruangan ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>