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
                    <a href="{{ url('admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="active">
                    <a href="{{ url('product') }}"> <i class="menu-icon fa fa-dashboard"></i>Product </a>
                </li>
                <li class="active">
                    <a href="transaction"> <i class="menu-icon fa fa-dashboard"></i>Transaction </a>
                </li>
                <li class="active">
                    <a href="{{ url('user') }}"> <i class="menu-icon fa fa-dashboard"></i>User </a>
                </li>
                {{-- <h3 class="menu-title">UI elements</h3><!-- /.menu-title --> --}}

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
