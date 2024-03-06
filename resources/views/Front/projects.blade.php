<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">آهنگ های اخیر</h2>
            </div>



@if(isset($musics))
    @foreach($musics as $music)

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="{{$music->id}}" data-wow-delay="0.{{$music->id%10}}s">
                        <div class="portfolio-thumb " style="  margin: 10%;  ">
                            <img style="border-radius: 20%;  width: 100%;" src="{{asset('storage/post/'.$music->id.'/'.$music->pic)}}" class="img-responsive" >
                            <div class="portfolio-overlay"style="  border-radius: 20%;  text-align: center;">
                                <h4>{{$music->title}}</h4>
                                <p>{{$music->visit}} - دانلود</p>
                                <a href="{{route('post.show' , $music->id)}}" class="btn btn-default">بیشتر..</a>
                            </div>
                        </div>


                    </div>

                @endforeach
@endif

        </div>
    </div>
</section>
