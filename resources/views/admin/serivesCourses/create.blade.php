<!-- Modal -->
<div class="modal fade" id="createModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافه الخدمه جديده</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('serivesCourses.store') }}" method="post">
                    @csrf

                    <input type="hidden" name="course_id" value="{{ $course->id }}">


                    <div class="col">
                        <label>رابط فديو</label>
                        <input type="text" name="url" class="form-control" value="">
                    </div>


                    <div class="col">
                        <label>وقت الامتحان</label>
                        <input type="number" required name="time" class="form-control" id="">
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>الاسم الخدمه بالغه العربيه</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>


                        <div class="col">
                            <label>الاسم الخدمه بالغه الانجليزيه</label>
                            <input type="text" name="name_en" required class="form-control">
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
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>الوصف الخدمه بالغه العربيه </label>
                            <textarea class="form-control" name="notes" required rows="5" id="summernote">

                        </textarea>
                        </div>
                    </div>

                    <br>


                    <div class="row">
                        <div class="col">
                            <label>الوصف الخدمه بالغه الانجليزيه</label>
                            <textarea class="form-control" name="notes_en" required rows="5" id="summernote2">

                        </textarea>
                        </div>
                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>