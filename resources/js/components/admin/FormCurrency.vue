<template>
  <div class="modal fade" id="form-currency" tabindex="-1" role="dialog" aria-hidden="true">
    <form class="form-signin">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header inverted">
          <h5 class="modal-title" id="exampleModalLabel">Insert/Edit Currency</h5>
          <button type="button" class="close inverted" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Title</span>
              </div>
              <label for="i-title" class="sr-only">Currency Title</label>
              <input type="text" id="i-title" class="form-control" placeholder="Currency Title" required autofocus>
            </div>
          </div> -->
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label">Currency Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabelSm" placeholder="Currency Code">
            </div>
            <label for="colFormLabelSm2" class="col-sm-2 col-form-label">Currency</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabelSm2" placeholder="Currency">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</template>

<script>
    export default {
      name: 'FormCurrency'
    }
</script>
