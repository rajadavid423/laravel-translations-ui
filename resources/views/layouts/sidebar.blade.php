<!--* Sidebar start *-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('home') }}"><i class="icon-speedometer menu-icon"></i><span class="nav-text">{{__('layout.dashboard')}}</span></a></li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">{{__('layout.email')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./email-inbox.html">{{__('layout.inbox')}}</a></li>
                    <li><a href="./email-read.html">{{__('layout.read')}}</a></li>
                    <li><a href="./email-compose.html">{{__('layout.compose')}}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--* Sidebar end *-->
