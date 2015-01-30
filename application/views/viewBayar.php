<!DOCTYPE html>
<html>
<head>
<!--
	CIFABS (Codeigniter Fontawesome Bootstrap) join framework
	by seirifat.com
	rifatkun@seirifat.com
	rifatkun@gmail.com
-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url('asset/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/font-awesome-4.1.0/font-awesome.min.css');?>">
	
	
    <title>bayar</title>
</head>
<body>


	<script>
		function filterMj()
		{
			document.theForm.submit();
		}
	</script>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Contoh Bayar</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--Main content-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
			<form name="theForm" method="POST" action="<?php echo site_url('bayar/filterMeja');?>">
                <div class="form-group">
				  <label for="mejaid">Pilih Meja:</label>
				  <select class="form-control" id="mejaid" name="mejaid" style="width:300px;" onchange="filterMj()">
						<option value="" disabled <?php echo empty($mjid)?'selected':''?>> -- Pilih Meja -- </option>
					<?php foreach($meja as $row):?>
						<option value="<?php echo $row->mejaid?>" <?php echo @$mjid==$row->mejaid?'selected':''?>>
							Meja ke <?php echo $row->mejaid?>
						</option>
					<?php endforeach;?>
				  </select>
				</div>
			</form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-striped table-hover">
					<tr>
						<th>
							Nama pesanan
						</th>
						<th>
							Harga
						</th>
					</tr>
					<?php
						$totalbayar = 0;
					?>
					<?php if(!empty($bayar)):?>
					<?php foreach($bayar as $row):?>
					<tr>
						<td>
							<?php echo $row->nama?>
						</td>
						<td>
							<?php echo $row->harga?>
						</td>
					</tr>
					<?php $totalbayar+=$row->harga;?>
					<?php endforeach;?>
					<?php endif;?>
				</table>
				<br>
				<form method="post" action="<?php echo site_url('bayar/prosesBayar');?>">
				<input type="hidden" name="totalbayar" value="<?php echo $totalbayar;?>">
				<input type="hidden" name="mjid" value="<?php echo @$mjid;?>">
				<p class="text-right"><button type="submit" class="btn btn-success">Bayar</button></p>
				</form>
            </div>
        </div>
    </div>
	
	<!--Footer-->
	<div class="panel-footer">
		<p class="text-center">&copy;2014</p>
	</div>
</body>
</html>