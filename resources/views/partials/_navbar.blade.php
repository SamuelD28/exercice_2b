<nav class='navbar navbar-expand-lg'>
    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav mr-auto'>
            <li class='nav-item active'>
                <a class='nav-link' href="{{  url('/') }}">{{ __('navbar.home') }}</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href="{{ url('/characters/create') }}">{{ __('navbar.create_character') }}</a>
            </li>
        </ul>
        <ul class='navbar-nav ml-auto'> 
            <li class='nav-item'>
                <div id='author' class='nav-link'>{{ __('navbar.author') }}</div>
            </li>      
        </ul>
    </div>
</nav>
