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
                <h6 class="">{{__('dashboard_layout.slider')}}</h6>
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
                <th scope="col">الوصف</th>
                <th scope="col">معاينة</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($slider as $i)
            <tr>
                <td>{{$i->title}}</td>
                <td>{{$i->desc}}</td>
                <td>
                    <img src="{{$i->img_url}}" width="200" height="80">
                </td>
                <td>
                    <a href="{{route('dashboard.slider.delete' , ['id' => $i->id])}}" style="font-size: 30px" class="text-success"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    <a href="{{route('dashboard.slider.delete' , ['id' => $i->id])}}" style="font-size: 30px" class="text-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
