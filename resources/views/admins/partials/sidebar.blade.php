<div class="app-sidebar__inner">
    <ul class="vertical-nav-menu">
        <li class="app-sidebar__heading">{{__('ADMINS')}}</li>
        <li class="{{Request::segment(2)=='dashboards' ? 'mm-active' :''}}">
            <a href="">
                <i class="metismenu-icon pe-7s-display1"></i>
                DASHBOARD
            </a>
        </li>
        <li class="{{Request::segment(2)=='courses' ? 'mm-active' :''}}">
            <a href="">
                <i class="metismenu-icon pe-7s-notebook"></i>
                Khoá học
                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul class="{{Request::segment(1)=='banners' ? 'mm-show' :''}}">
                <li>
                    <a href="{{route('admins.banners.index')}}" class="{{Request::segment(1)=='banners' ? 'mm-active' :''}}">
                        <i class="metismenu-icon"></i>
                        Banners
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
