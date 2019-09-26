@extends('layouts.master')

@section('content')
<h1>@lang('personnage.edit_title')</h1>
<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Nom</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSagesse">@lang('personnage.wisdom_trait')</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputSagesse"
             value="{{ $personnage->sagesse }}"
             placeholder="@lang('personnage.wisdom_trait')">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSagesse">Charisme</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputCharisme"
             value="{{ $personnage->charisme }}"
             placeholder="Charisme">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSagesse">Dexterite</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputDexterite"
             value="{{ $personnage->dexterite }}"
             placeholder="Dexterite">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSagesse">Constitution</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputConsitution"
             value="{{ $personnage->constitution }}"
             placeholder="Consitution">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSagesse">Intelligence</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputIntelligence"
             value="{{ $personnage->intelligence }}"
             placeholder="Intelligence">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSagesse">Force</label>
      <input type="number"
             class="form-control"
             max="18"
             min="3"
             id="inputForce"
             value="{{ $personnage->force }}"
             placeholder="Force">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection