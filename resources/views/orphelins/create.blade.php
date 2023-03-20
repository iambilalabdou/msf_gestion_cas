@extends('layout')
@section('mainContent')

  <div class="d-flex gap-4 align-items-center">
    <a class="btn btn-primary" href="{{ route('orphelins.index') }}">
      <ion-icon name="chevron-forward-circle"></ion-icon>
      الرجوع للائحة الأيتام
    </a>
    <h1>إضافة يتيم جديد</h1>
  </div>
  <hr class="my-4 border-dark">


  <form method="post" action="{{ route('orphelins.store') }}" enctype="multipart/form-data">
    <div class="row">
      <div class="col-sm-4 mb-4">
        <label for="nom" class="form-label">الاسم الكامل</label>
        <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" placeholder="الاسم الكامل" value="{{ old('nom') }}">
        @error('nom')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-sm-4 mb-4">
        <label for="nomMere" class="form-label">اسم الأم</label>
        <input type="text" class="form-control" id="nomMere" name="nomMere" placeholder="اسم الأم" value="{{ old('nomMere') }}">
      </div>

      <div class="col-sm-4 mb-4">
        <label for="CINMere" class="form-label">رقم بطاقة الأم</label>
        <input type="text" class="form-control" id="CINMere" name="CINMere" placeholder="رقم بطاقة الأم" value="{{ old('CINMere') }}">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 mb-4">
        <label for="telephone" class="form-label">رقم الهاتف</label>
        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="رقم الهاتف" value="{{ old('telephone') }}">
      </div>
      <div class="col-sm-4 mb-4">
        <label for="dateNaissance" class="form-label">تاريخ الازدياد</label>
        <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" value="{{ old('dateNaissance') }}">
      </div>
      <div class="col-sm-4 mb-4">
        <label for="idZone" class="form-label">Zone</label>
        <select class="form-select" id="idZone" name="idZone">
          <option disabled>اختر Zone</option>
          <option value="Z1">Zone 1</option>
          <option value="Z2">Zone 2</option>
          <option value="Z3">Zone 3</option>
          <option value="Z4">Zone 4</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 mb-4">
        <label for="sexe" class="form-label">الجنس</label>
        <select class="form-select" id="sexe" name="sexe">
          <option disabled>اختر الجنس</option>
          <option value="homme">ذكر</option>
          <option value="femme">أنثى</option>
        </select>
        @error('sexe')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-sm-4 mb-4">
        <label for="pointure" class="form-label">مقاس الحذاء</label>
        <input type="number" class="form-control" id="pointure" name="pointure" placeholder="مقاس الحذاء" value="{{ old('pointure') }}">
      </div>
      <div class="col-sm-4 mb-4">
        <label for="tailleChemise" class="form-label">مقاس القميص</label>
        <input type="number" class="form-control" id="tailleChemise" name="tailleChemise"
          placeholder="مقاس القميص" value="{{ old('tailleChemise') }}">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 mb-4">
        <label for="adresse" class="form-label">العنوان</label>
        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="العنوان" value="{{ old('adresse') }}">
      </div>
      <div class="col-sm-4 mb-4">
        <label for="niveauScolaire" class="form-label">المستوى الدراسي</label>
        <select class="form-select" id="niveauScolaire" name="niveauScolaire" value="{{ old('niveauScolaire') }}">
          <option selected>اختر المستوى الدراسي</option>
          <optgroup label="إبتدائي">
            <option value="ال1 إبتدائي">ال1 إبتدائي</option>
            <option value="ال2 إبتدائي">ال2 إبتدائي</option>
            <option value="ال3 إبتدائي">ال3 إبتدائي</option>
            <option value="ال4 إبتدائي">ال4 إبتدائي</option>
            <option value="ال5 إبتدائي">ال5 إبتدائي</option>
            <option value="ال6 إبتدائي">ال6 إبتدائي</option>
          </optgroup>
          <optgroup label="إعدادي">
            <option value="ال1 إعدادي">ال1 إعدادي</option>
            <option value="ال2 إعدادي">ال2 إعدادي</option>
            <option value="ال3 إعدادي">ال3 إعدادي</option>
          </optgroup>
          <optgroup label="ثانوي">
            <option value="الجذع مشترك">الجذع مشترك</option>
            <option value="ال2 ثانوي">ال2 ثانوي</option>
            <option value="ال3 ثانوي">ال3 ثانوي</option>
          </optgroup>
        </select>
      </div>
      <div class="col-sm-4 mb-4">
        <label for="observations" class="form-label">ملاحظات</label>
        <input type="text" class="form-control" id="observations" name="observations" placeholder="ملاحظات" value="{{ old('observations') }}">
      </div>
    </div>

    <div class="mb-4">
      <label for="idImage" class="form-label">صور</label>
      <input class="form-control" type="file" id="idImage" multiple">
    </div>

    <div class="row mb-4">
      <div class="form-check form-switch d-flex gap-3">
        <label class="form-check-label" for="blacklist">إضافة إلى اللائحة السوداء</label>
        <input class="form-check-input" type="checkbox" role="switch" id="blacklist" unchecked>
      </div>
      <div class="form-check form-switch d-flex gap-3">
        <label class="form-check-label" for="have-donateur">يملك كفيل</label>
        <input class="form-check-input" type="checkbox" role="switch" id="have-donateur"
          onclick="toggleHaveDonateurDiv()">
      </div>
    </div>


    <div class="have-donateur-div">
      <hr class="my-4 border-dark">


      <div class="row">
        <div class="col-sm-4 mb-4">
          <label for="nomDonateur" class="form-label">اسم الكفيل</label>
          <input type="text" class="form-control" id="nomDonateur" name="nomDonateur" placeholder="اسم الكفيل">
        </div>
        <div class="col-sm-4 mb-4">
          <label for="telephone" class="form-label">رقم هاتف الكفيل</label>
          <input type="text" class="form-control" id="telephone" name="telephone"
            placeholder="رقم هاتف الكفيل">
        </div>
        <div class="col-sm-4 mb-4">
          <label for="mois" class="form-label">شهر الكفالة</label>
          <input type="text" class="form-control" id="mois" name="mois" placeholder="شهر الكفالة">
        </div>
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

  <!-- Custom JS -->
  <script>
    function toggleHaveDonateurDiv() {
      document.querySelector('.have-donateur-div').classList.toggle('opened');
    }
  </script>
@endsection