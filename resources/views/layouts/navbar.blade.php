<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-11 col-xl-2 site-logo">
                <h1 class="mb-0"><a href="{{ url('/') }}" class="text-white h2 mb-0">{{ config('app.name') }}</a>
                </h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                        @if (url()->current() == url('/') || url()->current() == url('/#section-home') || url()->current() == url('/#section-1'))
                            <li><a href="{{ url('/#section-home') }}" class="nav-link">Home</a></li>
                            <li><a href="{{ url('/#section-1') }}" class="nav-link">Pulau</a></li>
                        @else
                            <li><a href="{{ url('/#section-home') }}" class="nav-link"><i class="fa fa-arrow-left"></i> Kembali</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                    href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a>
            </div>
        </div>
    </div>
    </div>
</header>
