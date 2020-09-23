@extends('dashboard.index.index')


@section('content')
    <div class="container">
        <br><br>
        <div class="card card-dark">
            <div class="card-header">
                <h6 class="">{{__('اضف صور اللقاء')}}</h6>
            </div>
            <br>
            <div class="alert alert-warning" role="alert">
                ملاحظة سيتم حذف القديم من الصور ان وجدت لكي تتم عملية التحديث.
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.update.update.img')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="type">حدد الصور</label>
                        <input type="file" name="img[]" multiple>
                    </div>
                    <input type="hidden" name="trailer_id" value="{{$id}}">
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">حفظ الصور</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>


@endsection
