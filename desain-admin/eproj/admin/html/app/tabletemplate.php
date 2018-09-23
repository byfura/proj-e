<?php include 'header.php'; ?>

        <!-- main area -->
        <div class="main-content">
          <div class="content-view">
            <div class="card">
              <div class="card-header no-bg b-a-0">
                Datatables
              </div>
              <div class="card-block">
                <button type="button" class="btn btn-primary btn-icon loading-demo m-r-xs">
                  <i class="material-icons">
                    add
                  </i>
                  <span>
                    New Data
                  </span>
                </button>
              </div>
              <div class="card-block">
                <table class="table table-bordered datatable">
                  <thead>
                    <tr>
                      <th>
                        Name
                      </th>
                      <th>
                        Position
                      </th>
                      <th>
                        Office
                      </th>
                      <th>
                        Age
                      </th>
                      <th>
                        Start Date
                      </th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>

<?php include 'footer.php'; ?>