@props([
    'id',
    'name',
    'type'=>'text',
    'label'=>'',
    'placeholder'=>'',
    'value'=>''
])
<label>{{ $label }}</label>
<input 
name="{{$name}}" type="{{$type}}" placeholder="{{$placeholder}}"
class="form-control text-right @error($name) is-invalid @enderror" value="{{old($name,$value ?? '')}}"
{{ $attributes }}>
@error($name)
    <div class="alert alert-danger">{{$message}}</div>
@enderror