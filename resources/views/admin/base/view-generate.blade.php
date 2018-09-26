<table class="table table-bordered datatable">
  <thead>
    <tr>
      @foreach($inputs as $input)
      <th>{{ ucwords($input['name']) }}</th>
      @endforeach
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @for($i = 1; $i <= 10; $i++)
    <tr>
      @foreach($inputs as $input)
      <td>{{ ucwords($input['name'])}} {{$i}}</td>
      @endforeach
      <td>
        <button class="btn btn-sm btn-info">Edit</button>
        <button class="btn btn-sm btn-danger">Delete</button>
      </td>
    </tr>
    @endfor
  </tbody>
</table>