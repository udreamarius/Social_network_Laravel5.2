@if (!isset($is_guest))
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">Chat</a>
                    <a class="navbar-brand" href="#">Blog</a>
                    <a class="navbar-brand" href="#">Contact</a>
                </div>
            </div>
        </nav>
    </header>
@else

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('dashboard') }}">Chat</a>
                    <a class="navbar-brand" href="#">Blog</a>
                    <a class="navbar-brand" href="#">Contact</a>
                </div>
           

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('account') }}">Account</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                                               
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endif
