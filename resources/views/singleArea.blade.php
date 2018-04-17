@extends('layouts.web')

@section('title', 'Contact')
@section('content')

<div class="clearfix"></div>


<div class="full_biohead">
<div class="container">

</div>
</div><!-- end full info head -->

<div class="clearfix"></div>

<div class="container tbp">
    <div class="row">
        <div class="col-sm-8">
            <div class="clearfix"></div>
            
                <h3>Professional Experience</h3>
            
                <p class="big_text3">Established fact that a reader will be distracted by the readable content of a page when looking at its layout. <strong class="color2 sb">The point of using Lorem Ipsum</strong> is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                <br />
                <p class="big_text3">There are many variations of passages of Lorem Ipsum available, but the <strong class="color2 sb">alteration have suere</strong> majority in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
            </div>
        <div class="col-sm-4">
            <h3>Pide presupuesto para "sobre esta area"</h3>
            <form action="demo-contacts.php" method="post" id="sky-form" class="sky-form">
                <fieldset>
                    <div class="row">
                    
                    <div class="col col-4">
                        <label class="label"><strong>Your Name*</strong></label>
                        <label class="input"> <i class="icon-append icon-user"></i>
                        <input type="text" name="name" id="name">
                        </label>
                    </div>
                    
                    <div class="col col-4">
                        <label class="label"><strong>Your E-mail*</strong></label>
                        <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                        <input type="email" name="email" id="email">
                        </label>
                    </div>
                    
                                
                    <div class="col col-4">
                    <label class="label"><strong>Phone Number</strong></label>
                    <label class="input"> <i class="icon-append icon-tag"></i>
                        <input type="text" name="subject" id="subject">
                    </label>
                    </div>
                    
                    </div>
                    
                    <br />
                    
                    <div>
                    <label class="label"><strong>Message*</strong></label>
                    <label class="textarea"> <i class="icon-append icon-comment"></i>
                        <textarea rows="5" name="message" id="message"></textarea>
                    </label>
                    </div>
                    
                </fieldset>
                <footer>
                    <button type="submit" class="subbutton">Submit Your Message</button>
                </footer>
                <div class="message"> <i class="icon-ok"></i>
                    <p>Your message was successfully sent!</p>
                </div>
            </form>
        </div>
    </div>
</div><!-- end content area -->

<div class="clearfix"></div>


@endsection