@include('head')
<legend>
    <h1 style="font-weight:200">User List</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <a href="user/create"><button class="btn btn-primary" style="height:50px">Tambah user +</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>No.</th>
            <th>User</th>
            <th>Username</th>
            <th></th>
        </tr>
        @foreach($admin as $key => $value)
        <tr>
            <td>{{ $value->iduser }}</td>
            <td>{{ $value->nama_lengkap }}</td>
            <td>{{ $value->username }}</td>
            <td class="text-center">
                <a href="user/{{ $value->iduser }}/edit"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
        
@foreach($admin as $key => $value)
<!-- Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5>are you sure want to delete this user?</h5>
      </div>
       <?php if(isset($value)) 
      {
        ?>
      <div class="modal-footer">
        <a href="user/{{ $value->iduser }}/destroy"><button type="button" class="btn btn-danger btn-sm">delete</button></a>
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