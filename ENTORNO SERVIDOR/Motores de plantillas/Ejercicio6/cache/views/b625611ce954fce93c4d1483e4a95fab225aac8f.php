<?php $__env->startSection("zapas"); ?>
    <table>
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
            <td>Producto</td>
        </tr>
            <?php $__currentLoopData = $zapatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($zapa->marca); ?></td>
                    <td><?php echo e($zapa->modelo); ?></td>
                    <td><?php echo e($zapa->tipo); ?></td>
                    <td><?php echo e($zapa->precio); ?></td>
                    <td><?php echo e($zapa->id); ?></td>
                    <td><a href="index.php?id=<?php echo e($zapa->id); ?>">Ver zapatilla</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /vagrant/Motores de plantillas/Ejercicio6/views/zapatos.blade.php ENDPATH**/ ?>