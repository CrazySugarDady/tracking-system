<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block"> 
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-block">
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($message = Session::get('warning')): ?>
<div class="alert alert-warning alert-block"> 
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($message = Session::get('info')): ?>
<div class="alert alert-info alert-block">
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger"> 
    Please check the form below for errors
</div>
<?php endif; ?><?php /**PATH /Users/crazyandy/test/test/resources/views/flash-message.blade.php ENDPATH**/ ?>