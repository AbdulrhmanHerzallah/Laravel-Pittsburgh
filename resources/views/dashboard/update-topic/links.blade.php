@extends('dashboard.index.index')




@section('content')

    <div class="container">
        <br><br>

        <div class="card card-dark">
            <div class="card-header">
                <h6 class="">تحديث روابط الموضوع</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <br>
            <br>
            <div class="alert alert-warning" role="alert">
                ملاحظة سيتم حذف القديم من الروابط ان وجدت لكي تتم عملية التحديث.
            </div>
            <button type="button" class="btn btn-success m-3" id="add">+</button>
            <form role="form" action="{{route('dashboard.update.update.links')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{old('index_val')}}" id="index" name="index_val">
                <input type="hidden" value="{{$id}}" name="trailer_id">
                <div class="form-group m-3" id="item">
                    <div class="form-row">
                        <div class="col">
                            <label for="title_0">العنوان<span class="text-danger">*</span></label>
                            <input name="title[]" type="text" class="form-control @error('title.0') is-invalid  @enderror" id="title_0">
                        </div>

                        <div class="col">
                            <label for="link">الرابط<span class="text-danger">*</span></label>
                            <input name="link[]" type="text" class="form-control @error('link.0') is-invalid  @enderror" id="link">
                        </div>
                    </div>

                    @for ($i = 1; $i <= old('index_val'); $i++)
                        <div class="form-row mt-3" id="del_item_{{$i}}">
                            <div class="col">
                                <label for="title_{{$i}}">العنوان<span class="text-danger">*</span></label>
                                <input name="title[]" type="text" class="form-control @error('title.'.$i) is-invalid  @enderror" id="title_{{$i}}">
                            </div>
                            <div class="col">
                                <label for="link_{{$i}}">الرابط<span class="text-danger">*</span></label>
                                <input name="link[]" type="text" class="form-control @error('link.'.$i) is-invalid  @enderror" id="link_{{$i}}">
                            </div>
                            <div class="col-2" style="margin-top: 30px">
                                <button type="button" onclick="del({{$i}})" class="btn btn-dark"><i
                                        class="fas fa-minus"></i></button>
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="container mt-4 mb-4">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>

        </div>
        <!-- /.card -->


    </div>
@endsection



@section('script')
    <script>
        let count = 0 ? count = 0 : $('#index').val();
        $(document).ready(function () {
            $('#add').click(function () {
                count++
                console.log(count)
                $('#index').val(count)
                $('#item').append(`
                        <div class="form-row mt-3" id="del_item_${count}">
                            <div class="col">
                                <label for="title_${count}">العنوان<span class="text-danger">*</span></label>
                                <input name="title[]" type="text" class="form-control" id="title_${count}">
                            </div>

                            <div class="col">
                                <label for="link_${count}">الرابط<span class="text-danger">*</span></label>
                                <input name="link[]" type="text" class="form-control" id="link_${count}">
                            </div>
                            <div class="col-2" style="margin-top: 30px">
                                <button type="button" onclick="del(${count})" class="btn btn-dark"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>



                `)
            })



        })
        function del(i) {
            $(`#del_item_${i}`).remove();
            count--
            $('#index').val(count)
        }

    </script>
@endsection
