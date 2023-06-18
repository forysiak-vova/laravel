@extends('layouts.app')

@section('content')

<!-- Contact Section-->
<section class="masthead page-section" id="contact">
   <div class="container">
      <!-- Contact Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj klienta</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
      </div>
      <!-- Contact Section Form-->
      <div class="row justify-content-center">
         <div class="col-lg-8 col-xl-7">
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            @if($errors->any())
            <div class="after after-danger">
               <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            <form action="{{ route('customers.store') }}" method="POST" name="submit">
               {{csrf_field() }}
               <!-- Name input-->
               <div class="form-floating mb-3">
                  <input class="form-control" value="{{ old( 'name') }}" id="name" name="name" type="text" placeholder="Nazwa" />
                  <label for="name">Nazwa klienta</label>
                  <div class="invalid-feedback">A name is required.</div>
               </div>
               <!-- Email address input-->
               <div class="form-floating mb-3">
                  <input class=" form-control" value="{{ old( 'adress') }}" id="adress" name="adress" type="text" placeholder="Adress klienta" />
                  <label for="email">Adress</label>
                  <div class="invalid-feedback">An email is required.</div>
                  <div class="invalid-feedback">Email is not valid.</div>
               </div>
               <!-- Phone number input-->
               <div class="form-floating mb-3">
                  <input class="form-control" value="{{ old( 'nip') }}" id="nip" name="nip" type="text" placeholder="nip" />
                  <label for="phone">Nip</label>
                  <div class="invalid-feedback">A phone number is required.</div>
               </div>
               <!-- Submit Button-->
               <button class="btn btn-primary btn-xl" type="submit">Dodaj klienta</button>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection