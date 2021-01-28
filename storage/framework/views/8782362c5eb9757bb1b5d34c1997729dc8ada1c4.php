


<?php $__env->startSection('contenu'); ?>

<div>
    <p>page inscription</p>
</div>
<div>
    <form action="/inscription" method="post">

        <?php echo e(csrf_field()); ?>


        <input type="name" name="name" placeholder="Nom">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        <input type="submit" value="M'inscrire">
    </form>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pches\Desktop\projet_tech_web\bonjour\projet\resources\views/inscription.blade.php ENDPATH**/ ?>