<?php $currentValue = old($name, $value); ?>
<div class='form-group col-md-{{ $size }}'>
    <label for='input{{ $name }}'>{{ __($label) }}</label>
    <input type='{{ $type }}'
           class='form-control'
           id='input{{ $name }}'
           name='{{ $name }}'
           value='{{ $currentValue }}'
           placeholder='{{ __($label) }}...'>
</div>
