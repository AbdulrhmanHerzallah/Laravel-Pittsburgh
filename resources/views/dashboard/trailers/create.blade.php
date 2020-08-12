@extends('dashboard.index.index')




@section('content')

    <div class="container">


        <div class="card card-dark mt-5">
            <div class="card-header">
                <h6 class="">{{__('dashboard_layout.create_topic')}} (trailer)</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->


            <form role="form" action="{{route('dashboard.trailer.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="title">{{__('dashboard_layout.title')}}</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.desc')}}</label>
                        <textarea class="form-control" id="desc" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="type">حدد نوع العرض في الواجهة</label>
                        <select class="form-control" id="type" name="type" onchange="selectType()">
                            <option value="">حدد نوع العرض في الواجهة</option>
                            <option value="y">Youtube</option>
                            <option value="t">Twitter</option>
                            <option value="p">Spotify</option>
                            <option value="i">Image</option>
                        </select>
                    </div>

                    <div class="form-group" id="url_id" style="display: none">
                        <label for="url_id_y">Youtube Url</label>
                        <input type="text" class="form-control" name="url_id" id="url_id_y">
                    </div>

                    <div class="form-group" id="iframe_twitter" style="display: none">
                        <label for="iframe_twitter_l">Embed Iframe just Twitter</label>
                        <input type="text" class="form-control" id="iframe_twitter_l" name="iframe">
                    </div>

                    <div class="form-group" id="iframe_spotify" style="display: none">
                        <label for="iframe_s">Embed Iframe just Spotify</label>
                        <input type="text" class="form-control" id="iframe_s" name="iframe">
                    </div>

                    <div class="form-group" id="img" style="display: none">
                        <label for="file_i">صورة</label>
                        <input type="file" name="img" id="file_i">
                    </div>

                </div>

                <div class="container mb-3">
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">التالي --></button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection



@section('script')
    <script>
        function selectType()
        {
          let type = document.getElementById('type').value

            if (type == 'y')
            {
                document.getElementById('iframe_twitter').style.display = "none";
                document.getElementById('url_id').style.display = "block";
                document.getElementById('iframe_spotify').style.display = "none";
                document.getElementById('img').style.display = "none";
            }

            if (type == 't')
            {
                document.getElementById('iframe_twitter').style.display = "block";
                document.getElementById('url_id').style.display = "none";
                document.getElementById('iframe_spotify').style.display = "none";
                document.getElementById('img').style.display = "none";
            }

            if (type == 'p')
            {
                document.getElementById('iframe_twitter').style.display = "none";
                document.getElementById('url_id').style.display = "none";
                document.getElementById('iframe_spotify').style.display = "block";
                document.getElementById('img').style.display = "none";
            }

            if (type == 'i')
            {
                document.getElementById('iframe_twitter').style.display = "none";
                document.getElementById('url_id').style.display = "none";
                document.getElementById('iframe_spotify').style.display = "none";
                document.getElementById('img').style.display = "block";
            }

        }
    </script>
@endsection
