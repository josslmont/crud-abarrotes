<form action="<?php echo e(url('/productos')); ?>" method="post">

    <?php echo csrf_field(); ?>

    <label for="producto">Producto:</label>
    <input type="text" name="producto" value="<?php echo e($producto->producto); ?>" />
    <br>

    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" value="<?php echo e($producto->cantidad); ?>" />
    <br>

    <label for="precio">Precio:</label> 
    <input type="text" name="precio" value="<?php echo e($producto->precio); ?>" />
    <br>

    <label for="caducidad">Fecha de caducidad:</label>
    <input type="date" name="caducidad" value="<?php echo e($producto->caducidad); ?>" />
    <br>

    <label for="update_at">Fecha de actualizacion:</label>
    <input type="date" name="update_at" />
    <br>

    <input type="submit" value="GUARDAR" />
</form><?php /**PATH C:\xampp\htdocs\crud-abarrotes\resources\views/productos/formulario.blade.php ENDPATH**/ ?>