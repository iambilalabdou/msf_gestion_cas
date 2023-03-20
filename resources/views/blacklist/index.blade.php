@extends('layout')
@section('mainContent')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
  <div class="d-flex gap-4 align-items-center">
    <a class="btn btn-primary" href="{{ route('familles.index') }}">
      <ion-icon name="chevron-forward-circle"></ion-icon>
      لائحة العائلات
    </a>
    <h1>لائحة العائلات الملغية</h1>
  </div>

  <hr class="my-4 border-dark">


  <!-- ================== -->
  <!-- RESULT TABLE START -->
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Z</th>
        <th scope="col">الاسم الكامل</th>
        <th scope="col">العنوان</th>
        <th scope="col">رقم الهاتف</th>
        <th scope="col">الحالة العائلية</th>
        <th scope="col">ع. ط.</th>
        <th scope="col">ع. ش.</th>
        <th scope="col">النقط</th>
        <th scope="col">السبب</th>
        <th scope="col">الإجراءات</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($bannedFamilles as $famille)
      <tr>
          <td>{{ $famille->idZone }}</td>
          <td>{{ $famille->nomFamille }}</td>
          <td>{{ $famille->adresse }}</td>
          <td>{{ $famille->telephone }}</td>
          <td>{{ $famille->situation }}</td>
          <td>{{ $famille->nbEnfants }}</td>
          <td>{{ $famille->nbPersonne }}</td>
          <td>{{ $famille->points }}</td>
          <td>{{ $famille->blacklist->raison }}</td>
          {{-- ACTIONS --}}
          <td class="text-center d-flex justify-content-center">

            <a href="{{ route('familles.show', $famille->idFamille) }}">
              <ion-icon name="eye" class="text-primary"></ion-icon>
            </a>

            <a href="{{ route('familles.edit', $famille->idFamille) }}">
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
                    <form action="{{ route('familles.destroy', $famille->idFamille) }}" method="post">
                      @csrf 
                      @method('DELETE') 
                      <button class="btn btn-danger" type="submit">حذف</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <ion-icon name="print" class="text-success"></ion-icon>
          </td>
        </tr>
        @endforeach

    </tbody>
  </table>

  
@endsection