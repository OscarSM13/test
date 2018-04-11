@extends('layouts.web')

@section('title', 'Contact')

@push('styles')
<link rel="stylesheet" href="{{ asset('js/form/sky-forms2.css') }}" type="text/css" media="all">
@endpush

@section('content')
<div class="clearfix"></div>

<div class="page_title2">
<div class="container">
	
    <h1>CONTACT</h1>
    <div class="pagenation">&nbsp;<a href="{{ route('home')}}">Home</a> <i>/</i> Contact </div>
    
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="content_fullwidth">

<div class="container">
	
    <div class="one_half">
      
        <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
        <br />
        <p>Please be patient while waiting for response. (24/7 Support!) <strong>Phone General Inquiries: 1-888-123-4567-8900</strong></p>
        <br /><br />
        
        <div class="cforms">
        
        <form action="demo-contacts.php" method="post" id="sky-form" class="sky-form">
          <header>Contact <strong>Form</strong></header>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="label">Name</label>
                <label class="input"> <i class="icon-append icon-user"></i>
                  <input type="text" name="name" id="name">
                </label>
              </section>
              <section class="col col-6">
                <label class="label">E-mail</label>
                <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                  <input type="email" name="email" id="email">
                </label>
              </section>
            </div>
            <section>
              <label class="label">Subject</label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                <input type="text" name="subject" id="subject">
              </label>
            </section>
            <section>
              <label class="label">Message</label>
              <label class="textarea"> <i class="icon-append icon-comment"></i>
                <textarea rows="4" name="message" id="message"></textarea>
              </label>
            </section>
            <section>
              <label class="checkbox">
                <input type="checkbox" name="copy" id="copy">
                <i></i>Send a copy to my e-mail address</label>
            </section>
          </fieldset>
          <footer>
            <button type="submit" class="button">Send message</button>
          </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>Your message was successfully sent!</p>
          </div>
        </form>
        
        </div>
        
      </div>
      
      <div class="one_half last">
      
        <div class="address_info">
        
          <h4>Company <strong>Address</strong></h4>
          <ul>
            <li> <strong>Company Name</strong><br />
              2901 Marmora Road, Glassgow, Seattle, WA 98122-1090<br />
              Telephone: +1 1234-567-89000<br />
              FAX: +1 0123-4567-8900<br />
              E-mail: <a href="mailto:mail@companyname.com">mail@companyname.com</a><br />
              Website: <a href="index.html">www.yoursitename.com</a> </li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <h4>Find the <strong>Address</strong></h4>

        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49208.66213843943!2d2.6457356243078407!3d39.56994739481462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12979259c61ac757%3A0xc40d5406c3d058c6!2sPalma+de+Mallorca%2C+Islas+Baleares!5e0!3m2!1ses!2ses!4v1522161314156" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49208.66213843943!2d2.6457356243078407!3d39.56994739481462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12979259c61ac757%3A0xc40d5406c3d058c6!2sPalma+de+Mallorca%2C+Islas+Baleares!5e0!3m2!1ses!2ses!4v1522161314156">View Larger Map</a></small>
        </div>
</div>
</div><!-- end content area -->
@endsection
