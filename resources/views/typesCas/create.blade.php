@extends('layout')
@section('mainContent')

  <div class="d-flex gap-4 align-items-center">
    <a class="btn btn-primary" href="{{ route('typesCas.index') }}">
      <ion-icon name="chevron-forward-circle"></ion-icon>
      الرجوع للائحة الأنواع
    </a>
    <h1>إضافة نوع جديد</h1>
  </div>
  <hr class="my-4 border-dark">



  <form method="post" action="{{ route('typesCas.store') }}">
    @csrf
    <div class="row">
      <div class="col-sm-6 mb-4">
        <label for="nomTypeCas" class="form-label">اسم النوع</label>
        <input type="text" class="form-control @error('nomTypeCas') is-invalid @enderror" id="nomTypeCas" name="nomTypeCas" placeholder="اسم النوع" value="{{ old('nomTypeCas') }}">
        @error('nom')
          <div class="text-danger">{{ $message }}</div>
        @enderror
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

@endsection