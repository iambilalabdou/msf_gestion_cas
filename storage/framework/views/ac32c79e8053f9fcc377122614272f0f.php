
<?php $__env->startSection('mainContent'); ?>

  <div class="d-flex gap-4 align-items-center">
    <a class="btn btn-primary" href="<?php echo e(route('typesCas.index')); ?>">
      <ion-icon name="chevron-forward-circle"></ion-icon>
      الرجوع للائحة الأنواع
    </a>
    <h1>تعديل نوع</h1>
  </div>
  <hr class="my-4 border-dark">



  <form method="post" action="<?php echo e(route('typesCas.update', ['typesCa' => $typeCas])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
      <div class="col-sm-6 mb-4">
        <label for="nomTypeCas" class="form-label">اسم النوع</label>
        <input type="text" class="form-control <?php $__errorArgs = ['nomTypeCas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nomTypeCas" name="nomTypeCas" placeholder="اسم النوع" value="<?php echo e($typeCas->nomTypeCas); ?>">
        <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
    </div>
    
    <div class="row">
      <div>
        <button type="submit" class="btn btn-primary">
          <ion-icon name="add-circle"></ion-icon>إضافة
        </button>
        <button type="reset" class="btn btn-outline-primary">
          <ion-icon name="refresh"></ion-icon>إعادة
        </button>
      </div>
    </div>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\msf_gestion_cas\resources\views/typesCas/edit.blade.php ENDPATH**/ ?>