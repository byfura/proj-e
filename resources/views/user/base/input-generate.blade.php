@foreach($inputs as $input)
	@if(!isset($input['type']) || $input['type'] == 'text')
	<div class="form-group col-12 row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-10">
      <input class="form-control" type="text" placeholder="Input {{ucwords($input['name'])}} ..." id="{{preg_replace('/\s+/','',strtolower($input['name']))}}">
    </div>
  </div>
  @elseif($input['type'] == 'date')
	<div class="form-group col-12 row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-10">
      <input class="form-control" type="date" id="{{preg_replace('/\s+/','',strtolower($input['name']))}}">
    </div>
  </div>
  @elseif($input['type'] == 'inputs')
  <div class="form-group col-12 row">
    <div class="card ml-3 mr-5 p-2 w-100">
      <div class="card-content">
        {{ ucwords($input['name']) }} :
        <div class="row">
          <label class="col-2 col-form-label">Input Text</label>
          <div class="col-10 col-form-label">
            <input class="form-control" type="text">
          </div>
          <label class="col-2 col-form-label">Input Number</label>
          <div class="col-10 col-form-label">
            <input class="form-control" type="number">
          </div>
          <label class="col-2 col-form-label">Input Date</label>
          <div class="col-10 col-form-label">
            <input class="form-control" type="date">
          </div>
          <label class="col-2 col-form-label">Input Checkbox</label>
          <div class="col-10 col-form-label row">
            @for($i=1;$i<=rand(12,18);$i++)
            <label class="col-2">
              <input class="form-checkbox" type="checkbox">
              <span>Check Box {{$i}}</span>
            </label>
            @endfor
          </div>
          <label class="col-2 col-form-label">Input Select</label>
          <div class="col-10 col-form-label">
            <select class="form-control">
              <option selected>...</option>
              <option>Select 1</option>
              <option>Select 2</option>
              <option>Select 3</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  @elseif ($input['type'] == 'select')
  <div class="form-group col-12 row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-10">
    	<select class="form-control" id="{{preg_replace('/\s+/','',strtolower($input['name']))}}">
    		<option selected>...</option>
    		<option>{{ ucwords($input['name']) }} 1</option>
    		<option>{{ ucwords($input['name']) }} 2</option>
    		<option>{{ ucwords($input['name']) }} 3</option>
    	</select>
    </div>
  </div>
  @elseif ($input['type'] == 'bool')
  <div class="form-group col-12 row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-10">
    	<select class="form-control" id="{{preg_replace('/\s+/','',strtolower($input['name']))}}">
    		<option selected>True</option>
    		<option>False</option>
    	</select>
    </div>
  </div>
  @elseif ($input['type'] == 'multiselect')
  <div class="form-group col-12 row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-10">
    	<select class="form-control multiselect" id="{{preg_replace('/\s+/','',strtolower($input['name']))}}" multiple>
    		<option>{{ ucwords($input['name']) }} 1</option>
    		<option>{{ ucwords($input['name']) }} 2</option>
    		<option>{{ ucwords($input['name']) }} 3</option>
    		<option>{{ ucwords($input['name']) }} 4</option>
    		<option>{{ ucwords($input['name']) }} 5</option>
    	</select>
    </div>
  </div>
  @elseif ($input['type'] == 'int')
  <div class="form-group col-12 row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-10">
      <input class="form-control" type="number" placeholder="Input {{ucwords($input['name'])}} ..." id="{{preg_replace('/\s+/','',strtolower($input['name']))}}">
    </div>
  </div>
  @elseif ($input['type'] == 'file')
  <div class="form-group col-12 row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-10">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
    </div>
  </div>
  @endif
@endforeach