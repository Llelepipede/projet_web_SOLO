


<?php $__env->startSection('contenu'); ?>

<form action="/addproduct" method="post">

    <?php echo e(csrf_field()); ?>


    <input type="name" name="name" placeholder="Nom">
    <input type="text" name="decription" placeholder="description">
    <input type="text" name="price" placeholder="prix">
    <input type="submit" value="enregistrer">
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pches\Desktop\projet_tech_web\bonjour\projet\resources\views/addproduct.blade.php ENDPATH**/ ?>