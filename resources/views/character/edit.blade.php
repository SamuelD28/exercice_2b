@extends('layouts.master')

@section('content')
<h1>@lang('character.edit_title')</h1>
<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputName">@lang('character.name')</label>
      <input type="text"
             class="form-control"
             id="inputName"
             value="{{ $character->name }}"
             placeholder="@lang('character.name')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputWisdom">@lang('character.wisdom_trait')</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputWisdom"
             value="{{ $character->wisdom }}"
             placeholder="@lang('character.wisdom_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCharisma">@lang('character.charisma_trait')</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputCharisma"
             value="{{ $character->charisma }}"
             placeholder="@lang('character.charisma_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputDexterity">@lang('character.dexterity_trait')</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputDexterity"
             value="{{ $character->dexterity }}"
             placeholder="@lang('character.dexterity_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputConsitution">@lang('character.constitution_trait')</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputConsitution"
             value="{{ $character->constitution }}"
             placeholder="@lang('character.constitution_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputIntelligence">@lang('character.intelligence_trait')</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputIntelligence"
             value="{{ $character->intelligence }}"
             placeholder="@lang('character.constitution_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputStrength">@lang('character.strength_trait')</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputStrength"
             value="{{ $character->strength }}"
             placeholder="@lang('character.strength_trait')...">
    </div>
    <button type="submit" class="btn btn-primary">@lang('form.save')</button>
</form>
@endsection