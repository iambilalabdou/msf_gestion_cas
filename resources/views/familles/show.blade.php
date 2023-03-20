@extends('layout')
@section('mainContent')

  <div class="d-flex gap-4 align-items-center">
    <a class="btn btn-primary" href="{{ route('familles.index') }}">
      <ion-icon name="chevron-forward-circle"></ion-icon>
      الرجوع للائحة العائلات
    </a>
    <h1>تفاصيل عائلة</h1>
    <a href="{{ route('familles.edit', $famille->idFamille) }}" class="btn btn-outline-dark">
      <ion-icon name="create"></ion-icon>
      تعديل هذه العائلة
    </a>
  </div>
  <hr class="my-4 border-dark">

  {{-- Check if blacklisted : display text + button --}}
  @if(\App\Models\Blacklist::where('idCas', $famille->idFamille)->exists())
    <div class="row">
      <h4 class="bg-dark text-white w-100 py-2 text-center rounded">
        <ion-icon name="ban"></ion-icon>
        عائلة ملغية
      </h4>
    </div>
  <hr class="my-4">
  @endif

  <div class="row">
    <div class="col-sm-4 mb-4">
      <label for="nomFamille" class="form-label">الاسم الكامل</label>
      <input type="text" class="form-control id="nomFamille" name="nomFamille" placeholder="الاسم الكامل" value="{{ $famille->nomFamille }}" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="idTypeCas" class="form-label">نوع الحالة</label>
      <input type="text" class="form-control id="idTypeCas" name="idTypeCas" placeholder="الحالة" value="{{ $famille->typeCas->nomTypeCas }}" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="situation" class="form-label">الحالة العائلية</label>
      <input type="text" class="form-control id="situation" name="situation" placeholder="الحالة" value="{{ $famille->situation }}" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 mb-4">
      <label for="CINPere" class="form-label">رقم بطاقة الأب</label>
      <input type="text" class="form-control" id="CINPere" name="CINPere" placeholder="رقم بطاقة الأب" value="{{ $famille->CINPere }}" readonly>
    </div>
    <div class="col-sm-4 mb-4">
      <label for="CINMere" class="form-label">رقم بطاقة الأم</label>
      <input type="text" class="form-control" id="CINMere" name="CINMere" placeholder="رقم بطاقة الأم" value="{{ $famille->CINMere }}" readonly">
    </div>
    <div class="col-sm-4 mb-4">
      <label for="ramed" class="form-label">رقم بطاقة راميد</label>
      <input type="text" class="form-control" id="ramed" name="ramed" placeholder="رقم بطاقة راميد" value="{{ $famille->ramed }}" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 mb-4">
      <label for="telephone" class="form-label">رقم الهاتف</label>
      <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $famille->telephone }}" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="adresse" class="form-label">العنوان</label>
      <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $famille->adresse }}" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="idZone" class="form-label">Zone</label>
      <input type="text" class="form-control" id="idZone" name="idZone" value="{{ $famille->idZone }}" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 mb-4">
      <label for="nbEnfants" class="form-label">عدد الأطفال</label>
      <input type="number" class="form-control" id="nbEnfants" name="nbEnfants" value="{{ $famille->nbEnfants }}" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="nbPersonne" class="form-label">عدد الأشخاص</label>
      <input type="number" class="form-control" id="nbPersonne" name="nbPersonne" value="{{ $famille->nbPersonne }}" readonly>
    </div>

    <div class="col-sm-4 mb-4">
      <label for="dateDistribution" class="form-label">تاريخ التوزيع</label>
      <input type="date" class="form-control" id="dateDistribution" name="dateDistribution" value="{{ $famille->dateDistribution }}" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2 mb-4">
      <label for="points" class="form-label">النقط</label>
      <input class="form-control" type="number" id="points" name="points" value="{{ $famille->points }}" readonly>
    </div>
    <div class="col-sm-10 mb-4">
      <label for="observations" class="form-label">ملاحظات</label>
      <input type="text" class="form-control" id="observations" name="observations" value="{{ $famille->observations }}" readonly>
    </div>
  </div>

  <hr class="my-4">

  <div class="row my-4">
      <img class="col-sm-2" src="https://images.unsplash.com/photo-1616712134411-6b6ae89bc3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80">
      <img class="col-sm-2" src="https://images.unsplash.com/photo-1616712134411-6b6ae89bc3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80">
      <img class="col-sm-2" src="https://images.unsplash.com/photo-1616712134411-6b6ae89bc3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80">
      <img class="col-sm-2" src="https://images.unsplash.com/photo-1616712134411-6b6ae89bc3ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80">
  </div>

  @if(! \App\Models\Blacklist::where('idCas', $famille->idFamille)->exists())
  <hr class="my-4">
    <form action="{{ route('familles.addToBlacklist', $famille) }}" method="get">
    @csrf
    <div class="row mb-2">
      <label for="raison" class="form-label">السبب</label>
      <input type="text" class="form-control" id="raison" name="raison" placeholder="السبب" value="{{ old('raison') }}">
    </div>
    <div class="row mb-4">
      <button type="submit" class="btn btn-primary">
        <ion-icon name="ban"></ion-icon>إضافة إلى اللائحة السوداء
      </button>
    </div>
    </form>
  @endif

@endsection