<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  	<div class="card">
  		
  		<table class="table">
  <thead>

    <tr>
    	<?php foreach($data[0] as $key=>$value):?>
      <th scope="col"><?=$key?></th>
      <?php endforeach;?>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
  	<?php foreach($data as $key=>$base):?>
    <tr>
    	<form action="<?=base_url("/Galery/Update");?>" method="POST">
  	<?php foreach($base as $key2=>$value):?>
      <th scope="row">
      	<div class="input-group mb-3">
  				<span class="input-group-text" id="<?=$key2?>"><?=$key2?></span>
  				<input type="text" class="form-control" name="<?=$key2?>" placeholder="<?=$value?>" value="<?=$value?>" aria-label="<?=$key2?>" aria-describedby="basic-addon1">
				</div>
      	</th>
    <?php endforeach;?>
     <th scope="row">
     	<div class="btn-group" role="group" aria-label="Basic mixed styles example">
  			<a type="button" href="<?=base_url("/Galery/Delete?id=".$base->id);?>" class="btn btn-danger">Dellet</a>
  			<button type="submit" class="btn btn-warning">Update</button>
			</div>
     </th>
			</form>
    </tr>
    <?php endforeach;?>
  </tbody>

</table>
	<a href="<?=base_url('Galery/Add');?>" class="col-md-12 btn btn-primary">Add Data</a>
  	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>