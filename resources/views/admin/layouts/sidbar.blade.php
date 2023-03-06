<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="nav-item has-sub  " style="">
            <a class="d-flex align-items-center" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-pie-chart">
                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                </svg>
                <span class="menu-title text-truncate" data-i18n="Charts">التصينفات</span></a>
            <ul class="menu-content">
                <li class="nav-item {{ request()->routeIs('category.index') ? 'active' : '' }} ">
                    <a class="d-flex align-items-center" href="{{ route('category.index') }}">
                        <i data-feather="file-text"></i><span class="menu-title text-truncate">التصينفات</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-sub  " style="">
            <a class="d-flex align-items-center" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-pie-chart">
                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                </svg>
                <span class="menu-title text-truncate" data-i18n="Charts">الاخبار</span></a>
            <ul class="menu-content">
                <li class="nav-item {{ request()->routeIs('post.index') ? 'active' : '' }} ">
                    <a class="d-flex align-items-center" href="{{ route('post.index') }}">
                        <i data-feather="file-text"></i><span class="menu-title text-truncate">الاخبار</span>
                    </a>
                </li>
            </ul>
        </li>


    </ul>
</div>
