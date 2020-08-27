@extends('dashboard.index.index')




@section('content')


    <div class="container-fluid">
        <br>
        <form action="{{route('dashboard.title.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_title">العنوان الاول</label>
                <input type="text" name="first_title" class="form-control" value="{{$title->first_title}}" id="first_title" placeholder="">
            </div>

            <div class="form-group">
                <label for="second_title">العنوان الثاني</label>
                <input type="text" name="second_title" class="form-control" value="{{$title->second_title}}" id="second_title" placeholder="">
            </div>

            <div class="form-group">
                <label for="third_title">العنوان الثالث</label>
                <input type="text" name="third_title" class="form-control" value="{{$title->third_title}}" id="third_title" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>

    </div>







@endsection
