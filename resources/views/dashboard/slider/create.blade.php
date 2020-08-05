@extends('dashboard.index.index')

@section('style')

    <style>
        td , th{
            text-align: center;
        }
    </style>

@endsection



@section('content')


    <div class="container">
        <div class="card card-primary mt-5">
            <div class="card-header">
                <h4 class="">{{__('dashboard_layout.slider')}}</h4>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">{{__('dashboard_layout.title')}}</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="{{__('dashboard_layout.title')}}">
                    </div>
                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.desc')}}</label>
                        <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">{{__('dashboard_layout.img')}}</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">رفع الصورة</button>
                </div>
            </form>
        </div>
        <!-- /.card -->


        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">العنوان</th>
                <th scope="col">معاينة</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mark</td>
                <td>
                    <img src="/img_slider/1596585979_google.png" width="200">
                </td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>


@endsection
