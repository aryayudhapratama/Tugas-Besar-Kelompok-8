<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('admin') }}">Dashboard </a>
                </li>
                <li class="active">
                    <a href="{{ url('product') }}">Product </a>
                </li>
                <li class="active">
                    <a href="transaction">Transaction </a>
                </li>
                <li class="active">
                    <a href="{{ url('user') }}">User </a>
                </li>
                <li class="active">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    Login</form>
                    <a class="nav-link" href="{{ url('/') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a>
                </li>

                {{-- <h3 class="menu-title">UI elements</h3><!-- /.menu-title --> --}}

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
