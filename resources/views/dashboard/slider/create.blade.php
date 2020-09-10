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
                <h6 class="">{{__('dashboard_layout.slider')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">{{__('dashboard_layout.title')}}</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="{{__('dashboard_layout.title')}}">
                    </div>

                    <div class="form-group">
                        <label for="title">رابط التوجيه</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" id="link" placeholder="">
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
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#update" data-id="{{$i->id}}" data-title="{{$i->title}}" data-desc="{{$i->desc}}" data-link="{{$i->link}}">
                        <i class="fas fa-edit"></i>
                    </button>
{{--                    <a href="{{route('dashboard.slider.delete' , ['id' => $i->id])}}" style="font-size: 30px" class="text-success"><i class="far fa-edit"></i></a>--}}
                </td>
                <td>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete_img" data-id="{{$i->id}}" data-title="{{$i->title}}" data-link="{{$i->link}}">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
            </tbody>
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
                <form action="{{route('dashboard.slider.delete')}}" method="post">
                    @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('dashboard.slider.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="title" class="col-form-label">العنوان</label>
                            <input type="text"  class="form-control" name="title" id="title">
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-form-label">رابط التوجيه</label>
                            <input type="text"  class="form-control" name="link" id="link">
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">الوصف</label>
                            <textarea class="form-control" name="desc" id="desc"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary">تحديث</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $('#delete_img').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            var title = button.data('title') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(id)
            modal.find('#title').text(title)
        })


        $('#update').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            var title = button.data('title') // Extract info from data-* attributes
            var link = button.data('link') // Extract info from data-* attributes
            var desc = button.data('desc') // Extract info from data-* attributes
            var route = button.data('route') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(id)
            modal.find('#route').val(route)
            modal.find('#title').val(title)
            modal.find('#link').val(link)
            modal.find('#title_input').attr("action" , route)
            modal.find('#desc').val(desc)
        })

    </script>
@endsection
