<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

        <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <!-- ========== End of top menu left items ========== -->
    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- ========================================================= -->
      <!-- ========== Top menu right items (ordered left) ========== -->
      <!-- ========================================================= -->

      <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        @if (Auth::guest())
            <li><a href="{{ url(config('backpack.base.route_prefix').'/login') }}">{{ trans('backpack::base.login') }}</a></li>
            @if (config('backpack.base.registration_open'))
            <li><a href="{{ url(config('backpack.base.route_prefix').'/register') }}">{{ trans('backpack::base.register') }}</a></li>
            @endif
        @else
            <li><a href="{{ url('admin/menu_group') }}"><i class="fa fa-users"></i> <span>{{ trans('label.menu_group') }}</span></a></li>
            <li><a href="{{ url('admin/menu_item') }}"><i class="fa fa-users"></i> <span>{{ trans('label.menu_item') }}</span></a></li>
            <li><a href="{{ url('admin/video') }}"><i class="fa fa-film"></i> <span>{{ trans('label.videos') }}</span></a></li>
            <li><a href="{{ url('admin/contact') }}"><i class="fa fa-film"></i> <span>{{ trans('label.contacts') }}</span></a></li>
            <li><a href="{{ url('admin/user') }}"><i class="fa fa-users"></i> <span>{{ trans('label.users') }}</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
        @endif

       <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
