<!-- Form used for displaying information about a character inside input fields -->
<?php
  // Pick the right action url based on the nature of the form.
  $action = "";
  $method = "";
  if(empty($character->name)){
    $action = url('characters');
    $method = "post";
  }else{
    $action = url('characters/' . $character->id);
    $method = "put";
  }
?>
<form action="{{ $action }}"
      method="post"
      enctype="multipart/form-data"
      novalidate>
      <!-- Spoofing of the http method  -->
      <input type="hidden" name="_method" value="{{ $method }}" />
      <!-- Security token for protecting against cross site request forgery -->
      <input type="hidden" name="_token" value="<?php echo csrf_token();?>" />
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputName">@lang('character.name')</label>
      <input required
             type="text"
             class="form-control"
             id="inputName"
             name="name"
             value="{{ old('name', $character->name) }}"
             placeholder="@lang('character.name')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputWisdom">@lang('character.wisdom_trait')</label>
      <input required
             max="18"
             min="3"
             type="number"
             class="form-control"
             id="inputWisdom"
             name="wisdom"
             value="{{ old('wisdom', $character->wisdom) }}"
             placeholder="@lang('character.wisdom_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCharisma">@lang('character.charisma_trait')</label>
      <input required
             max="18"
             min="3"
             type="number"
             class="form-control"
             id="inputCharisma"
             name="charisma"
             value="{{ old('charisma', $character->charisma) }}"
             placeholder="@lang('character.charisma_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputDexterity">@lang('character.dexterity_trait')</label>
      <input required
             max="18"
             min="3"
             type="number"
             class="form-control"
             id="inputDexterity"
             name="dexterity"
             value="{{ old('dexterity', $character->dexterity) }}"
             placeholder="@lang('character.dexterity_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputConsitution">@lang('character.constitution_trait')</label>
      <input required
             max="18"
             min="3"
             type="number"
             class="form-control"
             id="inputConsitution"
             name="constitution"
             value="{{ old('constitution', $character->constitution) }}"
             placeholder="@lang('character.constitution_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputIntelligence">@lang('character.intelligence_trait')</label>
      <input required
             max="18"
             min="3"
             type="number"
             class="form-control"
             id="inputIntelligence"
             name="intelligence"
             value="{{ old('intelligence', $character->intelligence) }}"
             placeholder="@lang('character.intelligence_trait')...">
    </div>
    <div class="form-group col-md-4">
      <label for="inputStrength">@lang('character.strength_trait')</label>
      <input required
             max="18"
             min="3"
             type="number"
             class="form-control"
             id="inputStrength"
             name="strength"
             value="{{ old('strength', $character->strength) }}"
             placeholder="@lang('character.strength_trait')...">
    </div>
    <input  type="submit"
            class="btn btn-primary"
            value="@lang('form.create')" />
</form>