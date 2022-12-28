<div class="side-header oh">
    <div class="cross-header-bar d-xl-none">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="site-header-container">
        <div class="side-logo" style="height:0px;">
            <a href="{{ url('/') }}">
                <img src="{{ url('public/assets/images/logo/logo.png') }}" alt="logo">
            </a>
        </div>
        <ul class="dashboard-menu">
            @foreach($menus as $key => $menu)
            <li>
                <a href="{{ $menu['slug'] }}" class="{{ $menu['class'] }}"><i class="{{$menu['icon']}}"></i>{{ $menu['name'] }}</a>
            </li>
            @endforeach 
            <li>
                <a href="javascript:void(0)"><i class="flaticon-right-arrow"></i>Logout</a>
            </li>
        </ul>
    </div>
</div>