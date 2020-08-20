@extends('dashboard.index.index')




@section('content')

    <div class="container">
        <div class="card card-dark mt-5">
            <div class="card-header">
                <h6 class="">{{__('dashboard_layout.create_topic')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <button type="button" class="btn btn-success m-3" id="add">+</button>


            <form role="form" action="{{route('dashboard.gestes.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$trailer_id}}" name="trailer_id">
                <input type="hidden" value="{{old('index_val')}}" id="index" name="index_val">
                <div class="card-body" id="gestes">
                    {{--                    <input type="hidden" value="{{$trailer_id}}" name="trailer_id">--}}
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="guest_name_0">اسم الضيف <span class="text-danger">*</span></label>
                                <input id="guest_name_0" name="name[]"
                                       class="form-control mb-3 @error('name.0') is-invalid @enderror"
                                       placeholder="" value="{{old('name.0')}}">
                            </div>

                            <div class="col">
                                <label for="twitter_0">Twitter</label>
                                <input id="twitter_0" type="text" name="twitter[]"
                                       class="form-control mb-3 @error('twitter.0') is-invalid @enderror"
                                       placeholder="" value="{{old('twitter.0')}}">
                            </div>
                            <div class="col">
                                <label for="facebook_0">Facebook</label>
                                <input id="facebook_0" type="text" name="facebook[]"
                                       class="form-control mb-3 @error('facebook.0') is-invalid @enderror"
                                       placeholder="" value="{{old('facebook.0')}}">
                            </div>

                            <div class="col">
                                <label for="instagram_0">Instagram</label>
                                <input id="instagram_0" type="text" name="instagram[]"
                                       class="form-control mb-3 @error('instagram.0') is-invalid @enderror"
                                       placeholder="" value="{{old('instagram.0')}}">
                            </div>

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="snapchat_0">Snapchat</label>
                                <input id="snapchat_0" type="text"
                                       class="form-control mb-3 @error('snapchat.0') is-invalid @enderror"
                                       placeholder="" name="snapchat[]" value="{{old('snapchat.0')}}">
                            </div>

                            <div class="col">
                                <label for="desc_0">اضافة وصف قصير للضيف</label>
                                <textarea name="desc[]" class="form-control @error('desc.0') is-invalid @enderror" rows="2"
                                          id="desc_0">{{old('desc.0')}}</textarea>
                            </div>

                            <div class="col">
                                <label for="web_site_0">Web Site</label>
                                <input id="web_site_0" type="text" name="web[]"
                                       class="form-control mb-3 @error('web.0') is-invalid @enderror"
                                       placeholder="" value="{{old('web.0')}}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group mt-4 text-center">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group form-check mt-4">
                                    <input name="main[]" value="1" type="checkbox" class="form-check-input" id="gestes_0">
                                    <label for="gestes_0"
                                           class="form-check-label">{{__('dashboard_layout.honor_guest')}}</label>
                                </div>
                            </div>

                            <div class="col">
                                <label for="file_0" class="form-check-label @error('file.0') text-danger @enderror">اختار صورة شخصية للضيف</label>
                                <input class="mt-3" type="file" name="file[]" value="{{old('file.0')}}" id="file_0">
                            </div>
                        </div>
                    </div>
                    <hr style="border: none;background: #ccc;color:#ccc;height: 3px">


                    @for ($i = 1; $i <= old('index_val'); $i++)
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="guest_name_{{$i}}">اسم الضيف <span class="text-danger">*</span></label>
                                    <input id="guest_name_{{$i}}" name="name[]"
                                           class="form-control mb-3 @error('name.'.$i) is-invalid @enderror"
                                           placeholder="" value="{{old('name.'.$i)}}">
                                </div>

                                <div class="col">
                                    <label for="twitter_{{$i}}">Twitter</label>
                                    <input id="twitter_{{$i}}" type="text" name="twitter[]"
                                           class="form-control mb-3 @error('twitter.'.$i) is-invalid @enderror"
                                           placeholder="" value="{{old('twitter.'.$i)}}">
                                </div>
                                <div class="col">
                                    <label for="facebook_{{$i}}">Facebook</label>
                                    <input id="facebook_{{$i}}" type="text" name="facebook[]"
                                           class="form-control mb-3 @error('facebook.'.$i) is-invalid @enderror"
                                           placeholder="" value="{{old('facebook.'.$i)}}">
                                </div>

                                <div class="col">
                                    <label for="instagram_{{$i}}">Instagram</label>
                                    <input id="instagram_{{$i}}" type="text" name="instagram[]"
                                           class="form-control mb-3 @error('instagram.'.$i) is-invalid @enderror"
                                           placeholder="" value="{{old('instagram.'.$i)}}">
                                </div>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="snapchat_{{$i}}">Snapchat</label>
                                    <input id="snapchat_{{$i}}" type="text"
                                           class="form-control mb-3 @error('snapchat.'.$i) is-invalid @enderror"
                                           placeholder="" name="snapchat[]" value="{{old('snapchat.'.$i)}}">
                                </div>

                                <div class="col">
                                    <label for="desc_{{$i}}">اضافة وصف قصير للضيف</label>
                                    <textarea name="desc[]" class="form-control @error('desc.'.$i) is-invalid @enderror" rows="2"
                                              id="desc_{{$i}}">{{old('desc.'.$i)}}</textarea>
                                </div>

                                <div class="col">
                                    <label for="web_site_{{$i}}">Web Site</label>
                                    <input id="web_site_{{$i}}" type="text" name="web[]"
                                           class="form-control mb-3 @error('web.'.$i) is-invalid @enderror"
                                           placeholder="" value="{{old('web.'.$i)}}">
                                </div>
                            </div>
                        </div>


                        <div class="form-group mt-4 text-center">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group form-check mt-4">
                                        <input name="main[]" value="1" type="checkbox" class="form-check-input" id="gestes_{{$i}}">
                                        <label for="gestes_{{$i}}"
                                               class="form-check-label">{{__('dashboard_layout.honor_guest')}}</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="file_{{$i}}" class="form-check-label @error('file.'.$i) text-danger @enderror">اختار صورة شخصية للضيف</label>
                                    <input class="mt-3 @error('file.'.$i) is-invalid @enderror" value="{{old('file'.$i)}}" type="file" name="file[]" id="file_{{$i}}">
                                </div>

                                <div class="col">
                                    <div class="col">
                                        <button type="button" onclick="del({{$i}})" class="btn btn-dark w-100">-
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr style="border: none;background: #ccc;color:#ccc;height: 3px">
                    @endfor







                </div>






                <div class="container mb-3">
                    <div class="container mb-3">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">التالي</button>
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
                $('#index').val(count)
                $('#gestes').append(`
                <div id="item-${count}">
                <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="guest_name_${count}">اسم الضيف <span class="text-danger">*</span></label>
                                <input id="guest_name_${count}" name="name[]"
                                       class="form-control mb-3
                                       placeholder="">
                            </div>

                            <div class="col">
                                <label for="twitter_${count}">Twitter</label>
                                <input id="twitter_${count}" type="text" name="twitter[]"
                                       class="form-control mb-3"
                                       placeholder="">
                            </div>
                            <div class="col">
                                <label for="facebook_${count}">Facebook</label>
                                <input id="facebook_${count}" type="text" name="facebook[]"
                                       class="form-control mb-3"
                                       placeholder="">
                            </div>

                            <div class="col">
                                <label for="instagram_${count}">Instagram</label>
                                <input id="instagram_${count}" type="text" name="instagram[]"
                                       class="form-control mb-3"
                                       placeholder="">
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="snapchat_${count}">Snapchat</label>
                                <input id="snapchat_${count}" type="text"
                                       class="form-control mb-3"
                                       placeholder="" name="snapchat[]">
                            </div>

                            <div class="col">
                                <label for="desc_${count}">اضافة وصف قصير للضيف</label>
                                <textarea name="desc[]" class="form-control" rows="2"
                                          id="desc_${count}"></textarea>
                            </div>

                            <div class="col">
                                <label for="web_site_${count}">Web Site</label>
                                <input id="web_site_${count}" type="text" name="web[]"
                                       class="form-control mb-3"
                                       placeholder="">
                            </div>
                        </div>
                    </div>


                    <div class="form-group mt-4 text-center">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group form-check mt-4">
                                    <input name="main[]" value="1" type="checkbox" class="form-check-input" id="gestes_${count}">
                                    <label for="gestes_${count}"
                                           class="form-check-label">{{__('dashboard_layout.honor_guest')}}</label>
                                </div>
                            </div>

                            <div class="col">
                                <label for="file_${count}" class="form-check-label">اختار صورة شخصية للضيف</label>
                                <input class="mt-3" name="file[]" type="file" id="file_${count}">
                            </div>

                            <div class="col">
                                <div class="form-group" style="margin-top: 30px">
                                    <div class="col">
                                        <button type="button" onclick="del(${count})" class="btn btn-dark w-100">-
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr style="border: none;background: #ccc;color:#ccc;height: 3px">
                </div>
                </div>
                `)
            })
        })
        function del(i) {
            $(`#item-${i}`).remove();
            count--
            $('#index').val(count)
        }

    </script>
@endsection
