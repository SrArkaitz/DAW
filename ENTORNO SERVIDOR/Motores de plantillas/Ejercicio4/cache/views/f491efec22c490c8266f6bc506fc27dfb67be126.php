<html>
<head>
    <title>Hola Mundo PHP</title>
    <style>
        table, tr, td, th{
            border: solid;
        }
    </style>
</head>
<body>
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
                    <td><?php echo e($zapa->marca); ?></td>
                    <td><?php echo e($zapa->modelo); ?></td>
                    <td><?php echo e($zapa->tipo); ?></td>
                    <td><?php echo e($zapa->precio); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH /vagrant/Motores de plantillas/Ejercicio4/views/zapatos.blade.php ENDPATH**/ ?>