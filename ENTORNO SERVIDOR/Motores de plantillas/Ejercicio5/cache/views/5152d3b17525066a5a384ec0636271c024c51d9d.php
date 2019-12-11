<?php $__env->startSection("zapas"); ?>

    <?php echo $__env->make('tienda', ['empresa' => $empresa] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <table>
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
        </tr>
            <?php $__currentLoopData = $zapatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($zapa->getMarca()); ?></td>
                    <td><?php echo e($zapa->getModelo()); ?></td>
                    <td><?php echo e($zapa->getTipo()); ?></td>
                    <td><?php echo e($zapa->getPrecio()); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /vagrant/Motores de plantillas/Ejercicio5/views/zapatos.blade.php ENDPATH**/ ?>