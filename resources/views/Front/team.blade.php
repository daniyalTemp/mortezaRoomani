<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">

                    دل نوشته های
                    <span>                    اخیر من </span>

                </h2>
            </div>



@if(isset($texts))
    @foreach($texts as $text)
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="{{$text->id}}" data-wow-delay="0.{{$text->id%10}}s">
                        <div class="team-wrapper" style="border-radius: 15px;">
                            <img style=" border-radius: 10%; width: 100%;" src="{{asset('storage/post/'.$text->id.'/'.$text->pic)}}" class="img-responsive" alt="team img 3">
                            <div class="team-des">
                                <h4>{{$text->title}}</h4>
                                @if($text->type=='music')
                                    <span>ترانه</span>
                                @endif   @if($text->type=='poem')
                                    <span>شعر</span>
                                @endif   @if($text->type=='text')
                                    <span>دل نوشته</span>
                                @endif


                                <p>
                                    {{\Illuminate\Support\Str::limit($text->text , 70)}}

                                </p>
                                <a href="{{route('post.show' , $text->id)}}" style="border-radius: 10px; background-color: #3b474aa1;" class="btn btn-info btn-block">بیشتر..</a>

                            </div>
                        </div>
                    </div>
    @endforeach
@endif



        </div>
    </div>
</section>
