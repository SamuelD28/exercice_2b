<?php $currentValue = old($name, $value); ?>
<div class="form-group col-md-{{$size}}">
    <label for="input{{ $name }}">@lang($label)</label>
    <input type="{{ $type }}"
           class="form-control"
           id="input{{ $name }}"
           name="{{ $name }}"
           value="{{ $currentValue }}"
           placeholder="@lang($label)...">
</div>