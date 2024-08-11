<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Admin</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">PuR</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
            </li>
            <li
                class="{{ Route::is('admin.project') || Route::is('admin.create.project') || Route::is('admin.edit.project') || Route::is('admin.detail.project') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.project') }}"><i class="fas fa-book"></i>
                    <span>Proyek/Portfolio</span></a>
            </li>
            <li
                class="{{ Route::is('admin.product') || Route::is('admin.create.product') || Route::is('admin.edit.product') || Route::is('admin.detail.product') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.product') }}"><i class="fas fa-file"></i>
                    <span>Produk/Layanan</span></a>
            </li>
            <li
                class="{{ Route::is('admin.news') || Route::is('admin.create.news') || Route::is('admin.edit.news') || Route::is('admin.detail.news') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.news') }}"><i class="fas fa-newspaper"></i>
                    <span>Berita/Acara</span></a>
            </li>
            <li
                class="{{ Route::is('admin.testimoni') || Route::is('admin.create.testimoni') || Route::is('admin.edit.testimoni') || Route::is('admin.detail.testimoni') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.testimoni') }}"><i class="fas fa-user"></i>
                    <span>Testimonial/Klien</span></a></li>
        </ul>
    </aside>
</div>
