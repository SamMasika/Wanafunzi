<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     <link rel="stylesheet"  href="{{asset('css/style.css')}}">
  
    <title>Student Management System</title>
  </head>
  <body>
  @include("navbar") 

     <div class="row header-container justify-content-center">
         <div class="header">
             <h1>Student Management System</h1>
         </div>
     </div>

  @if($layout=='index')
  <div class="container-fluid mt-4">
      <div class="row">
      <section class="col">
          @include("studentslist")
      </section>
      <section class="col"></section>
      </div>
  </div>
  @elseif($layout=='create')
  <div class="container-fluid mt-4">
      <div class="row">
        <section class="col">
            @include("studentslist")
        </section>
        <section class="col">
        <div class="card mb-3">
  <img src="https://acrobat.adobe.com/content/dam/dx-dc/us/en/sign/esignature-resources/w9-form/desktop/IRS-W9-Form_P4_720x446.jpg.img.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Enter the informations of the new student</h5>
    <form action="{{url('/store')}}" method="post">
         @csrf
        <div class="form-group">
            <label>CNE</label>
            <input type="text" name="cne" class="form-control" placeholder="Enter cne">
        </div>
        <div class="form-group">
            <label>Firstname</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter the Firstname">
        </div>
        <div class="form-group">
            <label>Lastname</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter the lastname">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" name="age" class="form-control" placeholder="Enter the age">
        </div>
        <div class="form-group">
            <label>Speciality</label>
            <input type="text" name="speciality" class="form-control" placeholder="Enter the speciality">
        </div>
            <input type="submit" class="btn btn-info" value="Save">
            <input type="reset" class="btn btn-warning" value="Reset">
        </form>
       </div>
    </div>
    
     </section>
        </div>
  </div>
  @elseif($layout=='show')
  <div class="container-fluid mt-4">
      <div class="row">
      <section class="col">
          @include("studentslist")
      </section>
      <section class="col"></section>
  </div>
  </div>
  @elseif($layout=='edit')
  <div class="container-fluid mt-4">
      <div class="row">
      <section class="col">
          @include("studentslist")
      </section><section class="col">
      <div class="card mb-3">
  <img src="https://marketingplatform.vivial.net/sites/default/files/inline_images/lewisburg-pa-tax-preparation%20(2).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update student's informations</h5>
    <form action="{{url('/update/'.$student->id)}}" method="post">
         @csrf
        <div class="form-group">
            <label>CNE</label>
            <input type="text" value="{{$student->cne}}" name="cne" class="form-control" placeholder="Enter cne">
        </div>
        <div class="form-group">
            <label>Firstname</label>
            <input type="text" value="{{$student->firstname}}" name="firstname" class="form-control" placeholder="Enter the Firstname">
        </div>
        <div class="form-group">
            <label>Lastname</label>
            <input type="text" value="{{$student->lastname}}" name="lastname" class="form-control" placeholder="Enter the lastname">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" value="{{$student->age}}" name="age" class="form-control" placeholder="Enter the age">
        </div>
        <div class="form-group">
            <label>Speciality</label>
            <input type="text" value="{{$student->speciality}}" name="speciality" class="form-control" placeholder="Enter the speciality">
        </div>
            <input type="submit" class="btn btn-info" value="Update">
            <input type="reset" class="btn btn-warning" value="Reset">
</form>
  </div>
</div>
      
      </section>
      </div>
  </div>
  @endif
<footer></footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>