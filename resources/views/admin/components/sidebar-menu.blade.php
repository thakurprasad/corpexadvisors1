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
            <li>
                <a href="{{ url('/admin') }}" class="active"><i class="flaticon-man"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ url('/admin') }}" class="active"><i class="flaticon-man"></i>Admin</a>
            </li>
            <li>
                <a href="{{ url('/admin/services') }}"><i class="flaticon-coin"></i>Services</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="flaticon-right-arrow"></i>Logout</a>
            </li>
        </ul>
    </div>
</div>