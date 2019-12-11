<?php $__env->startSection("zapas"); ?>
    <table>
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
            <td>id</td>
            <td>volver</td>
        </tr>
        <tr>
            <td><?php echo e($zapa->marca); ?></td>
            <td><?php echo e($zapa->modelo); ?></td>
            <td><?php echo e($zapa->tipo); ?></td>
            <td><?php echo e($zapa->precio); ?></td>
            <td><?php echo e($zapa->id); ?></td>
            <td><a href="index.php">Volver</a></td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /vagrant/Motores de plantillas/Ejercicio6/views/producto.blade.php ENDPATH**/ ?>