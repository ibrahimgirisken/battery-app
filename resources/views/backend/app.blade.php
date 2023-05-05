<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin</title>
    <link rel="stylesheet" href="/backend/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield("css")
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="{{route('index')}}"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{route('index')}}" class="brand-link">
            <img src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Test Test</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('index')}}" class="nav-link {{request()->is('admin/home') ?  'active':''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Anasayfa
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{request()->is('admin/blogs','admin/blog-add','admin/blog-edit','admin/blog-category','admin/blog-category-add','admin/blog-category-edit') ? 'menu-open':''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-blogger-b"></i>
                            <p>
                                Bloglar
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('blog-add')}}" class="nav-link {{request()->is('admin/blog-add') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog-edit')}}" class="nav-link {{request()->is('admin/blog-edit') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Düzenle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blogs')}}" class="nav-link {{request()->is('admin/blogs') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Liste</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog-category')}}" class="nav-link {{request()->is('admin/blog-category') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Kategori</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog-category-add')}}" class="nav-link {{request()->is('admin/blog-category-add') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Kategori Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog-category-edit')}}" class="nav-link {{request()->is('admin/blog-category-edit') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Kategori Düzenle</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{request()->is('admin/page-add','admin/pages') ? 'menu-open':''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-pager"></i>
                            <p>
                                Sayfalar
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('page-add')}}" class="nav-link {{request()->is('admin/page-add') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sayfa Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pages')}}" class="nav-link {{request()->is('admin/pages') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sayfa Listesi</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{request()->is('admin/slider-add','admin/sliders') ? 'menu-open':''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>
                                Slider
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('slider-add')}}" class="nav-link {{request()->is('admin/slider-add') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slider Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('sliders')}}" class="nav-link  {{request()->is('admin/sliders') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slider Listesi</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{request()->is('admin/menu-add','admin/menus') ? 'menu-open':''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-compass"></i>
                            <p>
                                Menüler
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('menu-add')}}" class="nav-link {{request()->is('admin/menu-add') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Menü Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('menus')}}" class="nav-link {{request()->is('admin/menus') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Menü Listesi</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{request()->is('admin/user-add','admin/users') ? 'menu-open':''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Kullanıcılar
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('user-add')}}" class="nav-link {{request()->is('admin/user-add') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kullanıcı Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users')}}" class="nav-link {{request()->is('admin/users') ?  'active':''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kullanıcı Listesi</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('settings')}}" class="nav-link {{request()->is('admin/settings') ?  'active':''}}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Site Ayarları
                            </p>
                        </a>
                    </li>


                </ul>
            </nav>
        </div>
    </aside>
@yield("content")
    <aside class="control-sidebar control-sidebar-dark">
    </aside>

    <footer class="main-footer">
        <strong>Copyright &copy; 2023</strong>
        All rights reserved.
    </footer>
</div>
<script src="/backend/plugins/jquery/jquery.min.js"></script>
<script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script src="/backend/dist/js/adminlte.js"></script>
<script src="/backend/dist/js/demo.js"></script>
<script src="/backend/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/backend/plugins/raphael/raphael.min.js"></script>
<script src="/backend/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/backend/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="/backend/plugins/chart.js/Chart.min.js"></script>
<script src="/backend/dist/js/pages/dashboard2.js"></script>
@yield("js")
</body>
</html>