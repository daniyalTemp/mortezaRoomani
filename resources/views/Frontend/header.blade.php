<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <p><i class="fa fa-phone"></i><span> Phone :</span><a href="tel:"{{$config->phone}}>{{$config->phone}}</a></p>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <p><i class="fa fa-envelope-o"></i><span> Email :</span><a href="mailto:"{{$config->email}}>{{$config->email}}</a></p>
            </div>
            <div class="col-md-5 col-sm-4 col-xs-12" >
                <ul class="social-icon">
                    <li><span>Meet us on</span></li>
                    <li><a href="https://t.me/{{$config->telegram}}" class="fa fa-paper-plane"></a></li>
                    <li><a href="https://www.instagram.com/{{$config->instagram}}" class="fa fa-instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
