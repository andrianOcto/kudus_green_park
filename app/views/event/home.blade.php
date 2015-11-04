@include('head')
<legend>
    <h1 style="font-weight:200">Posts List</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <a href="event/create"><button class="btn btn-primary" style="height:50px">Tambah Post +</button></a>
        <a href="{{URL::route('event.export')}}" style="float:right"><button class="btn btn-primary" style="height:50px">Export Excel</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Kategori</th>            
            <th>Photo</th>
            <th>Waktu</th>
            <th></th>
        </tr>
        <?php $i=1; ?>
        @foreach($event as $key => $value)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $value->judul }}</td>
            <td>
              <?php if($value->kategori == 1){
                      echo "Event";
                    }else{
                      echo "Testimoni";
                    }
               ?>
              </td>
            <td><img class="img-rounded" style="width:100px" src="{{ URL::asset('files/photos/user') }}/{{ $value->foto }}"></td>
            <td>{{ $value->created_at }}</td>
            <td class="text-center">
                <a href="event/{{ $value->id_event }}/edit"><button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span> edit</button></a>
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete<?php echo $i+1 ?>"><span class="glyphicon glyphicon-trash"></span> delete</button>
            </td>
        </tr>
        <?php $i++ ?>
        @endforeach
    </table>
</div>

<?php $i=1; ?>
@foreach($event as $key => $value)
<!-- Modal -->
<div class="modal fade" id="modal-delete<?php echo $i+1 ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h5>are you sure want to delete this data?</h5>
      </div>
       <?php if(isset($value)) 
      {
        ?>
      <div class="modal-footer">
        <a href="event/{{ $value->id_event }}/destroy"><button type="button" class="btn btn-danger btn-sm">delete</button></a>
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