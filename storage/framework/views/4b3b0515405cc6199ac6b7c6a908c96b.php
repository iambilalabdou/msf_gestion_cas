
<?php $__env->startSection('mainContent'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <div class="d-flex justify-content-between align-items-center">
    <h1>لائحة الأيتام</h1>
    <a class="btn btn-primary" href="<?php echo e(route('orphelins.create')); ?>">
      <ion-icon name="add-circle"></ion-icon>
      إضافة يتيم جديد
    </a>
  </div>
  <hr class="my-4 border-dark">


  <!-- ================== -->
  <!-- RESULT TABLE START -->
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Z</th>
        <th scope="col">الاسم الكامل</th>
        <th scope="col">اسم الأم</th>
        <th scope="col">العنوان</th>
        <th scope="col">رقم الهاتف</th>
        <th scope="col">تاريخ الإزدياد | السن</th>
        <th scope="col">تاريخ وفاة الأب</th>
        <th scope="col">المستوى الدراسي</th>
        <th scope="col">م. ق.</th>
        <th scope="col">م. ح.</th>
        <th scope="col">يكفل به</th>
        <th scope="col">الإجراءات</th>
      </tr>
    </thead>
    <tbody>

      <?php $__currentLoopData = $orphelins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orphelin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($orphelin->idZone); ?></td>
          <td><?php echo e($orphelin->nomMere); ?></td>
          <td><?php echo e($orphelin->typeCas->nomTypeCas); ?></td>
          <td><?php echo e($orphelin->adresse); ?></td>
          <td><?php echo e($orphelin->telephone); ?></td>
          <td><?php echo e($orphelin->dateNaissance); ?></td>
          <td><?php echo e($orphelin->dateDecesPere); ?></td>
          <td><?php echo e($orphelin->niveauScolaire); ?></td>
          <td><?php echo e($orphelin->tailleChemise); ?></td>
          <td><?php echo e($orphelin->pointure); ?></td>
          <td>later</td>
          
          <td class="text-center d-flex justify-content-center">

            <a href="<?php echo e(route('orphelins.show', $orphelin->idOrphelin)); ?>">
              <ion-icon name="eye" class="text-primary"></ion-icon>
            </a>

            <a href="<?php echo e(route('orphelins.edit', $orphelin->idOrphelin)); ?>">
              <ion-icon name="create" class="text-warning"></ion-icon>
            </a>

            <ion-icon name="trash" class="text-danger" data-toggle="modal" data-target="#confirmDeleteModal" style="cursor: pointer"></ion-icon>
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">تأكيد عملية الحذف</h5>
                  </div>
                  <div class="modal-body">
                      هل أنت متأكد أنك تريد حذف هذا اليتيم ؟
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                    <form action="<?php echo e(route('orphelins.destroy', $orphelin->idOrphelin)); ?>" method="post">
                      <?php echo csrf_field(); ?> 
                      <?php echo method_field('DELETE'); ?> 
                      <button class="btn btn-danger" type="submit">حذف</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <ion-icon name="print" class="text-success"></ion-icon>

            <span class="mx-1 text-dark">|</span>
            
            <ion-icon name="ban" class="text-dark"></ion-icon>

            
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\msf_gestion_cas\resources\views/orphelins/index.blade.php ENDPATH**/ ?>