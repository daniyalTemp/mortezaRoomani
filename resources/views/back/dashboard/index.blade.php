@extends('back.layout.main')


@section('content')

    <div class="row">
        <div class="col-xl-9 col-xxl-12">
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body  p-4">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-book"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">کل پست ها</p>
                                    <h3 class="text-white">{{$statistics['posts']}}</h3>
                                    <div class="progress mb-2 bg-secondary">
                                        <div class="progress-bar progress-animated bg-light" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body p-4">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-music"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">آهنگ ها</p>
                                    <h3 class="text-white">{{$statistics['musics']}}</h3>
                                    <div class="progress mb-2 bg-primary">
                                        <div class="progress-bar progress-animated bg-light"
                                             style="width: {{($statistics['musics']/$statistics['posts'])*100}}%"></div>
                                    </div>
                                    <small>{{intval(($statistics['musics']/$statistics['posts'])*100)}}% پست ها </small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body p-4">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-newspaper"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">دل نوشته ها</p>
                                    <h3 class="text-white">{{$statistics['texts']}}</h3>
                                    <div class="progress mb-2 bg-primary">
                                        <div class="progress-bar progress-animated bg-light"
                                             style="width: {{($statistics['musics']/$statistics['posts'])*100}}%"></div>
                                    </div>
                                    <small>{{intval(($statistics['texts']/$statistics['posts'])*100)}}% پست ها </small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body p-4">
                            <div class="media">
									<span class="mr-3">
										<i class="la la-sticky-note"></i>
									</span>
                                <div class="media-body text-white">
                                    <p class="mb-1">شعر ها</p>
                                    <h3 class="text-white">{{$statistics['poems']}}</h3>
                                    <div class="progress mb-2 bg-primary">
                                        <div class="progress-bar progress-animated bg-light"
                                             style="width: {{($statistics['musics']/$statistics['posts'])*100}}%"></div>
                                    </div>
                                    <small>{{intval(($statistics['poems']/$statistics['posts'])*100)}}% پست ها </small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-12">
            <div class="card overflow-hidden">
                <div class="card-header pb-0 border-0">
                    <h4 class="card-title">آهنگ های پر دانلود</h4>
                </div>
                <div class="card-body">
                    <div class="widget-media">
                        <ul class="timeline">
                            @foreach($statistics['hotPosts'] as $hotMusic)
                                <li>

                                    <div class="timeline-panel">
                                        <div class="media mr-2">
                                            <img alt="image" width="50"
                                                 src="{{asset('storage/post/'.$hotMusic->id.'/'.$hotMusic->pic)}}">
                                        </div>
                                        <div class="media-body">
                                            <a target="_blank" href="{{route('post.show' , $hotMusic->id)}}">
                                                <h5 class="mb-1">

                                                    {{$hotMusic->title}}
                                                </h5>
                                            </a>
                                            <small
                                                class="d-block">{{verta($hotMusic->created_at)->format('%B %d، %Y')}}</small>
                                            <small
                                                class="d-block">{{$hotMusic->visit}}  بار دانلود </small>
                                        </div>

                                    </div>
                                </li>

                            @endforeach

                        </ul>
                    </div>
                </div>
                <canvas id="lineChart_3Kk"></canvas>
            </div>


        </div>
        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <h4 class="card-title">پیام های جدید </h4>
                </div>
                <div class="card-body">
                    <div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1" style="height:250px;">
                        <ul class="timeline">
                            @if(isset($contacts) && count($contacts)>0)

                                @foreach($contacts as $contact)
                                    <li>
                                        <div class="timeline-badge primary"></div>
                                        <a class="timeline-panel text-muted" data-toggle="modal" data-target="#show{{$contact->id}}">
                                            <span>



                                                @if(verta($contact->created_at)->diffDays() > 0)
                                                    {{verta($contact->created_at)->diffDays()}}   روز
                                                    و
                                                @endif
                                                @if(verta($contact->created_at)->diffHours()%24 > 0)
                                                        {{verta($contact->created_at)->diffHours()%24}} ساعت
                                                        و
                                                @endif
                                                @if(verta($contact->created_at)->diffMinutes()%60 > 0)
                                                        {{verta($contact->created_at)->diffMinutes()%60}} دقیقه قبل

                                                @endif





                                            </span>
                                            <h6 class="mb-0">{{$contact->name}} - <strong
                                                    class="text-primary">{{$contact->title}}</strong>.</h6>
                                        </a>
                                    </li>

                                    <!-- Modal -->
                                    <div class="modal fade" id="show{{$contact->id}}">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">پیام {{$contact->name}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-xl-12 col-lg-12 col-sm-12">
                                                        <div class="card overflow-hidden">

                                                            <div class="card-body">
                                                                <div class="row text-center">
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-3">
                                                                            <h4 class="mb-0">{{$contact->title}}</h4>
                                                                            <small>موضوع پیام</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="bgl-primary rounded p-3">
                                                                            <h4 class="mb-0">{{$contact->phone}}</h4>
                                                                            <small>تلفن همراه</small>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="card-footer mt-0 text-center">
                                                                <div class="col-12">
                                                                    <div class="bgl-primary rounded p-3">
                                                                        <h4 class="mb-0">{{$contact->text}}</h4>
                                                                        <small> متن پیام</small>
                                                                    </div>
                                                                </div>                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark light" data-dismiss="modal">
                                                        بستن
                                                    </button>
                                                    <a href="{{route('dashboard.contact.seen' , $contact->id)}}"
                                                       class="btn btn-success">خوانده شده</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else

                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <div class="widget-stat card bg-secondary">
                                        <div class="card-body p-4">
                                            <div class="media">
									<span class="mr-3">
										<i class="la la-ban"></i>
									</span>
                                                <div class="media-body text-white">
                                                    <p class="mb-1">پیام جیدیدی ندارید</p>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <h4 class="card-title">نوشته های پر بازدید</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-sm mb-0">
                            <thead>
                            <tr>

                                <th><strong>عنوان</strong></th>
                                <th><strong>بازدید </strong></th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($statistics['hotPosts'] as $hotPost)
                                <tr>


                                    <td><a  target="_blank" href="{{route('post.show', $hotPost->id)}}">{{$hotPost->title}}</a></td>
                                    <td>{{$hotPost->visit}}</td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
