@extends('dashboard.index.index')




@section('content')

<div class="container">
    <br><br>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">العنوان</th>
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
{{--                    --}}{{--                    <a href="{{route('dashboard.slider.delete' , ['id' => $i->id])}}" style="font-size: 30px" class="text-success"><i class="far fa-edit"></i></a>--}}
{{--                </td>--}}
                <td>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete_img" data-route="{{route('dashboard.trailer.delete' , ['id' => $i->id])}}" data-title="{{$i->title}}">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
                <td>
                    <form action="{{route('dashboard.trailer.active' , ['id' => $i->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-success" title="تفعيل">
                            <i class="fas fa-snowboarding"></i>
                        </button>
                    </form>
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


@endsection

@section('script')


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



@endsection
