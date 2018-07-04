<button type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target="#confirmation{{ $r }}"> Delete </button>

<div class='modal fade' id="confirmation{{ $r }}" role='dialog'>
  <div class='modal-dialog'>

    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'><span style='color: red;'></span></h4>
      </div>
      <div class='modal-body'>
        <h4 class="text-center">Do You Want to Delete this ??</h4>
      </div>
      <div style='clear: both'></div>
      <div class='modal-footer'>
      <a href="{{route('DeleteBranch',$branch->id)}}" class='btn btn-primary'>Ok</a>

        <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancel</button>

      </div>
    </div>

  </div>
</div>
