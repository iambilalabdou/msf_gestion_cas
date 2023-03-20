@extends('layout')
@section('mainContent')
  
  <div class="d-flex justify-content-between align-items-center">
    <h1>أنواع الحالات</h1>
    <a class="btn btn-primary" href="{{ route('typesCas.create') }}">
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

      @foreach ($typesCas as $type)
      <tr>
          <td>{{ $type->nomTypeCas }}</td>
          <td>later</td>
          {{-- ACTIONS --}}
          <td class="text-center d-flex justify-content-center">
            <a href="{{ route('typesCas.edit', $type->idTypeCas) }}">
              <ion-icon name="create" class="text-warning"></ion-icon>
            </a>

            <form action="{{ route('typesCas.destroy', $type->idTypeCas) }}" method="post">
              @csrf 
              @method('DELETE') 
              <button class="delete-btns" type="submit">
                <ion-icon name="trash" class="text-danger"></ion-icon>
              </button>
            </form>
          </td>
        </tr>
        @endforeach

    </tbody>
  </table>


@endsection