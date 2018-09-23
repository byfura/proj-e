<template>
  <div class="modal fade" id="view-privilege-group" tabindex="-1" role="dialog" aria-hidden="true">
    <form class="form-signin">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header inverted">
          <h5 class="modal-title">Item 1</h5>
          <button type="button" class="close inverted" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead class="inverted">
                <tr>
                  <th>Group List</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Item 1</td>
                </tr>
                <tr>
                  <td>Item 2</td>
                </tr>
                <tr>
                  <td>Item 3</td>
                </tr>
                <tr>
                  <td>Item 4</td>
                </tr>
              </tbody>
            </table>
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
      name: 'ViewPrivilegeGroup'
    }
</script>
