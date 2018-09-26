<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog {{ isset($size) ? $size : ''}}" role="document">
    <div class="modal-content">
      <div class="modal-header e-bg-primary">
        <h5 class="modal-title e-bg-primary" id="exampleModalLabel">{{ $title }}</h5>
        <button type="button" class="close e-bg-primary" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
    </div>
  </div>
</div>