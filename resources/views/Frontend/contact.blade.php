
<section id="contact">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"> <span>تماس با من</span></h2>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                <address>
                    <p class="address-title">ارتباط با من</p>
                    <span>خوشحال میشم با هم در ارتباط باشیم</span>
                    <p><i class="fa fa-phone"></i><a dir="ltr" href="tel:+98 912 033 7100">+98 912 033 7100</a></p>
                    <p><i class="fa fa-envelope-o"></i><a href="mailto:vorna.soft@gmail.com">vorna.soft@gmail.com</a></p>
                </address>
                <ul class="social-icon">
                    <li><h4> من را در شبکه های مجازی دنبال کنید</h4></li>
                    <li><a href="https://www.youtube.com/channel/UCN-iEIDwxbUSss_wYNefvWg" class="fa fa-youtube"></a></li>
                    <li><a href="https://twitter.com/VornaCompany" class="fa fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/vorna.co/" class="fa fa-instagram"></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                <!-- start errors-->
            @include('layouts.errors')
            <!-- end errors -->
                <form class="form-horizontal" method="post" action="#">

                    {{ csrf_field()  }}
                    <div class="form-group">
                        <label for="fullName" class="col-sm-2 control-label">نام شما :</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fullName" id="fullName"  value="{{ old('full_name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ایمیل :</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="inputEmail3" value="{{ old('email') }}">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">شماره تماس :</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" id="phone"  value="{{ old('phone') }}">
                        </div>
                    </div>     <div class="form-group">
                        <label for="subject" class="col-sm-2 control-label">موضوع پیام :</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subject" id="subject"  value="{{ old('subject') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="msg" class="col-sm-2 control-label">متن پیام  :</label>
                        <div class="col-sm-10">
                                  <textarea class="form-control" name="msg" id="msg"
                                            rows="10">{{old('msg')}}</textarea>
                        </div>
                    </div>


                    <div class="form-group ">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success pull-right">ارسال پیام</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
