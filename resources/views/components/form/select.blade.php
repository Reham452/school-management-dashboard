@props([
    'label'=>'',
    'name'=>'',
    'options'=>[],
    'selected'=>'null',
    'useOld'=>'true',
    'firstOption'=>'اختر من القائمة'
])
<label for="{{$name}}">{{$label}}</label>
<select 
    id="{{$name}}"
    name="{{$name}}"
    {{ $attributes->merge([
        'class'=>'form-control'.
        ($errors->has($name) ? ' is-invalid' : '')
    ]) }}
    >
    <option value="">{{$firstOption}}</option>
     @foreach ($options as $value => $text)
        @php
            $current = $useOld ? old($name, $selected) : $selected;
        @endphp
        <option value="{{ $value }}" @selected((string) $value === (string) $current)>
            {{ $text }}
        </option>
    @endforeach
</select>
@error($name)
    <div class="text-danger mt-1">{{ $message }}</div>
@enderror