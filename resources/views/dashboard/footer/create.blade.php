@extends('dashboard.index.index')


@section('style')

    <style>
        th , td {text-align: center}
    </style>

@endsection



@section('content')
    <div class="container">
        <div class="card card-success mt-5">
            <div class="card-header">
                <h6 class="">{{__('dashboard_layout.footer_social_links')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.footer_social_links.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="alert alert-warning">
                        <a href="https://fontawesome.com/" class="text-white">fontawesome </a>
                    </div>

                    <div class="form-group">
                        <label for="select_domain">حدد النطاق السابق</label>
                        <select class="form-control" id="select_domain" onchange="getType()">
                            <option value="">ححد النطاق السابق</option>
                            @foreach($footerLinks as $i)
                            <option>{{$i->type}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type">{{__('dashboard_layout.type_social')}}</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="youtube,facebook,...">
                    </div>


                    <div class="form-group">
                        <label for="icon">icon</label>
                        <input type="text" class="form-control  @error('icon') is-invalid @enderror" name="icon" id="icon" placeholder="icon from fontawesome">
                    </div>

                    <div class="form-group">
                        <label for="color">icon color</label>
                        <input type="color" name="color" id="color">
                    </div>

                    <div class="form-group">
                        <label for="title">{{__('dashboard_layout.title')}}</label>
                        <input dir="rtl" type="text" class="form-control  @error('title') is-invalid @enderror" name="title" id="title" placeholder="{{__('dashboard_layout.title')}}">
                    </div>


                    <div class="form-group">
                        <label for="link">{{__('dashboard_layout.link')}}</label>
                        <input dir="rtl" type="text" class="form-control  @error('link') is-invalid @enderror" name="link" id="link" placeholder="{{__('dashboard_layout.link')}}">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ أوتحديث</button>
                </div>
            </form>
        </div>
        <!-- /.card -->


        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">العنوان</th>
                <th scope="col">النوع</th>
                <th scope="col">الرابط</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($footerLinks as $i)
                <tr>
                    <td>{{$i->title}}</td>
                    <td>{{$i->type}}</td>
                    <td>{{$i->link}}</td>
                    <td>
                        <a href="{{route('dashboard.footer_social_links.delete' , ['id' => $i->id])}}" style="font-size: 30px" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection


@section('script')


<script>
    function getType()
    {
       type = document.getElementById('select_domain').value

        document.getElementById('type').value = type

    }


</script>


@endsection
