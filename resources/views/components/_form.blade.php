<form action="{{ url($action) }}"
      method="post"
      enctype="multipart/form-data">

    <!-- Spoofing of the http method  -->
    <input type="hidden" name="_method" value="{{ $method }}" />
    <!-- Security token for protecting against cross site request forgery -->
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>" />

    <div class="form-row">
      @foreach($inputs as $input)
        @input([
          'size' => $input['size'],
          'type' => $input['type'],
          'name' => $input['name'],
          'label' => $input['label'],
          'value' => $input['value'],
          ])
        @endinput
      @endforeach
    </div>
    <input  type="submit"
            class="btn btn-primary"
            value="{{ $buttonText }}" />
</form>