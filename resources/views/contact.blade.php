@extends('layouts.web')

@section('title', 'Contact')

@push('styles')
<link rel="stylesheet" href="{{ asset('js/form/sky-forms2.css') }}" type="text/css" media="all">
@endpush

@section('content')
<div class="clearfix"></div>

<div class="page_title2">
<div class="container">
	
    <h1>{{ trans('contact.contactTitle') }}</h1>
    <div class="pagenation">&nbsp;<a href="{{ route('home')}}">Home</a> <i>/</i> {{ trans('contact.contactMenu') }} </div>
    
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="content_fullwidth">

<div class="container">
	
    <div class="one_half">
      
        <p>{{ trans('contact.explanation') }}</p>
        <br />
        <p>{{ trans('contact.support') }} <strong>{{ trans('contact.supportBlack') }}</strong></p>
        <br /><br />
        
        <div class="cforms">
        
        <form action="demo-contacts.php" method="post" id="sky-form" class="sky-form">
          <header>{{ trans('contact.contact') }} <strong>{{ trans('contact.form') }}</strong></header>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="label">{{ trans('contact.name') }}</label>
                <label class="input"> <i class="icon-append icon-user"></i>
                  <input type="text" name="name" id="name">
                </label>
              </section>
              <section class="col col-6">
                <label class="label">{{ trans('contact.mailForm') }}</label>
                <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                  <input type="email" name="email" id="email">
                </label>
              </section>
            </div>
            <section>
              <label class="label">{{ trans('contact.subject') }}</label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                <input type="text" name="subject" id="subject">
              </label>
            </section>
            <section>
              <label class="label">{{ trans('contact.message') }}</label>
              <label class="textarea"> <i class="icon-append icon-comment"></i>
                <textarea rows="4" name="message" id="message"></textarea>
              </label>
            </section>
            <section>
              <label class="checkbox">
                <input type="checkbox" name="copy" id="copy">
                <i></i>{{ trans('contact.copy') }}</label>
            </section>
          </fieldset>
          <footer>
            <button type="submit" class="button">{{ trans('contact.send') }}</button>
          </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>{{ trans('contact.send') }}</p>
          </div>
        </form>
        
        </div>
        
      </div>
      
      <div class="one_half last">
      
        <div class="address_info">
        
          <h4>{{ trans('contact.company') }} <strong>{{ trans('contact.addressBlack') }}</strong></h4>
          <ul>
            <li> <strong>{{ trans('contact.companyName') }}</strong><br />
              {{ trans('contact.address') }}<br />
              {{ trans('contact.phone') }}<br />
              {{ trans('contact.fax') }}<br />
              {{ trans('contact.mail') }} <a href="mailto:mail@companyname.com">{{ trans('contact.mailHref') }}</a><br />
              {{ trans('contact.website') }} <a href="index.html">{{ trans('contact.web') }}</a> </li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <h4>{{ trans('contact.find') }} <strong>{{ trans('contact.map') }}</strong></h4>


        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49208.66213843943!2d2.6457356243078407!3d39.56994739481462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12979259c61ac757%3A0xc40d5406c3d058c6!2sPalma+de+Mallorca%2C+Islas+Baleares!5e0!3m2!1ses!2ses!4v1522161314156" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49208.66213843943!2d2.6457356243078407!3d39.56994739481462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12979259c61ac757%3A0xc40d5406c3d058c6!2sPalma+de+Mallorca%2C+Islas+Baleares!5e0!3m2!1ses!2ses!4v1522161314156">View Larger Map</a></small>
        </div>
</div>
</div><!-- end content area -->
@endsection
