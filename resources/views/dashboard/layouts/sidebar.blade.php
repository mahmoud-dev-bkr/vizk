<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">
                <img src="{{ asset(getSettingValue('logo')) }}" style="width: 100px" alt="">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <br><br>
        {{-- Customer rate --}}
        <li class="menu-item {{ request()->routeIs('admin.user.request*') ? 'active' : '' }}">
            <a href="{{ route('admin.user.request') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-star "></i>
                <div data-i18n="rates">{{ __('User Request') }}</div>
            </a>
        </li>


        <li class="menu-item {{ request()->routeIs('admin.home') ? 'active' : '' }} ">
            <a href="{{ route('admin.home') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">{{ __('Dashboard') }}</div>
            </a>
        </li>


        <li
            class="menu-item {{ request()->routeIs('admin.slider*') || request()->is('admin-panel/metatags/home') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="home">{{ __('Home') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.slider*') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('Sliders') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('admin.meta', 'home') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'home') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- about --}}
        <li
            class="menu-item {{ request()->routeIs('admin.about') || request()->routeIs('admin.work') || request()->routeIs('admin.setting.profile') || request()->is('admin-panel/metatags/about') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="home">{{ __('About') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.about') ? 'active' : '' }}">
                    <a href="{{ route('admin.about') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('About Us') }}</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('admin-panel/metatags/about') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'about') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->routeIs('admin.course*') ? 'active' : '' }}">
            <a href="{{ route('admin.course') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="socials">{{ __('Course') }}</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin.lesson*') ? 'active' : '' }}">
            <a href="{{ route('admin.lesson') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="socials">{{ __('lesson') }}</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin.lecture*') ? 'active' : '' }}">
            <a href="{{ route('admin.lecture') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="socials">{{ __('lecture') }}</div>
            </a>
        </li>

        {{-- features --}}

        <li class="menu-item {{ request()->routeIs('admin.feature*') ? 'active' : '' }}">
            <a href="{{ route('admin.feature') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-diamond"></i>
                <div data-i18n="socials">{{ __('feature') }}</div>
            </a>
        </li>
        {{-- end features --}}

        {{-- social media --}}
        <li class="menu-item {{ request()->routeIs('admin.social*') ? 'active' : '' }}">
            <a href="{{ route('admin.social') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-share-alt"></i>
                <div data-i18n="socials">{{ __('Social Media') }}</div>
            </a>
        </li>

        {{-- counter --}}
        <li class="menu-item {{ request()->routeIs('admin.counter*') ? 'active' : '' }}">
            <a href="{{ route('admin.counter') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-tachometer"></i>
                <div data-i18n="counters">{{ __('Counters') }}</div>
            </a>
        </li>

        {{-- settings --}}
        <li class="menu-item {{ request()->routeIs('admin.setting') ? 'active' : '' }}">
            <a href="{{ route('admin.setting') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-abacus"></i>
                <div data-i18n="settings">{{ __('Settings') }}</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.language.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe"></i>
                <div data-i18n="languages">{{ _trans('Languages') }}</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.translation.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe"></i>
                <siv data-i18n="translations">{{ _trans('Translations') }}</siv>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('admin.meta', 'contact') ? 'active' : '' }}">
            <a href="{{ route('admin.meta', 'contact') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-text"></i>
                <div data-i18n="Analytics">{{ __('Contact Metatag') }}</div>
            </a>
        </li>

    </ul>
</aside>
