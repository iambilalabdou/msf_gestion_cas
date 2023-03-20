@extends('layout')
@section('mainContent')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <div class="d-flex justify-content-between align-items-center">
    <h1>لائحة الأيتام</h1>
    <a class="btn btn-primary" href="{{ route('orphelins.create') }}">
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

      @foreach ($orphelins as $orphelin)
      <tr>
          <td>{{ $orphelin->idZone }}</td>
          <td>{{ $orphelin->nomMere }}</td>
          <td>{{ $orphelin->typeCas->nomTypeCas }}</td>
          <td>{{ $orphelin->adresse }}</td>
          <td>{{ $orphelin->telephone }}</td>
          <td>{{ $orphelin->dateNaissance }}</td>
          <td>{{ $orphelin->dateDecesPere }}</td>
          <td>{{ $orphelin->niveauScolaire }}</td>
          <td>{{ $orphelin->tailleChemise }}</td>
          <td>{{ $orphelin->pointure }}</td>
          <td>later</td>
          {{-- ACTIONS --}}
          <td class="text-center d-flex justify-content-center">

            <a href="{{ route('orphelins.show', $orphelin->idOrphelin) }}">
              <ion-icon name="eye" class="text-primary"></ion-icon>
            </a>

            <a href="{{ route('orphelins.edit', $orphelin->idOrphelin) }}">
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
                    <form action="{{ route('orphelins.destroy', $orphelin->idOrphelin) }}" method="post">
                      @csrf 
                      @method('DELETE') 
                      <button class="btn btn-danger" type="submit">حذف</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <ion-icon name="print" class="text-success"></ion-icon>

            <span class="mx-1 text-dark">|</span>
            
            <ion-icon name="ban" class="text-dark"></ion-icon>

            {{-- <a href="{{ route('familles.addToBlacklist', $famille) }}">
              <ion-icon name="ban" class="text-dark"></ion-icon>
            </a> --}}
          </td>
        </tr>
        @endforeach

    </tbody>
  </table>

  
@endsection