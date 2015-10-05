@include("template/head")
<legend>
    <ol class="breadcrumb">
        <li style="color:black">Park list</li>
    </ol>
</legend>
&nbsp;
<a href="park/create"><button class="btn btn-success">Add park +</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <tr class="success">
            <th>No.</th>
            <th>Taman</th>
            <th>Photo</th>
            <th>Alamat</th>
            <th></th>
        </tr>
        <?php $i=0; 
        ?>
        @foreach($park as $key => $value)
        <tr>
            <td>{{ $value->idpark }}</td>
            <td>{{ $value->nama_park }}</td>
            <td><img class="img-rounded" style="width:150px" src="{{ URL::asset('files/photos/park') }}/{{ $foto[$i] }}"></td>
            <td>{{ $value->alamat }}</td>
            <td class="text-center">
                <a href="park/{{ $value->idpark }}"><button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> view</button></a>
                <a href="park/{{ $value->idpark }}/edit"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h5>are you sure want to delete this park?</h5>
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

@include("template/foot")