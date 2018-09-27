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
      @if($input['type'] == 'number')
      <td>{{$i * 100000}}</td>
      @else
      <td>{{ ucwords($input['name'])}} {{$i}}</td>
      @endif
      @endforeach
      <td>
        <button class="btn btn-sm btn-info">Print</button>
      </td>
    </tr>
    @endfor
  </tbody>
</table>