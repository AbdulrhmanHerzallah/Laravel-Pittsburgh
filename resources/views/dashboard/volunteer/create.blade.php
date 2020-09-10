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
                <h6 class="">{{__('dashboard_layout.volunteers')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('dashboard.volunteer.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">{{__('dashboard_layout.volunteer_name')}}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="{{__('dashboard_layout.volunteer_name')}}">
                    </div>

                    <div class="form-group">
                        <label for="twitter">{{__('twitter link')}}</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" id="twitter" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="desc">{{__('dashboard_layout.desc')}}</label>
                        <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img_url">{{__('dashboard_layout.img')}}</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img">
                                @error('img') <span class="text-danger">الحجم او النوع او انك لم ترفق صورة!</span> @enderror

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>


        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">الاسم</th>
                <th scope="col">الوصف</th>
                <th scope="col">معاينة</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($vol as $i)
                <tr>
                    <td>{{$i->name}}</td>
                    <td>{{$i->desc}}</td>
                    <td>
                        <img src="{{$i->img_url}}" width="200" height="80">
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#update" data-id="{{$i->id}}" data-name="{{$i->name}}" data-desc="{{$i->desc}}" data-twitter="{{$i->twitter}}" data-route="{{route('dashboard.volunteer.update' , ['id' => $i->id])}}">
                            <i class="fas fa-edit"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete" data-title="{{$i->name}}" data-route="{{route('dashboard.volunteer.delete' , ['id' => $i->id])}}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>




    </div>
        <!-- /.card -->


    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" id="form" method="post">
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title_name">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="route" action="" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">الاسم</label>
                            <input type="text"  class="form-control" name="name" id="person_name">
                        </div>

                        <div class="form-group">
                            <label for="twitter" class="col-form-label">twitter link</label>
                            <input type="text"  class="form-control" name="twitter" id="twitter">
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">الوصف</label>
                            <textarea class="form-control" name="desc" id="desc"></textarea>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="message-text" class="col-form-label">الصورة</label>--}}
{{--                            <input type="file" class="" id="file">--}}
{{--                        </div>--}}
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
        $('#delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('title') // Extract info from data-* attributes
            var route = button.data('route') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#form').attr("action" , route)
            modal.find('#title').text(title)
        })


        $('#update').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            var name = button.data('name') // Extract info from data-* attributes
            var desc = button.data('desc') // Extract info from data-* attributes
            var twitter = button.data('twitter') // Extract info from data-* attributes
            var route = button.data('route') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(id)
            modal.find('#title_name').text(name)
            modal.find('#person_name').val(name)
            modal.find('#twitter').val(twitter)
            modal.find('#desc').val(desc)
            modal.find('#route').attr("action" , route)
        })

    </script>


@endsection
