@include("head")
<legend>
    <h1 style="font-weight:200">Info RTH</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
<a href="park/create"><button class="btn btn-primary" style="height:50px">Tambah data RTH +</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <tr class="success">
            <th>No.</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Lokasi</th>
            <th>Bentuk/Luas</th>
            <th>Photo</th>
            <th>Jenis Tanaman</th>
            <th>Status Lahan</th>
            <th>Pengelola</th>
            <th>Fungsi</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th></th>
        </tr>
        <tr>
            <td>1</td>
            <td>A1</td>
            <td>Taman kawasan pertigaan sempalan</td>
            <td>Taman kota</td>
            <td>Jalan Agil Kusumadya</td>
            <td>Persegi/0,3 ha</td>
            <td><img class="img-rounded" style="width:150px" src="{{ URL::asset('files/photos/park/1427352961_AAn5T399bQzg.jpeg') }}"></td>
            <td>Trembesi, Cemara</td>
            <td>Tanah Pemerintah Daerah</td>
            <td>Pemerintah Daerah</td>
            <td>Area hijau pengendara</td>
            <td>Tanjung</td>
            <td>Jati</td>
            <td class="text-center">
                <button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button>
                <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
    </table>
</div>
    </div>
</div>

@include("foot")