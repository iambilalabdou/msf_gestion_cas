@extends('layout')
@section('mainContent')

  <div class="d-flex gap-4 align-items-center">
    <a class="btn btn-primary" href="{{ route('familles.index') }}">
      <ion-icon name="chevron-forward-circle"></ion-icon>
      الرجوع للائحة العائلات
    </a>
    <h1>تعديل عائلة</h1>
  </div>
  <hr class="my-4 border-dark">

  <form method="post" action="{{ route('familles.update', $famille) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-sm-4 mb-4">
        <label for="nomFamille" class="form-label">الاسم الكامل</label>
        <input type="text" class="form-control @error('nomFamille') is-invalid @enderror" id="nomFamille" name="nomFamille" placeholder="الاسم الكامل" value="{{ $famille->nomFamille }}">
        @error('nomFamille')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-sm-4 mb-4">
        <label for="idTypeCas" class="form-label">نوع الحالة</label>
        <select class="form-select" id="idTypeCas" name="idTypeCas">
          @foreach ($typesCas as $typeCas)
          <option value="{{ $typeCas->idTypeCas }}" {{ $typeCas->idTypeCas == $famille->idTypeCas ? 'selected' : '' }}>
              {{ $typeCas->nomTypeCas }}
          </option>
          @endforeach
        </select>
        @error('idTypeCas')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>


      <div class="col-sm-4 mb-4">
        <label for="situation" class="form-label">الحالة العائلية</label>
        <select class="form-select" id="situation" name="situation" value="{{ old('situation') }}">
          <option value="متزوج(ة)" {{ $famille->situation === 'متزوج(ة)' ? 'selected' : '' }}>متزوج(ة)</option>
          <option value="مطلق(ة)" {{ $famille->situation === 'مطلق(ة)' ? 'selected' : '' }}>مطلق(ة)</option>
          <option value="مهجور(ة)" {{ $famille->situation === 'مهجور(ة)' ? 'selected' : '' }}>مهجور(ة)</option>
          <option value="عازب(ة)" {{ $famille->situation === 'عازب(ة)' ? 'selected' : '' }}>عازب(ة)</option>
          <option value="أرمل(ة)" {{ $famille->situation === 'أرمل(ة)' ? 'selected' : '' }}>أرمل(ة)</option>
        </select>
      </div>


    <div class="row">
      <div class="col-sm-4 mb-4">
        <label for="CINPere" class="form-label">رقم بطاقة الأب</label>
        <input type="text" class="form-control @error('CINPere') is-invalid @enderror" id="CINPere" name="CINPere" placeholder="رقم بطاقة الأب" value="{{ $famille->CINPere }}">
        @error('CINPere')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-sm-4 mb-4">
        <label for="CINMere" class="form-label">رقم بطاقة الأم</label>
        <input type="text" class="form-control @error('CINMere') is-invalid @enderror" id="CINMere" name="CINMere" placeholder="رقم بطاقة الأم" value="{{ $famille->CINMere }}">
        @error('CINMere')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-sm-4 mb-4">
        <label for="ramed" class="form-label">رقم بطاقة راميد</label>
        <input type="text" class="form-control" id="ramed" name="ramed" placeholder="رقم بطاقة راميد" value="{{ $famille->ramed }}">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 mb-4">
        <label for="telephone" class="form-label">رقم الهاتف</label>
        <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" placeholder="رقم الهاتف" value="{{ $famille->telephone }}">
        @error('telephone')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-sm-4 mb-4">
        <label for="adresse" class="form-label">العنوان</label>
        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="العنوان" value="{{ $famille->adresse }}">
      </div>
      <div class="col-sm-4 mb-4">
        <label for="idZone" class="form-label">Zone</label>
        <select class="form-select" id="idZone" name="idZone">
          <option value="Z1" {{ $famille->idZone === 'Z1' ? 'selected' : '' }}>Zone 1</option>
          <option value="Z2" {{ $famille->idZone === 'Z2' ? 'selected' : '' }}>Zone 2</option>
          <option value="Z3" {{ $famille->idZone === 'Z3' ? 'selected' : '' }}>Zone 3</option>
          <option value="Z4" {{ $famille->idZone === 'Z4' ? 'selected' : '' }}>Zone 4</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 mb-4">
        <label for="nbEnfants" class="form-label">عدد الأطفال</label>
        <input type="number" class="form-control" id="nbEnfants" name="nbEnfants" placeholder="أدخل عدد الأطفال" value="{{ $famille->nbEnfants }}">
      </div>
      <div class="col-sm-4 mb-4">
        <label for="nbPersonne" class="form-label">عدد الأشخاص</label>
        <input type="number" class="form-control" id="nbPersonne" name="nbPersonne"
          placeholder="أدخل عدد الأشخاص" value="{{ $famille->nbPersonne }}">
      </div>
      <div class="col-sm-4 mb-4">
        <label for="dateDistribution" class="form-label">تاريخ التوزيع</label>
        <input type="date" class="form-control" id="dateDistribution" name="dateDistribution" value="{{ $famille->dateDistribution }}">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2 mb-4">
        <label for="points" class="form-label">النقط</label>
        <input class="form-control" type="number" id="points" name="points" value="{{ $famille->points }}">
      </div>
      <div class="col-sm-6 mb-4">
        <label for="observations" class="form-label">ملاحظات</label>
        <input type="text" class="form-control" id="observations" name="observations" placeholder="ملاحظات" value="{{ $famille->observations }}">
      </div>
      <div class="col-sm-4 mb-4">
        <label for="images" class="form-label">صور</label>
        <input class="form-control" type="file" id="images" name="images" multiple" value="{{ old('images') }}">
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-sm-3 mb-4 form-check form-switch d-flex gap-3">
        <label class="form-check-label" for="blacklisted">إضافة إلى اللائحة السوداء</label>
        <input class="form-check-input" type="checkbox" role="switch" id="blacklisted" name="blacklisted"
        {{ \App\Models\Blacklist::where('idCas', $famille->idFamille)->exists() ? 'checked' : '' }}>
      </div>
      <div class="col-sm-9 mb-4">
        <label for="raison" class="form-label">السبب</label>
        <input type="text" class="form-control" id="raison" name="raison" placeholder="السبب"
        value="{{ \App\Models\Blacklist::where('idCas', $famille->idFamille)->exists() ? $famille->blacklist->raison : old('raison') }}"
      </div>
    </div>

    <button type="submit" class="btn btn-primary">
      <ion-icon name="create"></ion-icon>تعديل
    </button>
  </form>

@endsection