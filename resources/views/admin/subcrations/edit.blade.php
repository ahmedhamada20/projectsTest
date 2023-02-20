<!-- Modal -->
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">درجه الطالب</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('editExamCousrs') }}" method="post" autocomplete="off">
                @csrf
                <input type="hidden" value="{{ $row->id }}" name="id">

                <div class="row">
                    <div class="col">
                        <label>اسم الطالب :: {{ $row->customer->name }}</label>
                        <input type="text" name="exam" value="{{ $row->exam  ?? null }}" class="form-control" required>
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