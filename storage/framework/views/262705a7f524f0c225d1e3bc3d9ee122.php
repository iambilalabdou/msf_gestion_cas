
<?php $__env->startSection('mainContent'); ?>
  
  <div class="d-flex justify-content-between align-items-center">
    <h1>أنواع الحالات</h1>
    <a class="btn btn-primary" href="<?php echo e(route('typesCas.create')); ?>">
      <ion-icon name="add-circle"></ion-icon>
      إضافة نوع جديد
    </a>
  </div>
  <hr class="my-4 border-dark">


  <!-- ================== -->
  <!-- RESULT TABLE START -->
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">اسم النوع</th>
        <th scope="col">عدد المستفيدين</th>
        <th scope="col">الإجراءات</th>
      </tr>
    </thead>
    <tbody>

      <?php $__currentLoopData = $typesCas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($type->nomTypeCas); ?></td>
          <td>later</td>
          
          <td class="text-center d-flex justify-content-center">
            <a href="<?php echo e(route('typesCas.edit', $type->idTypeCas)); ?>">
              <ion-icon name="create" class="text-warning"></ion-icon>
            </a>

            <form action="<?php echo e(route('typesCas.destroy', $type->idTypeCas)); ?>" method="post">
              <?php echo csrf_field(); ?> 
              <?php echo method_field('DELETE'); ?> 
              <button class="delete-btns" type="submit">
                <ion-icon name="trash" class="text-danger"></ion-icon>
              </button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\msf_gestion_cas\resources\views/typesCas/index.blade.php ENDPATH**/ ?>