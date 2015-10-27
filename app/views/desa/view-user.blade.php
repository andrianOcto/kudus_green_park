@include("template/head")
<legend>
    <ol class="breadcrumb">
        <li style="color:black"><a href="../user">Users list</a></li>
        <li style="color:black">view user</li>
    </ol>
</legend>

<div class="row">
    <div class="col-sm-4 col-md-4">
        <p class="text-right"><img class="img-thumbnail" style="height:300px" src="{{ URL::asset('files/photos/user') }}/{{ $admin->foto }}"></p>
    </div>
    <style>
        .tab{
            padding-left: 20px;
            padding-bottom:20px;
        }
    </style>
    <div class="col-sm-8 col-md-8">
        <label>Nama :</label><br>
        <label class="tab">{{ $admin->nama_lengkap }}</label><br>
        <label>Username :</label><br>
        <label class="tab">{{ $admin->username }}</label><br>
        <label>Email :</label><br>
        <label class="tab">{{ $admin->email }}</label><br>
        <label>Contact :</label><br>
        <label class="tab">{{ $admin->contact }}</label><br>
        <label>Bio :</label><br>
        <label class="tab">{{ $admin->bio }}</label><br><br>
        &nbsp;
        <a href="/user/{{ $admin->iduser }}/edit"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> edit user</button></a>
    </div>
</div>
@include("template/foot")