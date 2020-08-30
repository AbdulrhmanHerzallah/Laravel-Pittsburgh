@extends('dashboard.index.index')



@section('content')


    <div class="container">
        <br><br>
        <div class="card card-primary">
            <div class="card-header">
                <h6 class="">{{__('الدليل')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.guide.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">{{__('العنوان')}}</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="{{__('dashboard_layout.title')}}">
                    </div>
                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.desc')}}</label>
                        <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">{{__('dashboard_layout.img')}}</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img">
                                @error('img') <span class="text-danger">الحجم او النوع او انك لم ترفق صورة</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">{{__('المستند')}}</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="file">
                                @error('file') <span class="text-danger">الحجم او النوع او انك لم ترفق مستند</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title">{{__('كلمة التحميل')}}</label>
                        <input type="text" class="form-control @error('download_word') is-invalid @enderror" name="download_word" id="download_word" placeholder="{{__('كلمة التحميل')}}">
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">رفع الدليل</button>
                </div>
            </form>
        </div>

@endsection
