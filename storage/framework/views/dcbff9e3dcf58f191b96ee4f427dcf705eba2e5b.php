<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar Producto</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="https://cdn-icons-png.flaticon.com/512/746/746900.png" width="30" height="30" class="d-inline-block align-top"    alt="">
            Abarrotes "El Pero"
        </a>
    </nav>
    <div class="container-fluid">
        <h1>Editar Producto</h1>
        <form action="<?php echo e(url('/productos/'.$producto->id)); ?>" method="post">

            <?php echo csrf_field(); ?>
            <?php echo e(method_field('PATCH')); ?>

            <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Producto</span>
                    </div>
                    <input type="text" class="form-control" name="producto" value="<?php echo e($producto->producto); ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Cantidad</span>
                    </div>
                    <input type="number" class="form-control" name="cantidad" value="<?php echo e($producto->cantidad); ?>">
                </div>
            </div>
            <div class="col-sm">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Precio</span>
                        </div>
                        <input type="text" class="form-control" name="precio" value="<?php echo e($producto->precio); ?>">
                </div>
                <a href="<?php echo e(url('productos/')); ?>" class="btn btn-danger">CANCELAR</a>
                <input type="submit" value="ACTUALIZAR" class="btn btn-warning"/>    
            </div>
            <div class="col-sm">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha de caducidad</span>
                        </div>
                        <input type="date" class="form-control" name="caducidad" value="<?php echo e($producto->caducidad); ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Fecha de actualizacion</span>
                    </div>
                    <input type="date" class="form-control" name="update_at">
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<!-- <form action="<?php echo e(url('/productos/'.$producto->id)); ?>" method="post">

    <?php echo csrf_field(); ?>
    <?php echo e(method_field('PATCH')); ?>

    <label for="producto">Producto:</label>
    <input type="text" name="producto" value="<?php echo e($producto->producto); ?>" />
    <br>

    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad"  />
    <br>

    <label for="precio">Precio:</label> 
    <input type="text" name="precio"  />
    <br>

    <label for="caducidad">Fecha de caducidad:</label>
    <input type="date" name="caducidad"  />
    <br>

    <label for="update_at">Fecha de actualizacion:</label>
    <input type="date"  />
    <br>

    <a href="<?php echo e(url('productos/')); ?>">CANCELAR</a>
    <input type="submit" value="ACTUALIZAR" />
   
</form> --><?php /**PATH C:\xampp\htdocs\crud-abarrotes\resources\views/productos/editar_producto.blade.php ENDPATH**/ ?>