@extends('dashboard.index.index')




@section('content')


    <div class="container">
        <div class="card card-primary mt-5">
            <div class="card-header">
                <h6 class="">{{__('dashboard_layout.volunteers')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.volunteer.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">{{__('dashboard_layout.volunteer_name')}}</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="{{__('dashboard_layout.volunteer_name')}}">
                    </div>
                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.desc')}}</label>
                        <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img_url">{{__('dashboard_layout.img')}}</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
        <!-- /.card -->






@endsection
