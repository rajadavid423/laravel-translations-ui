<!--* Nav header start *-->
<div class="nav-header">
    <div class="brand-logo">
        <a href="{{ route('home') }}">
            <b class="logo-abbr text-white">{{__('layout.title_sm')}} </b>
            <span class="logo-compact text-white">{{__('layout.title_sm')}}</span>
            <span class="brand-title text-white">
                {{__('layout.title')}}
            </span>
        </a>
    </div>
</div>
<!--* Nav header end *-->

<!--* Header start *-->
<div class="header">
    <div class="header-content clearfix">
        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                </div>
                <input type="search" class="form-control" placeholder="{{__('layout.search_dashboard')}}" aria-label="Search Dashboard">
                <div class="drop-down animated flipInX d-md-none">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown d-none d-md-flex">
                    <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                        @foreach(config('app.available_locales') as $key => $lang)
                            @if(session()->get('locale') == $lang)
                                <span>{{$key}}</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            @endif
                        @endforeach
                    </a>
                    <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                @foreach(config('app.available_locales') as $key => $lang)
                                <li><a href="{{ url('localization').'/'.$lang }}">{{$key}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{ asset('assets/images/user/1.png') }}" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="app-profile.html"><i class="icon-user"></i> <span>{{__('layout.profile')}}</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <i class="icon-envelope-open"></i> <span>{{__('layout.inbox')}}</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                    </a>
                                </li>

                                <hr class="my-2">
                                <li>
                                    <a href="page-lock.html"><i class="icon-lock"></i> <span>{{__('layout.lock_screen')}}</span></a>
                                </li>
                                <li><a href="page-login.html"><i class="icon-key"></i> <span>{{__('layout.logout')}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--* Header end ti-comment-alt *-->
