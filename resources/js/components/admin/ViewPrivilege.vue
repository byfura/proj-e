<template>
  <div>
    <FormPrivilege></FormPrivilege>
    <ViewPrivilegeGroup></ViewPrivilegeGroup>
    <div class="card mb-3">
      <div class="card-header">
        <div class="float-left h4">
          <i class="fas fa-table"></i>
          Privilege
        </div>
        <nav aria-label="Page navigation example" class="float-right">
          <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">100</a></li>
          </ul>
        </nav>
      </div>
      <div class="card-body">
        <div class="float-left">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="float-right mb-2">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form-privilege"><i class="fa fa-plus"></i> New Privilege</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="inverted">
              <tr>
                <th>Privilege</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Item 1</td>
                <td>
                  <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#view-privilege-group"><i class="fa fa-users"></i> Display Group</button>
                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#form-privilege"><i class="fa fa-edit"></i> Edit</button>
                  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp;</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">
        <div class="float-left">
          Updated yesterday at 11:59 PM
        </div>
        <nav aria-label="Page navigation example" class="float-right">
          <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">100</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>

    import FormPrivilege from './FormPrivilege.vue'
    import ViewPrivilegeGroup from './ViewPrivilegeGroup.vue'

    export default {
      name: 'ViewPrivilege',
      components: {
        FormPrivilege,
        ViewPrivilegeGroup,
      }
    }
</script>
