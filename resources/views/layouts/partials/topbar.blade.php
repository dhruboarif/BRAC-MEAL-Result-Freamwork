<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="#">
            <img src="{{ asset('assets/images/brac-logo-trn.png') }}" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="#">
{{--            <img src="{{ asset('assets/images/brac-logo-mini.png') }}" alt="logo" />--}}
            <img src="{{ asset('assets/images/brac-logo-trn.png') }}" alt="logo" class="logo-dark" />

        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">{{ config('app.name', 'BRAC Archiving System') }}</h5>

        @if(session()->has('module'))
            @if(session()->get('module') != '1')
                <div class="btn-mod"><a href="{{route('module', '1')}}">Module 01</a></div>
            @endif
            @if(session()->get('module') != '2')
                <div class="btn-mod"><a href="{{route('module', '2')}}">Module 02</a></div>
            @endif

            @if(session()->get('module') != '3')
                <div class="btn-mod"><a href="{{route('module', '3')}}">Module 03</a></div>
            @endif
        @endif

        <ul class="navbar-nav navbar-nav-right ml-auto">
            <form id="searchForm" class="search-form d-none d-md-block" method="get" action="{{route('search.index')}}">
                <i class="icon-magnifier"></i>
                <input type="text" class="form-control" name="search_query" value="{{old('search_query')}}" placeholder="Search Here">
            </form>

            <li class="nav-item">
                <a href="{{url('/home')}}" class="nav-link" data-title="Home"><i class="icon-home"></i></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link count-indicator message-dropdown" data-title="New Archives" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="icon-speech"></i>
                    <span class="count head-count total-count" style="display: none">0</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    <a href="#" class="dropdown-item py-3">
                        <p class="mb-0 font-weight-medium float-left">You have <span class="total-count">0</span> unseen archives </p>
                    </a>
                    <div class="dropdown-divider"></div>

                    <a href="{{route('archive.study.index')}}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <i class="icon-speech img-sm profile-pic text-dark" style="font-size: xx-large"></i>
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">
                                Study Archive
                                <span class="badge badge-pill badge-primary float-right">View all</span>
                            </p>
                            <p class="font-weight-light small-text">You've unseen <span class="study-count">0</span> new archive</p>
                        </div>
                    </a>

                    <a href="{{route('archive.document.index')}}"  class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <i class="icon-speech img-sm profile-pic text-dark" style="font-size: xx-large"></i>
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">
                                Document Archive
                                <span class="badge badge-pill badge-primary float-right">View all</span>
                            </p>
                            <p class="font-weight-light small-text">Go to document archive</p>
                        </div>
                    </a>

                    <a href="{{route('archive.learning-action.index')}}"  class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <i class="icon-speech img-sm profile-pic text-dark" style="font-size: xx-large"></i>
                        </div>
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis font-weight-medium text-dark">
                                LA Archive
                                <span class="badge badge-pill badge-primary float-right">View all</span>
                            </p>
                            <p class="font-weight-light small-text">Go to LA archive</p>
                        </div>
                    </a>

                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class=" icon-logout"></i>
                </a>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle ml-2" src="{{ asset((!empty(Auth::user()->image) && file_exists(Auth::user()->image)?Auth::user()->image : 'assets/images/avatar.png')) }}" alt="Profile image">
                    <span class="font-weight-normal capitalize"> {{ Auth::user()->name }} </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center"> <img class="img-lg rounded-circle" src="{{ asset((!empty(Auth::user()->image) && file_exists(Auth::user()->image)?Auth::user()->image : 'assets/images/avatar.png'))  }}" alt="Profile image">
                        <p class="mb-1 mt-3 capitalize">{{ Auth::user()->name }}</p>
                        <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
                    </div>
                    <a href="{{route('user.profile')}}" class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile </a>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="dropdown-item-icon icon-logout text-primary"></i>
                        Sign Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf</form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas"> <span class="icon-menu"></span> </button>
    </div>
</nav>

