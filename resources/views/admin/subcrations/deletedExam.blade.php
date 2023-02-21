<!-- Modal -->
<div class="modal fade" id="deleteddeletedExam{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">حذف الاجابه</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('deletedgetSubcrationsexam') }}" method="post" autocomplete="off">
                @csrf
                <input type="hidden" value="{{ $row->id }}" name="id">

                <div class="row">
                    <div class="col">
                        <label>حذف الاجابه  </label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>