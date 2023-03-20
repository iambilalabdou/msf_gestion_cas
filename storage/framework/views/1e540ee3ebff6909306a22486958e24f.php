
<?php $__env->startSection('mainContent'); ?>

  <div class="d-flex gap-4 align-items-center">
    <a class="btn btn-primary" href="<?php echo e(route('familles.index')); ?>">
      <ion-icon name="chevron-forward-circle"></ion-icon>
      الرجوع للائحة العائلات
    </a>
    <h1>تفاصيل عائلة</h1>
    <a href="<?php echo e(route('familles.edit', $famille->idFamille)); ?>" class="btn btn-outline-dark">
      <ion-icon name="create"></ion-icon>
      تعديل هذه العائلة
    </a>
  </div>
  <hr class="my-4 border-dark">

  
  <?php if(\App\Models\Blacklist::where('idCas', $famille->idFamille)->exists()): ?>
    <div class="row">
      <h4 class="bg-dark text-white w-100 py-2 text-center rounded">
        <ion-icon name="ban"></ion-icon>
        عائلة ملغية
      </h4>
    </div>
  <hr class="my-4">
  <?php endif; ?>

  <div class="row">
    <div class="col-sm-4 mb-4">
      <label for="nomFamille" class="form-label">الاسم الكامل</label>
      <input type="text" class="form-control id="nomFamille" name="nomFamille" placeholder="الاسم الكامل" value="<?php echo e($famille->nomFamille); ?>" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="idTypeCas" class="form-label">نوع الحالة</label>
      <input type="text" class="form-control id="idTypeCas" name="idTypeCas" placeholder="الحالة" value="<?php echo e($famille->typeCas->nomTypeCas); ?>" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="situation" class="form-label">الحالة العائلية</label>
      <input type="text" class="form-control id="situation" name="situation" placeholder="الحالة" value="<?php echo e($famille->situation); ?>" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 mb-4">
      <label for="CINPere" class="form-label">رقم بطاقة الأب</label>
      <input type="text" class="form-control" id="CINPere" name="CINPere" placeholder="رقم بطاقة الأب" value="<?php echo e($famille->CINPere); ?>" readonly>
    </div>
    <div class="col-sm-4 mb-4">
      <label for="CINMere" class="form-label">رقم بطاقة الأم</label>
      <input type="text" class="form-control" id="CINMere" name="CINMere" placeholder="رقم بطاقة الأم" value="<?php echo e($famille->CINMere); ?>" readonly">
    </div>
    <div class="col-sm-4 mb-4">
      <label for="ramed" class="form-label">رقم بطاقة راميد</label>
      <input type="text" class="form-control" id="ramed" name="ramed" placeholder="رقم بطاقة راميد" value="<?php echo e($famille->ramed); ?>" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 mb-4">
      <label for="telephone" class="form-label">رقم الهاتف</label>
      <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo e($famille->telephone); ?>" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="adresse" class="form-label">العنوان</label>
      <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo e($famille->adresse); ?>" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="idZone" class="form-label">Zone</label>
      <input type="text" class="form-control" id="idZone" name="idZone" value="<?php echo e($famille->idZone); ?>" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 mb-4">
      <label for="nbEnfants" class="form-label">عدد الأطفال</label>
      <input type="number" class="form-control" id="nbEnfants" name="nbEnfants" value="<?php echo e($famille->nbEnfants); ?>" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="nbPersonne" class="form-label">عدد الأشخاص</label>
      <input type="number" class="form-control" id="nbPersonne" name="nbPersonne" value="<?php echo e($famille->nbPersonne); ?>" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="dateDistribution" class="form-label">تاريخ التوزيع</label>
      <input type="date" class="form-control" id="dateDistribution" name="dateDistribution" value="<?php echo e($famille->dateDistribution); ?>" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2 mb-4">
      <label for="points" class="form-label">النقط</label>
      <input class="form-control" type="number" id="points" name="points" value="<?php echo e($famille->points); ?>" readonly>
    </div>
    <div class="col-sm-10 mb-4">
      <label for="observations" class="form-label">ملاحظات</label>
      <input type="text" class="form-control" id="observations" name="observations" value="<?php echo e($famille->observations); ?>" readonly>
    </div>
  </div>

  <hr class="my-4">

  <div class="row my-4">
      <img class="col-sm-2" src="https://images.unsplash.com/photo-1616712134411-6b6ae89bc3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80">
      <img class="col-sm-2" src="https://images.unsplash.com/photo-1616712134411-6b6ae89bc3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80">
      <img class="col-sm-2" src="https://images.unsplash.com/photo-1616712134411-6b6ae89bc3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80">
      <img class="col-sm-2" src="https://images.unsplash.com/photo-1616712134411-6b6ae89bc3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80">
  </div>

  <?php if(! \App\Models\Blacklist::where('idCas', $famille->idFamille)->exists()): ?>
  <hr class="my-4">
    <form action="<?php echo e(route('familles.addToBlacklist', $famille)); ?>" method="get">
    <?php echo csrf_field(); ?>
    <div class="row mb-2">
      <label for="raison" class="form-label">السبب</label>
      <input type="text" class="form-control" id="raison" name="raison" placeholder="السبب" value="<?php echo e(old('raison')); ?>">
    </div>
    <div class="row mb-4">
      <button type="submit" class="btn btn-primary">
        <ion-icon name="ban"></ion-icon>إضافة إلى اللائحة السوداء
      </button>
    </div>
    </form>
  <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\msf_gestion_cas\resources\views/familles/show.blade.php ENDPATH**/ ?>