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
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form action="{{ route('invoices.store') }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
               {{csrf_field() }}
               <!-- Name input-->
               <div class="form-floating mb-3">
                  <input class="form-control" id="number" name="number" type="text" placeholder="Enter your name..." />
                  <label for="name">Numer faktury</label>
                  <div class="invalid-feedback">A name is required.</div>
               </div>
               <!-- Email address input-->
               <div class="form-floating mb-3">
                  <input class="form-control" id="data" name="data" type="text" placeholder="name@example.com" />
                  <label for="email">Data wystawienia</label>
                  <div class="invalid-feedback">An email is required.</div>
                  <div class="invalid-feedback">Email is not valid.</div>
               </div>
               <!-- Phone number input-->
               <div class="form-floating mb-3">
                  <input class="form-control" id="total" name="total" type="text" placeholder="(123) 456-7890" />
                  <label for="phone">kwota</label>
                  <div class="invalid-feedback">A phone number is required.</div>
               </div>
               <!-- Message input-->
               <div class="form-floating mb-3">
                  <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                  <label for="message">Message</label>
                  <div class="invalid-feedback">A message is required.</div>
               </div>
               <!-- Submit success message-->
               <!---->
               <!-- This is what your users will see when the form-->
               <!-- has successfully submitted-->
               <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">
                     <div class="fw-bolder">Form submission successful!</div>
                     To activate this form, sign up at
                     <br />
                     <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                  </div>
               </div>
               <!-- Submit error message-->
               <!---->
               <!-- This is what your users will see when there is-->
               <!-- an error submitting the form-->
               <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
               </div>
               <!-- Submit Button-->
               <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection