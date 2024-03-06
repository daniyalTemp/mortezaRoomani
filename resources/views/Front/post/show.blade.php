@extends('layouts.frontendlayout')

@section('content')

    <!-- start notification -->
    @include('layouts.notifications')
    <!-- end notification -->




    <section id="contact">


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{$post->title}}</h4>
                        </div>
                        <div class="card-body">

                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <div class="well" style="  background-color: #23262EC4;">{{$post->text}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">

                    <div class="card ">

                        <div class="card-body text-center">
                            @if(isset($post))
                                <img class="img-fluid rounded-circle" style="border-radius: 25%;"
                                     src="{{asset('storage/post/'.$post->id.'/'.$post->pic)}}">

                            @else
                                <img class="img-fluid rounded-circle" src="{{asset('images/profile/profile.png')}}">
                            @endif

                        </div>
                        <div class="card-body text-center">
                            @if(isset($post) && $post->type=='music')

                                <a href="{{route('post.download', $post->id)}}"
                                   style="  margin-top: 15%;" type="button"
                                   class="btn btn-rounded btn-secondary"> دانلود آهنگ <span
                                        class="btn-icon-right"><i class="fa fa-download"></i></span>
                                </a>

                                <a href="{{route('post.download', $post->id)}}"
                                   style="  margin-top: 15%;border-radius: 15px;" type="button"
                                   class="btn btn-info btn-rounded">{{$post->links}}<span class="btn-icon-right"><i
                                            class="fa fa-download"></i></span>
                                </a>
                                <button
                                   style="  margin-top: 15%;border-radius: 15px;" type="button"
                                   class="btn btn-info btn-rounded">
                                    <span class="btn-icon-right"><i
                                            class="fa fa-download"></i></span>
                                    {{$post->visit}} بار دانلود شده
                                </button>

                            @endif

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>









    <!-- start contact -->
    @include('Front.contact')
    <!-- end contact -->

    <!-- start copyright -->
    @include('Front.footer')
    <!-- end copyright -->
@endsection
