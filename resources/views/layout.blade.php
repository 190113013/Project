<body>
<div id="app">
    <div style="background-color: #343a40; " >
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
                <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              @switch($locale)
                              @case('en')
                              
                              English
                              @break
                              @case('ru')
                              
                              Русский язык
                              @break
                              @default
                              
                              Русский
                              @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"> English </a>
                            <a class="dropdown-item" href="ru"> Русский </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html>