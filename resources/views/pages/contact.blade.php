@extends('pages.layouts1')
@section('body-section')
        <div>
        	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14523.868361362094!2d54.3596453!3d24.4865971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27f86f27f04b128!2sLRB%20INFO%20TECH%20(Best%20Website%20Design%20%7C%20Web%20Development%20%7C%20Mobile%20Application%20Development%20%7C%20Digital%20Marketing%20%7C%20Ecommerce%20%7C%20SEO%20%7C%20IT%20%7C%20Company%20in%20abu%20dhabi%20%7C%20UAE%20)!5e0!3m2!1sen!2sin!4v1598954428129!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div> <!-- /.falt-map -->

        <div class="content-wrap contact-v2-page">
            <div class="flat-spacer clearfix" data-desktop="30" data-mobile="30" data-smobile="30" ></div>
            <div class="container clearfix">
                <div class="flat-contact-us contact-v2-page">
                    <div class="flat-iconbox v1 style2 fix-float-box">
                        <div class="iconbox style2 one-of-three">
                            <div class="iconbox-border">
                                <div class="iconbox-icon">
                                    <span class="icon_pin_alt"></span>
                                </div>
                                <div class="iconbox-content text-center">
                                    <a href="#" class="hover-text"><p>Office no 5, old UAE Exchange Building (opposite to Du Office Hamdan Street Abu dhabi - Abu Dhabi - United Arab Emirates</p></a>
                                </div>
                            </div>
                        </div> <!-- /.iconbox -->

                        <div class="iconbox style2  one-of-three">
                            <div class="iconbox-border">
                                <div class="iconbox-icon">
                                    <span class="icon_mobile"></span>
                                </div>
                                <div class="iconbox-content text-center">
                                    <a href="#" class="hover-text"><p>+971 56 710 0733</p></a>
                                    <a href="#" class="hover-text"><p>+971 56 710 0733</p></a>
                                </div>
                            </div>
                        </div> <!-- /.iconbox -->

                        <div class="iconbox style2 one-of-three">
                            <div class="iconbox-border">
                                <div class="iconbox-icon">
                                    <span class="icon_mail_alt"></span>
                                </div>
                                <div class="iconbox-content text-center">
                                    <a href="#" class="hover-text"><p>contact@lrbinfotech.com</p></a>
                                    <a href="#" class="hover-text"><p>support@lrbinfotech.com</p></a>
                                </div>
                            </div>
                        </div> <!-- /.iconbox -->
                    </div>
                </div>
                <div class="flat-form-contact contact-v2-page">
                    <div class="flat-spacer clearfix" data-desktop="70" data-mobile="70" data-smobile="70" ></div>
                    <form action="#" id="contact-form">
                        {{csrf_field()}}
                        <div class="wrap-input-all clearfix">
                            <div class="wrap-input one-of-two pd-right-10">
                                <input type="text" name="name" placeholder="Name" required="">
                            </div>

                            <div class="wrap-input one-of-two pd-left-10">
                                <input type="text" name="subject"   required="" placeholder="Subject">
                            </div>

                            <div class="wrap-input one-of-two pd-right-10">
                                <input type="email" name="email"  required="" placeholder="Email">
                            </div>

                            <div class="wrap-input one-of-two pd-left-10">
                                <input type="text" name="phone"  required="" placeholder="Phone">
                            </div>
                        </div>
                        <div class="wrap-textarea">
                           <textarea name="message" required="" placeholder="Messages"></textarea>
                        </div>
                        <div class="wrap-btn text-center">
                            <button onclick="Send()" class="btn-effect btn-message" type="submit">Send messages</button>
                        </div>
                    </form>
                </div>
            </div> <!-- /.container -->
            <div class="flat-spacer clearfix" data-desktop="100" data-mobile="60" data-smobile="60" ></div>
        </div> <!-- /.content-wrap -->

        <section class="flat-contact v1 clearfix">
            <div class="container">
                <div class="wrap-text">
                    <h3 class="title"><a href="#">Have you question or need any help for work consulant?</a></h3>
                </div>
                <div class="wrap-btn text-right">
                    <a href="#" class="flat-button btn-contact bg-contact">Contact us</a>
                </div>
            </div> <!-- /.container -->
        </section> <!-- /.flat-contact -->
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>     
    function Send(){
        var termsData = new FormData(jQuery('#contact-form')[0]);
        jQuery.ajax({
        url : '/contact-mail',
        type: "POST",
        data: termsData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {
          console.log(data);                
          jQuery("#contact-form")[0].reset();
          toastr.success('Mail Send Successfully', 'Successfully Send');
        },
        error: function (data, errorThrown) {
                var errorData = data.responseJSON.errors;
              jQuery.each(errorData, function(i, obj) {
                  toastr.error(obj[0]);
              });
            }
      });
    }
    jQuery('.contact_page').addClass('top-menu__menu-link_active');
    </script>
 @endsection