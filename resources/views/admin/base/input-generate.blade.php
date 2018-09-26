@foreach($inputs as $input)
	@if(!isset($input['type']) || $input['type'] == 'text')
	<div class="form-group row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-xs-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-xs-10">
      <input class="form-control" type="text" placeholder="Input {{ucwords($input['name'])}} ..." id="{{preg_replace('/\s+/','',strtolower($input['name']))}}">
    </div>
  </div>
  @elseif ($input['type'] == 'select')
  <div class="form-group row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-xs-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-xs-10">
    	<select class="form-control" id="{{preg_replace('/\s+/','',strtolower($input['name']))}}">
    		<option selected>...</option>
    		<option>{{ ucwords($input['name']) }} 1</option>
    		<option>{{ ucwords($input['name']) }} 2</option>
    		<option>{{ ucwords($input['name']) }} 3</option>
    	</select>
    </div>
  </div>
  @elseif ($input['type'] == 'multiselect')
  <div class="form-group row">
    <label for="{{ preg_replace('/\s+/','',strtolower($input['name'])) }}" class="col-xs-2 col-form-label">{{ ucwords($input['name']) }}</label>
    <div class="col-xs-10">
    	<select class="form-control multiselect" id="{{preg_replace('/\s+/','',strtolower($input['name']))}}" multiple>
    		<option>{{ ucwords($input['name']) }} 1</option>
    		<option>{{ ucwords($input['name']) }} 2</option>
    		<option>{{ ucwords($input['name']) }} 3</option>
    		<option>{{ ucwords($input['name']) }} 4</option>
    		<option>{{ ucwords($input['name']) }} 5</option>
    	</select>
    </div>
  </div>
  @endif
@endforeach