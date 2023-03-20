
<?php $__env->startSection('mainContent'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <div class="d-flex justify-content-between align-items-center">
    <h1>لائحة العائلات</h1>
    <a class="btn btn-primary" href="<?php echo e(route('familles.create')); ?>">
      <ion-icon name="add-circle"></ion-icon>
      إضافة عائلة جديدة
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
        
        
        <th scope="col">نوع الحالة</th>
        <th scope="col">العنوان</th>
        <th scope="col">رقم الهاتف</th>
        
        <th scope="col">الحالة العائلية</th>
        <th scope="col">ع. ط.</th>
        <th scope="col">ع. ش.</th>
        <th scope="col">تاريخ التوزيع</th>
        <th scope="col">النقط</th>
        
        <th scope="col">الإجراءات</th>
      </tr>
    </thead>
    <tbody>

      <?php $__currentLoopData = $familles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $famille): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <td><?php echo e($famille->idZone); ?></td>
          <td><?php echo e($famille->nomFamille); ?></td>
          
          
          <td><?php echo e($famille->typeCas->nomTypeCas); ?></td>
          <td><?php echo e($famille->adresse); ?></td>
          <td><?php echo e($famille->telephone); ?></td>
          
          <td><?php echo e($famille->situation); ?></td>
          <td><?php echo e($famille->nbEnfants); ?></td>
          <td><?php echo e($famille->nbPersonne); ?></td>
          <td><?php echo e($famille->dateDistribution); ?></td>
          <td><?php echo e($famille->points); ?></td>
          
          
          <td class="text-center d-flex justify-content-center">

            <a href="<?php echo e(route('familles.show', $famille->idFamille)); ?>">
              <ion-icon name="eye" class="text-primary" aria-label="hhh"></ion-icon>
            </a>

            <a href="<?php echo e(route('familles.edit', $famille->idFamille)); ?>">
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
                      هل أنت متأكد أنك تريد حذف هذه العائلة ؟
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                    <form action="<?php echo e(route('familles.destroy', $famille->idFamille)); ?>" method="post">
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
            
            <a href="<?php echo e(route('familles.addToBlacklist', $famille)); ?>">
              <ion-icon name="ban" class="text-dark"></ion-icon>
            </a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\msf_gestion_cas\resources\views/familles/index.blade.php ENDPATH**/ ?>