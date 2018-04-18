@extends('layouts.web')

@section('title', 'Contact')
@section('content')

<div class="clearfix"></div>

@if(!$area->getMedia()->isEmpty())
<div class="full_biohead" style="background:url('{{ $area->getMedia()->getUrl('thumb-single-practice-area') }}') no-repeat center top">
@endif
<div class="container">

</div>
</div><!-- end full info head -->

<div class="clearfix"></div>

<div class="container tbp">
    <div class="row">
        <div class="col-sm-8">
            <div class="clearfix"></div>
            
                <h3>{{ $area->title }}</h3>
            
                <p class="big_text3">{{ $area->description }}</p>
            </div>
        <div class="col-sm-4">
            <h3>Pide presupuesto para {{ $area->title }}</h3>
            <div class="cforms">
        
                <form action="demo-contacts.php" method="post" id="sky-form" class="sky-form">
                    <br/>
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
    </div>
</div><!-- end content area -->

<div class="clearfix"></div>


@endsection