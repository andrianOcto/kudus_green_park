@include("head")
<legend>
    <h1 style="font-weight:200">Ruang Terbuka Hijau</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
<a href="park/create"><button class="btn btn-primary" style="height:50px">Add RTH +</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <tr class="success">
            <th style="width:15%%">Kode</th>
            <th style="width:20%">Nama RTH</th>
            <th style="width:15%">Photo</th>
            <th style="width:30%%">Alamat</th>
            <th style="width:20%%"></th>
        </tr>
        <?php $i=0; 
        ?>
        @foreach($park as $key => $value)
        <tr>
            <td>{{ $value->id_rth }}</td>
            <td>{{ $value->nama }}</td>
            <td><img class="img-rounded" style="width:150px" src="{{ URL::asset('files/photos/park') }}/{{ $foto[$i] }}"></td>
            <td>{{ $value->alamat }}</td>
            <td class="text-center">
                <a href="park/{{ $value->id_rth }}"><button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> view</button></a>
                <a href="park/{{ $value->id_rth }}/edit"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table>
</div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5>yakin ingin menghapus data RTH?</h5>
      </div>
      <?php if(isset($value)) 
      {
        ?>
      <div class="modal-footer">
        <a href="park/{{ $value->idpark }}/destroy"><button type="button" class="btn btn-danger btn-sm">delete</button></a>
      </div>
      <?php 
        }
      ?>
    </div>
  </div>
</div>

@include("foot")