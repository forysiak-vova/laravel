@extends('layouts.app')

@section('content')

<!-- Contact Section-->
<section class="masthead page-section" id="contact">
   <div class="container">
      <!-- Contact Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj fakture</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
      </div>
      <!-- Contact Section Form-->
      <div class="row justify-content-center">
         <div class="col-lg-8 col-xl-7">
            <form action="{{ route('invoices.store') }}" method="POST" name="submit">
               {{csrf_field() }}

               @if($errors->any())
               <div class="after after-danger">
                  <ul>
                     @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               <div class="form-floating mb-3">
                  <select name="customer" style="padding: 0.5rem 1rem " class="form-select" aria-label="Default select example">
                     <option selected>Wybierz...</option>
                     @foreach(\App\Models\Customer::all() as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                     @endforeach
                  </select>

               </div>
               <div class="form-floating mb-3">
                  <input value="{{ old( 'number') }}" class="form-control" id="number" name="number" type="text" placeholder="Enter your name..." />
                  <label for="name">Numer faktury</label>
                  <div class="invalid-feedback">A name is required.</div>
               </div>
               <!-- Email address input-->
               <div class="form-floating mb-3">
                  <input value="{{ old( 'data') }}" class="form-control" id="data" name="data" type="text" placeholder="name@example.com" />
                  <label for="email">Data wystawienia</label>
                  <div class="invalid-feedback">An email is required.</div>
                  <div class="invalid-feedback">Email is not valid.</div>
               </div>
               <!-- Phone number input-->
               <div class="form-floating mb-3">
                  <input value="{{ old( 'total') }}" class="form-control" id="total" name="total" type="text" placeholder="(123) 456-7890" />
                  <label for="phone">kwota</label>
                  <div class="invalid-feedback">A phone number is required.</div>
               </div>
               <!-- Submit Button-->
               <button class="btn btn-primary btn-xl" type="submit">Send</button>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection