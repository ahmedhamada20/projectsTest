@extends('admin.layouts.master')
@section('title')
    اضافه جديده
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> اضافه جديده</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/   اضافه جديده</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('previousWork.store')}}" method="post" autocomplete="off"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <label>courses</label>
                                <select class="form-control" name="course_id" required>
                                    <option value="" disabled selected>-- اختر الكورس المخصص --</option>
                                    @foreach (App\Models\Course::whereStatus(true)->get() as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>الاسم بالغه العربيه</label>
                                <input type="text" name="name" required value="{{old('name')}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>الاسم بالغه الانجليزيه</label>
                                <input type="text" name="name_en" required value="{{old('name')}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>
                        </div>

                        <br>

                        <div class="row">


                            <div class="col">
                                <label>حاله المنتج</label>
                                <select class="form-control p-1" name="status" required>
                                    <option value="" disabled selected>-- Choose --</option>
                                    <option
                                        value="1" {{old('status' , request()->input('status')) == "1" ? 'selected' : ''}}>
                                       مفعل
                                    </option>
                                    <option
                                        value="0" {{old('status' , request()->input('status')) == "0" ? 'selected' : ''}}>
                                        غير مفعل
                                    </option>
                                </select>
                            </div>

                            <div class="col">
                                <label>رابط فديو</label>
                                <input type="text" name="url"  class="form-control" value="{{old('url')}}">
                            </div>

                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه العربيه </label>
                                <textarea class="form-control" name="notes" rows="5" id="summernote">

                                </textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه الانجليزيه</label>
                                <textarea class="form-control" name="notes_en" rows="5" id="summernote2">

                                </textarea>
                            </div>
                        </div>

                        <br>

                        <br>

                        <div class="row">
                            <div class="col">
                                <h5 class="text-danger">ملف PDF</h5>
                                <input type="file" name="bdf" id="image_updload_bdf" multiple accept="application/pdf"
                                       class="file-input-overview">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <h5 class="text-danger">صوره الموقع</h5>
                                <input type="file" name="cover" id="image_updload"  accept="image/*"
                                       class="file-input-overview">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">حفظ</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')

    <script>
        $(function () {
            $("#image_updload").fileinput({
                theme: "fa5",
                maxFileCount: 1,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
            });
        });
    </script>

    <script>
        $(function () {
            $("#image_updload_bdf").fileinput({
                theme: "fa5",
                maxFileCount: 1,
                allowedFileTypes: ['pdf'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
            });
        });
    </script>
@endsection
