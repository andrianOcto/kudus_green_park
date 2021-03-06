@include('head')
<legend>
    <h1 style="font-weight:200">Desa List</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <a href="sdesa/create"><button class="btn btn-primary" style="height:50px">Tambah Desa/kelurahan +</button></a>
        <a href="{{URL::route('desa.export')}}" style="float:right"><button class="btn btn-primary" style="height:50px">Export Excel</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>Kode</th>
            <th>Kecamatan</th>
            <th>Desa / Kelurahan</th>
            <th></th>
        </tr>
        @foreach($desa as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->kecamatan }}</td>
            <td>{{ $value->desa }}</td>
            <td class="text-center">
                <a href="sdesa/{{ $value->id }}/edit"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete{{ $value->id }}"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@foreach($desa as $key => $value)
<!-- Modal -->
<div class="modal fade" id="modal-delete{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5>Yakin ingin menghapus data desa?</h5>
      </div>
       <?php if(isset($value)) 
      {
        ?>
      <div class="modal-footer">
        <a href="sdesa/{{ $value->id }}/destroy"><button type="button" class="btn btn-danger btn-sm">delete</button></a>
      </div>
       <?php 
        }
      ?>
    </div>
  </div>
</div>
@endforeach
    </div>
</div>

@include('foot')