<?php readfile("head.php"); ?>
<legend><h3>Edit quote</h3></legend>
&nbsp;
<form class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Quote</label>
        <div class="col-sm-8 col-md-8 ">
            <textarea class="form-control" rows="3" required id="isi-quote"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Author</label>
        <div class="col-sm-8 col-md-8">
            <input class="form-control" id="author" type="text" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-1 col-md-1 col-md-offset-2">
            <button type="submit" class="btn btn-primary form-control">OK</button>
        </div>
    </div>
</form>
<?php readfile("foot.php"); ?>