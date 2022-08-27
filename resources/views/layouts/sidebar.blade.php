<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item @if(request()->routeIs('home')) active @endif">
                    <a href="{{route('home')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item @if(request()->routeIs('list-cate')) active  @endif">
                    <a href="{{route('list-cate')}}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Category List</span>
                    </a>
                </li>
                <li class="sidebar-item has-sub  @if(request()->routeIs('posts') || (request()->routeIs('create-post'))) active has-sub @endif">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Posts</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('posts')}}">Post List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('create-post')}}">Create Post</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item has-sub  @if(request()->routeIs('titles') || (request()->routeIs('create-title'))) active has-sub @endif">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Titles</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('titles')}}">Titles List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('create-title')}}">Create Title</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
