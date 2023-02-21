@extends('admin.layouts.master')
@section('title')
اجابه الامتحانات على الكورس
@endsection
@section('css')



@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto"> اجابه الامتحانات على الكورس</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اجابه الامتحانات على الكورس</span>
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
            <div class="card-header">
                <div class="flash-message"></div>

                {{-- <div class="row">
                    <div class="col">
                        @can('create-number')
                        <a href="{{route('number.create')}}" class="btn btn-success">اضافه جديده</a>
                        @endcan
                    </div>
                </div> --}}

                {{-- <div class="row">
                    <div class="col">
                        @include('admin.number.search')
                    </div>
                </div> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table text-md-nowrap text-center" id="example1">
                        <thead>
                            <tr>
                                <th>#</th>
                                
                                <th>Exam</th>
                          
                                <th>test</th>

                                {{-- <th>Action</th> --}}

                            </tr>
                        </thead>
                        <tbody>

                            @forelse($data as $row)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                               
                                <td>{{$row->exam->name}}</td>
                                <td>{{$row->text}}</td>
                            


                                {{-- <td> --}}

                                   


                                 

                                    {{-- @can('deleted-number') --}}
                                    {{-- <button class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#deleteddeletedExam{{$row->id}}"><i class="fa fa-trash"></i>
                                    </button> --}}
                                    {{-- @endcan --}}
                                {{-- </td> --}}
                           
                                {{-- @include('admin.subcrations.deletedExam') --}}

                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="table-active text-center">No Data !</td>
                            </tr>
                            @endforelse
                    </table>
                    {{ $data->render("pagination::bootstrap-4") }}
                </div>
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
            $('.toggle-class').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('updateNumberStatus') }}',
                    data: {'status': status, 'user_id': user_id},
                    success: function (data) {
                        toastr.success('Data Update Successfully');
                    }
                });
            })
        })
</script>
@endsection