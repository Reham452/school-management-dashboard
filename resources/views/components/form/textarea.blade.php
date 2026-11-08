@props([
    'id',
    'name',
    'placeholder'=>'',
    'rows'=>'3',
    'label'=>'',
    'value'=>''
])
<label>{{$label}}</label>
<textarea class="form-control @error($name) is-invalid @enderror" rows="{{$rows}}" name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}" {{ $attributes }}>{{old($name,$value??'')}}</textarea>