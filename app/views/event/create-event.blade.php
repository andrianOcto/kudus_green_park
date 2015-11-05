@include('head')
<script type="text/javascript">
     //    tinymce.init({
     //    mode : "textareas",
     //    theme: "modern",
     //    width: 550,
     //    height: 300,
     //    plugins: [
     //         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
     //         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
     //         "save table contextmenu directionality emoticons template paste textcolor"
     //   ],
     //   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor emoticons", 
     //   style_formats: [
     //        {title: 'Bold text', inline: 'b'},
     //        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
     //        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
     //        {title: 'Example 1', inline: 'span', classes: 'example1'},
     //        {title: 'Example 2', inline: 'span', classes: 'example2'},
     //        {title: 'Table styles'},
     //        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
     //    ]
     // }); 
    </script>
<legend>
    <h1 style="font-weight:200">Crete Post</h1>
</legend>
<div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">
        <form ng-app="form_input" ng-controller="submitController" uploader="uploader" ng-submit="uploader.uploadAll()"  filters="queueLimit, customFilter" class="form-horizontal" role="form">
        <center>
        <div ng-repeat="item in uploader.queue">
        <div ng-show="uploader.isHTML5" ng-thumb="{ file: item._file, height: 150 }"></div></div>
        <input type="file" nv-file-select="" uploader="uploader" required/>
        <div class="progress" style="">
            <div class="progress-bar" role="progressbar" ng-style="{ 'width': uploader.progress + '%' }"></div>
        </div>
        </center>
        <!-- halaman form -->
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Kategori :</label>
                <div class="col-sm-7 col-md-7">
                    <select class="form-control" style="width:200px" ng-model="kategori" ng-init="kategori=0" required>
                        <option value="0">-Pilih Kategori-</option>
                        <option value="1">Event</option>
                        <option value="2">Testimoni</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nama-user" class="col-sm-3 col-md-3 control-label">Judul :</label>
                <div class="col-sm-7 col-md-7">
                    <input ng-model="judul" type="text" required class="form-control" id="nama">
                </div>
            </div>
            <div class="form-group">
                <label for="bio" class="col-sm-3 col-md-3 control-label">Deskripsi :</label>
                <div class="col-sm-7 col-md-7">
                    <textarea ng-model="deskripsi" rows="10" id="deskripsi" class="form-control"></textarea>
                </div>
            </div>
            &nbsp;
            <div class="form-group">
                
                <div class="col-sm-2 col-md-2 col-md-offset-3">
                    <button ng-hide="loading" type="submit" class="btn btn-primary">Submit</button>
                        <img ng-hide="!loading" height="72" width="72" src="{{ URL::asset('images/loading.gif') }}" class="img-circle">
                        <br><br>
                        <!-- <a href="#">forgot password</a> -->
                        <p ng-hide="!isError" class="text-danger"  ng-init="message='sssss'">@{{message}}</p>
                </div>
            </div>
        </form>
    </div>
</div>
@include('foot')