@extends('layouts.app')

@section('content')

<!-- Contact Section-->
<section class="masthead page-section" id="contact">
   <div class="container">
      <!-- Contact Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj klienta {{$customer->id}}</h2>
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
            <form action="{{ route('customers.update', ['klienci' => $customer->id]) }}" method="POST" name="submit">
               {{csrf_field() }}
               @method('PUT')
               <!-- Name input-->
               <div class="form-floating mb-3">
                  <input value="{{ $customer->name }}" class="form-control" id="name" name="name" type="text" placeholder="name" />
                  <label for="name">Nazwe klienta</label>
                  <div class="invalid-feedback">A name is required.</div>
               </div>
               <!-- Email address input-->
               <div class="form-floating mb-3">
                  <input value="{{ $customer->adress }}" class="form-control" id="adress" name="adress" type="text" placeholder="adress" />
                  <label for="email">Adress</label>
                  <div class="invalid-feedback">An email is required.</div>
                  <div class="invalid-feedback">Email is not valid.</div>
               </div>
               <!-- Phone number input-->
               <div class="form-floating mb-3">
                  <input value="{{ $customer->nip   }}" class="form-control" id="nip" name="nip" type="text" placeholder="Nip" />
                  <label for="phone">Nip</label>
                  <div class="invalid-feedback">A phone number is required.</div>
               </div>
               <!-- Submit Button-->
               <button class="btn btn-primary btn-xl" type="submit">Zapisz dane klienta</button>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection