<?php
include "koneksi.php";
$sql = "SELECT * FROM user ORDER BY id DESC";
$hasil = $conn->query($sql);
?>

<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; while($row = $hasil->fetch_assoc()){ ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['username'] ?></td>
            <td>
                <?php if($row['foto'] != ''){ ?>
                    <img src="imgg/<?= $row['foto'] ?>" width="80">
                <?php } else { echo "-"; } ?>
            </td>
            <td>
                <!-- EDIT -->
                <button 
                    class="btn btn-warning btn-sm editUser"
                    data-id="<?= $row['id'] ?>"
                    data-username="<?= $row['username'] ?>"
                    data-foto="<?= $row['foto'] ?>"
                    data-bs-toggle="modal"
                    data-bs-target="#modalTambah">
                    Edit
                </button>

                <!-- HAPUS -->
                <form method="post" action="admin.php?page=user" style="display:inline">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="hidden" name="foto" value="<?= $row['foto'] ?>">
                    <button class="btn btn-danger btn-sm"
                        name="hapus"
                        onclick="return confirm('Yakin hapus user ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
