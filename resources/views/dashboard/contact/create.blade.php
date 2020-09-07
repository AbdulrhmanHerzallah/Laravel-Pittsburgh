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
        <br><br>
        <div class="card card-primary">
            <div class="card-header">
                <h6 class="">{{__('اضف معلومات التواصل')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.contact.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone">{{__('الهاتف')}}</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="email">{{__('البريد الالكتروني')}}</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="title">{{__('الموقع')}}</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
