@extends('dashboard.index.index')

@section('style')

    <style>
        .note-btn[aria-label="Picture"] , .note-btn[data-original-title="Font Family"] {
            display: none !important;
        }

        .note-editor .btn-toolbar button[data-event="showVideoDialog"] {
            display: none !important;
        }
    </style>


@endsection



@section('content')

    <div class="container">

<br><br>
        <div class="card card-dark">
            <div class="card-header">
                <h6 class="">{{__('dashboard_layout.create_topic')}} ({{$title}})</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->


            <form role="form" action="{{route('dashboard.topic.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">

                        <label for="desc">{{__('dashboard_layout.desc')}}</label>
{{--                        <textarea name="desc" class="form-control" id="desc" rows="4"></textarea>--}}
                        <textarea  id="desc" name="desc" class="textarea"  placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;z-index: 400"></textarea>

                    </div>
                    @error('desc')
                    <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                    @enderror

                   <input type="hidden" value="{{$trailer_id}}" name="trailer_id">


                    <div class="container mb-3">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="type">حدد نوع العرض في الواجهة</label>--}}
{{--                        <select class="form-control" id="type" name="type" onchange="selectType()">--}}
{{--                            <option value="">حدد نوع العرض في الواجهة</option>--}}
{{--                            <option value="y">Youtube</option>--}}
{{--                            <option value="t">Twitter</option>--}}
{{--                            <option value="p">Spotify</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}

{{--                    <div class="form-group" id="url_id" style="display: none">--}}
{{--                        <label for="url_id_y">Youtube Url</label>--}}
{{--                        <input type="text" class="form-control" name="url_id" id="url_id_y">--}}
{{--                    </div>--}}


{{--                    <div class="form-group" id="iframe_twitter" style="display: none">--}}
{{--                        <label for="iframe_twitter_l">Embed Iframe just Twitter</label>--}}
{{--                        <input type="text" class="form-control" id="iframe_twitter_l" name="iframe">--}}
{{--                    </div>--}}

{{--                    <div class="form-group" id="iframe_spotify" style="display: none">--}}
{{--                        <label for="iframe_s">Embed Iframe just Spotify</label>--}}
{{--                        <input type="text" class="form-control" id="iframe_s" name="iframe">--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="container mb-3">--}}
{{--                    <div class="progress">--}}
{{--                        <div class="progress-bar bg-dark" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                    </div>--}}
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit"  class="btn btn-dark">التالي</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection



@section('script')
    <script>
        $(function () {
            // Summernote
            $('#desc').summernote({
                height: 300,
            })
        })

        // font-family: 'Almarai', sans-serif;
    </script>



@endsection
