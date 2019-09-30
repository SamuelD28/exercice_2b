<nav class="navbar navbar-expand-lg">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="/">@lang('navbar.brand')</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=" {{  url('/characters') }} ">@lang('navbar.home')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" {{ url('/characters/create') }} ">@lang('navbar.create_character')</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto"> 
      <li class="nav-item">
        <div id="author" class="nav-link">@lang('navbar.author')</div>
      </li>      
    </ul>
  </div>
</nav>