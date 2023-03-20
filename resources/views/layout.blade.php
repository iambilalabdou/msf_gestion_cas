<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Marocaines Solidaires Sans Frontières</title>
</head>

<body>

  <div class="row">

    <!-- ===================== -->
    <!-- NAVIGATION SIDE START -->
    <div class="col-lg-2 bg-light text-primary p-4 sticky-lg-top">

      <!-- START : Navbar Header (Logo + Title) -->
      <div class="d-flex align-items-center gap-3">
        <img src="./msf-favi.png" width="45px">
        <div>
          <h6>MSF</h6>
          <h1 class="fs-3">لوحة التحكم</h1>
        </div>
      </div>
      <!-- END : Navbar Header (Logo + Title) -->


      <!-- START : Search Box -->
      <form>
        <div class="d-flex mt-2">
          <input type="text" class="form-control bg-transparent"
            placeholder="ابحث عن اسم، رقم الهاتف، رقم الراميد، رقم ب و ...">
        </div>
      </form>
      <!-- END : Search Box -->


      <hr class="mt-4">


      <!-- START : Quick Actions -->
      <h6 class="text-center"><small>إجراءات سريعة</small></h6>
      <a class="btn border-primary text-primary w-100" href="{{ route('familles.create') }}">إضافة عائلة جديدة</a>
      <a class="btn border-primary text-primary w-100 mt-2" href="{{ route('orphelins.create') }}">إضافة يتيم جديد</a>
      <!-- END : Quick Actions -->


      <hr class="my-4">


      <!-- Navigation Links Start -->
      <div class="d-flex flex-column gap-2">
        <a class="p-1 rounded text-decoration-none px-3 py-2 {{ request()->routeIs('typesCas.*') ? 'bg-primary text-white' : '' }}" href="{{ route('typesCas.index') }}">
          <ion-icon name="pricetags"></ion-icon>
          أنواع الحالات
        </a>
        <a class="p-1 rounded text-decoration-none px-3 py-2 {{ request()->routeIs('familles.*') ? 'bg-primary text-white' : '' }}" href="{{ route('familles.index') }}">
          <ion-icon name="people"></ion-icon>
          لائحة العائلات
        </a>
        <a class="p-1 rounded text-decoration-none px-3 py-2 {{ request()->routeIs('orphelins.*') ? 'bg-primary text-white' : '' }}" href="{{ route('orphelins.index') }}">
          <ion-icon name="person"></ion-icon>
          لائحة الأيتام
        </a>
        <a class="p-1 rounded text-decoration-none px-3 py-2 {{ request()->routeIs('donateurs.*') ? 'bg-primary text-white' : '' }}" href="">
          <ion-icon name="heart"></ion-icon>
          لائحة الكافلين
        </a>
        <a class="p-1 rounded text-decoration-none px-3 py-2 {{ request()->routeIs('zones.*') ? 'bg-primary text-white' : '' }}" href="">
          <ion-icon name="location"></ion-icon>
          المناطق والمواقع
        </a>
        <a class="p-1 rounded text-decoration-none px-3 py-2 {{ request()->routeIs('blacklist.*') ? 'bg-primary text-white' : '' }}" href="{{ route('blacklist.index') }}">
          <ion-icon name="ban"></ion-icon>
          اللائحة السوداء
        </a>
      </div>
      <!-- Navigation Links End -->


    </div>
    <!-- NAVIGATION SIDE END -->
    <!-- =================== -->



    <!-- ================== -->
    <!-- MAIN CONTENT START -->
    <div class="col-lg-10 p-4 text-primary">
      @yield('mainContent')
    </div>

    <!-- MAIN CONTENT END -->
    <!-- ================ -->

  </div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <!-- IonIcons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>