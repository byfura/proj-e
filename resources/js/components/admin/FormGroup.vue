<template>
  <div class="modal fade" id="form-group" tabindex="-1" role="dialog" aria-hidden="true">
    <form class="form-signin">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header inverted">
          <h5 class="modal-title" id="exampleModalLabel">Insert/Edit Group</h5>
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
              <label for="i-title" class="sr-only">Group Title</label>
              <input type="text" id="i-title" class="form-control" placeholder="Group Title" required autofocus>
            </div>
          </div> -->
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label">Group Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabelSm" placeholder="Group Title">
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label">Privilege</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="itemA">
                    <label class="form-check-label" for="itemA">Privilege A</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="itemB">
                    <label class="form-check-label" for="itemB">Privilege B</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="itemC">
                    <label class="form-check-label" for="itemC">Privilege C</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="itemD">
                    <label class="form-check-label" for="itemD">Privilege D</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="itemE">
                    <label class="form-check-label" for="itemE">Privilege E</label>
                  </div>
                </div>
              </div>
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
      name: 'FormGroup'
    }
</script>
