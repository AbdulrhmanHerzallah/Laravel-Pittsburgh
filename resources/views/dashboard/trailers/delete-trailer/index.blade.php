@extends('dashboard.index.index')

@section('style')

    <style>
        .note-btn[aria-label="Picture"] , .note-btn[data-original-title="Font Family"] {
            display: none !important;
        }

        /*.note-editor .btn-toolbar button[data-event="showVideoDialog"] {*/
        /*    display: none !important;*/
        /*}*/
    </style>

@endsection

@section('content')

<div id="container" class="container" style="display: none">
    <br><br>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">العنوان</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($trailer as $i)
            <tr>
                <td>{{$i->title}}</td>
{{--                <td>--}}
{{--                    <img src="{{$i->img_url}}" width="200" height="80">--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#update" data-id="{{$i->id}}" data-title="{{$i->title}}" data-desc="{{$i->desc}}">--}}
{{--                        <i class="fas fa-edit"></i>--}}
{{--                    </button>--}}
{{--                                       </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>     --}}{{--                    <a href="{{route('dashboard.slider.delete' , ['id' => $i->id])}}" style="font-size: 30px" class="text-success"><i class="far fa-edit"></i></a>--}}
        {{--                </td>--}}
        <td>
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete_img" data-route="{{route('dashboard.trailer.delete' , ['id' => $i->id])}}" data-title="{{$i->title}}">
                <i class="fas fa-trash"></i>
            </button>
        </td>

        <td>
            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#update" data-id="{{$i->id}}"
                    data-topic="{{App\Models\Topic::find($i->id)->desc ?? ''}}"
                    data-trailer="{{App\Models\Trailer::find($i->id)->desc ?? ''}}"
                    data-title="{{App\Models\Trailer::find($i->id)->title ?? ''}}"
            >
                <i class="fas fa-edit"></i>
            </button>
        </td>
         <td>
             <a target="_blank" class="text-white" href="{{route('dashboard.update.index.img' , ['id' => $i->id])}}">تحديث الصور</a>
         </td>
                <td>
                    <a target="_blank" class="text-white" href="{{route('dashboard.update.index.links' , ['id' => $i->id])}}">تحديث الروابط</a>
                </td>

                <td>
                    <a target="_blank" class="text-white" href="{{route('dashboard.update.index.guests' , ['id' => $i->id])}}">تحديث الضيوف</a>
                </td>

        <td>
            <form action="{{route('dashboard.trailer.active' , ['id' => $i->id])}}" method="post">
                @csrf
                <button type="submit" class="btn btn-outline-success" title="تفعيل">
                    <i class="fas fa-snowboarding"></i>
                </button>
            </form>
        </td>
        @endforeach
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="delete_img" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="route" action="" method="post">
                @method('delete')
                @csrf
                <div class="modal-body">
                </div>
                <div class="m-3">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تحديث المحتوي</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('dashboard.trailer.update.trailer.title')}}" method="post">
                    @csrf
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="title" class="col-form-label">العنوان</label>
                        <input name="title" type="text" class="form-control" id="title">
                    </div>

                    <div class="alert alert-warning" role="alert">
                        ملاحظة يجب عليك اضافة واحد من الثلاثة فقط
                    </div>
                    <div class="form-group">
                        <div class="form-group" id="url_id" style="">
                            <label for="url_id_y">Youtube Url</label>
                            <input  type="text" onclick="url()"  class="form-control @error('url_id') is-invalid  @enderror"
                                    name="url_id"
                                    id="url_id_y" value="{{old('url_id')}}">
                        </div>
                    </div>

                 <div class="form-group">
                    <div class="form-group" id="iframe_twitter" style="">
                        <label for="iframe_twitter_l">Embed twitter</label>
                        <input  type="text" onclick="iframeE()" class="form-control @error('twitter') is-invalid  @enderror"
                               id="iframe_twitter_l" name="twitter" value="{{old('twitter')}}">
                    </div>
                  </div>

                    <div class="form-group">
                        <div class="form-group" id="iframe_twitter" style="">
                            <label for="iframe_twitter_l">Embed podcast</label>
                            <input  type="text" onclick="iframeE()" class="form-control @error('podcast') is-invalid  @enderror"
                                    id="iframe_twitter_l" name="podcast" value="{{old('podcast')}}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <form action="{{route('dashboard.trailer.update.trailer')}}" method="post">
                    @csrf
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="trailer" class="col-form-label">تحديث الوصف</label>
                        <textarea  name="desc" class="form-control" id="trailer"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
                <form action="{{route('dashboard.trailer.update.topic')}}" method="post">
                    @csrf
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="topic" class="col-form-label">تحديث الموضوع</label>
                        <textarea  id="topic" name="desc" class="textarea"  placeholder="Place some text here"
                                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;z-index: 400"></textarea>                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>

                <form action="{{route('dashboard.iframe.update')}}" method="post">
                    <br/>
                    @csrf
                    <input type="hidden" class="id" name="id">
                    <div class="alert alert-warning" role="alert">
                        ملاحظة يجب عليك اضافة واحد من الثلاثة فقط
                    </div>
                    <div class="form-group">
                        <div class="form-group" id="url_id" style="">
                            <label for="url_id_y">Youtube Url</label>
                            <input  type="text" onclick="url()"  class="form-control @error('url_id') is-invalid  @enderror"
                                    name="url_id"
                                    id="url_id_y" value="{{old('url_id')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group" id="iframe_twitter" style="">
                            <label for="iframe_twitter_l">Embed twitter</label>
                            <input  type="text" onclick="iframeE()" class="form-control @error('twitter') is-invalid  @enderror"
                                    id="iframe_twitter_l" name="twitter" value="{{old('twitter')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group" id="iframe_twitter" style="">
                            <label for="iframe_twitter_l">Embed podcast</label>
                            <input  type="text" onclick="iframeE()" class="form-control @error('podcast') is-invalid  @enderror"
                                    id="iframe_twitter_l" name="podcast" value="{{old('podcast')}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>






@endsection

@section('script')
    <script>
        function url()
        {
            document.getElementById('iframe_twitter_l').setAttribute('disabled')

        }

        function iframeE()
        {
            document.getElementById('url_id_y')

        }
    </script>


<script>
    setTimeout(function (){
        document.getElementById('container').style.display = 'block'
    },3000)
</script>

    <script>
        $('#delete_img').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            var title = button.data('title') // Extract info from data-* attributes
            var route = button.data('route') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(id)
            modal.find('#route').attr("action" , route)
            modal.find('#title').text(title)
        })
    </script>


    <script>
        $('#update').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            var title = button.data('title') // Extract info from data-* attributes
            var trailer = button.data('trailer') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.id').val(id)
            modal.find('#title').val(title)
            modal.find('#trailer').val(trailer)
        })
    </script>



@endsection

@section('script')

    <script>

        $(function () {
            // Summernote
            $('#topic').summernote({
                height: 300,
                dialogsInBody: true

            })
        })
    </script>

@endsection
