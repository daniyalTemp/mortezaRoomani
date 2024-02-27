@extends('back.layout.main')

@section('content')

    <div class="row">


        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">لیست مخاطبین</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table  id="example3" class="display" style="min-width: 845px;">
                            <thead>
                            <tr>
                                <th></th>
                                <th>نام</th>
                                <th>نام خانودگی</th>
                                <th>تلفن</th>
                                <th>ایمیل</th>
                                <th>محل سکونت</th>
                                <th>تاریخ تولد</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($contacts))
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td><img class="rounded-circle" width="35"
                                                 src="{{asset('storage/images/contacts/'.$contact->image)}}" alt=""></td>
                                        <td>{{$contact->firstName}}</td>
                                        <td>{{$contact->lastName}}</td>
                                        <td><a href="javascript:void(0);"><strong>{{$contact->phone}}</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>{{$contact->email}}</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>{{$contact->address}}</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>{{$contact->birthday}}</strong></a></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('dashboard.contact.showProfile' , $contact->id)}}" class="btn btn-dark shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-user-circle"></i></a>
                                                <a href="{{route('dashboard.contact.edit' , $contact->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="{{route('dashboard.contact.del' , $contact->id)}}" class="btn btn-danger shadow btn-xs sharp"   data-toggle="modal" data-target="#delete{{$contact->id}}" ><i
                                                        class="fa fa-trash"></i></a>


                                                <!-- Modal -->
                                                <div class="modal fade" id="delete{{$contact->id}}">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">حذف کاربر</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>
                                                                    ایا از حذف
                                                                    {{$contact->firstName.' '.$contact->lastName}}

                                                                    اطمینان دارید؟
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-dark light" data-dismiss="modal">بستن</button>
                                                                <a href="{{route('dashboard.contact.del' , $contact->id)}}" class="btn btn-danger">حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                            </tbody>
                        </table>

                        <div class="card-body col-4 pull-left">
                            <a type="button" href="{{route('dashboard.contact.add')}}" class="btn btn-rounded btn-block btn-primary"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>افزودن
                            </a>

                        </div>


                        <div class="card-body col-8 pull-right">
                            <form class="form-valide"
                                  action="{{route('dashboard.contact.import')}}"
                                  enctype="multipart/form-data" method="post">
                                <div class="row ">

                                    @include('error')
                                    {{csrf_field()}}


                                    <div class="col-xl-8">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label text-center"
                                                   for="exelFile">فایل اکسل
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                           name="exelFile">
                                                    <label class="custom-file-label">انتخاب
                                                        فایل</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <br>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-rounded btn-block btn-success"><span
                                                class="btn-icon-left text-info"><i class="fa fa-upload color-info"></i>
                                    </span>آپلود
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
