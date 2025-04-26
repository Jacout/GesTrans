<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulario reporte</title>
  </head>
  <body>
    <div class="container">
  
    <form action="<?php echo e(route('registro2')); ?>" method="POST" class="row g-3" style="margin-top: 20px">
<?php echo csrf_field(); ?>
<!-- token -->
<div class="col-md-6">
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">UNIDAD</span>
  <input type="number" name="UNIDAD" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NOMBRE</span>
  <input type="text" name="NOMBRE" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>


    <select name="FAMILIA" class="form-select" aria-label="Default select example">
  <option selected>FAMILIA DE FALLAS</option>
  <option value="1">TRANSMISION</option>
  <option value="2">LLANTAS</option>
  <option value="3">MOTOR</option>
</select>
    </div>
    <div class="mb-3">
  <label  class="form-label">Descripcion de la falla</label>
  <textarea name="DESCRIP" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar informacion</button>
  </div>
    </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\Users\Jacob\Desktop\pag_beta\resources\views/INFO/FOR_REPOR.blade.php ENDPATH**/ ?>