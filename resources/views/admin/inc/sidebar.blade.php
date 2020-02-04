<!--- Sidemenu -->
<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
            <a href="{{ URL::route('dashboard.index') }}">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span> Dashboard </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('review.index') }}">
                <span class="icon"><i class="fas fa-search-dollar"></i></span>
                <span> Reviews </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('pricing.index') }}">
                <span class="icon"><i class="fas fa-tags"></i></span>
                <span> Pricing </span>
            </a>
        </li>

        <li>
            <a href="{{ URL::route('features.index') }}">
                <span class="icon"><i class="far fa-star"></i></span>
                <span> Features </span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);">
                <span class="icon"><i class="fas fa-newspaper"></i></span>
                <span> Articles </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ URL::route('article.index') }}">Article List</a>
                    <a href="{{ URL::route('article-category.index') }}">Article Page</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ URL::route('setting.index') }}">
                <span class="icon"><i class="fas fa-cog"></i></span>
                <span> Settings </span>
            </a>
        </li>

    </ul>

</div>
<!-- End Sidebar -->