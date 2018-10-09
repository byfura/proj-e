<table class="table table-bordered datatable">
  <thead>
    <tr>
      @foreach($inputs as $input)
      <th>{{ ucwords($input['name']) }}</th>
      @endforeach
      @if (!isset($noaction))
      <th>Action</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @for($i = 1; $i <= 10; $i++)
    <tr>
      @foreach($inputs as $input)
        @if ($input['type'] == 'modal')
        <td><button class="btn btn-block btn-icon btn-primary" data-toggle="modal" data-target="#{{$input['popup']}}">
          <i class="material-icons">edit</i>
          <span>{{ ucwords($input['name']) }}</span>
        </button></td>
        @elseif ($input['type'] == 'int')
        <td>{{$i * 1000}}</td>
        @else
        <td>{{ ucwords($input['name'])}} {{$i}}</td>
        @endif
      @endforeach
      @if (!isset($noaction))
      <td>
        @if (!isset($noedit))
          @if (!isset($popup))
          <button class="btn btn-sm btn-info">Edit</button>
          @else
          <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#{{$popup}}">Edit</button>
          @endif
        @endif
        @if (!isset($nodelete))
        <button class="btn btn-sm btn-danger">Delete</button>
        @endif
      </td>
      @endif
    </tr>
    @endfor
  </tbody>
</table>