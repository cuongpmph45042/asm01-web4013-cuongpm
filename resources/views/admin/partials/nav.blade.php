<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle ms-2">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li>
                <div class="d-none d-sm-inline-block mb-2 me-3 mt-1">
                    <span class="text-dark me-2">Xin chào: <a href="" class="text-decoration-none">{{ Auth::user()->username }}</a></span>
                    <img src="{{ Storage::url(Auth::user()->avatar) }}" class="avatar img-fluid rounded"
                        alt="" />
                </div>
            </li>
        </ul>
    </div>
</nav>


