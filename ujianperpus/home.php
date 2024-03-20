<marquee scrolldelay='100'><h1 class="mt-4">SELAMAT DATANG DI PERPUSTAKAAN </h1></marquee>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Selamat Datang, Salamat Membaca:)</li>
</ol>
<div class="row">
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['nama']; ?></td>
            </tr>
            <tr>
                <td width="200">Level User</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['level']; ?></td>
            </tr>
            <tr>
                <td width="200">Tanggal Login</td>
                <td width="1">:</td>
                <td><?php echo date('d-m-y'); ?></td>
            </tr>
        </table>
    </div>
</div>