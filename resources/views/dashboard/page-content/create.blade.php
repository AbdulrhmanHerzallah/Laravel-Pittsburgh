@extends('dashboard.index.index')




@section('content')

    <div class="container">
        <div class="card card-success mt-5">
            <div class="card-header">
                <h6 class="">{{__('dashboard_layout.content_page')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.content_page.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="about">{{$title->first_title ??  __('dashboard_layout.about_us')}}</label>
                        <textarea class="form-control" name="about_us" id="about" rows="3">{{$data->about_us ?? null}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="desc">{{$title->second_title ?? __('dashboard_layout.coffee_message')}}</label>
                        <textarea class="form-control" name="coffee_message" id="desc" rows="3">{{$data->coffee_message ?? null}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="target_coffee">{{$title->third_title ?? __('dashboard_layout.target_coffee')}}</label>
                        <textarea class="form-control" name="target_coffee" id="target_coffee" rows="3">{{$data->target_coffee ?? null}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.video_title')}}</label>
                        <input type="text" class="form-control" name="video_title" id="title" placeholder="{{__('dashboard_layout.video_title')}}" value="{{$data->video_title ?? null}}">
                    </div>

                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.video_url')}}</label>
                        <input dir="rtl" type="text" class="form-control" name="video_url" id="title" placeholder="{{__('dashboard_layout.video_url')}}" value="{{$data->video_url ?? null}}">
                    </div>


                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.img_parallax')}}</label>
                        <input type="file" class="" name="img_parallax" id="img_parallax">
                        <img src="{{$data->img_parallax ?? null}}" height="200" width="200">
                    </div>

                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.subscribed')}}</label>
                        <input type="text" class="form-control" name="subscribed" id="title" placeholder="{{__('dashboard_layout.subscribed')}}" value="{{$data->subscribed ?? null}}">
                    </div>

                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.meeting_count')}}</label>
                        <input type="text" class="form-control" name="meeting_count" id="title" placeholder="{{__('dashboard_layout.meeting_count')}}" value="{{$data->meeting_count ?? null}}">
                    </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>



@endsection
