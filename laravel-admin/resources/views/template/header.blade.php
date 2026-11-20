<!-- Topbar / Header -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-

Sekarang kita mulai pecah layout-nya menjadi **Header, Sidebar, Footer**, dan **Layout Utama** (kita buat satu file per langkah biar pelan-pelan ya).

**Langkah 7: Buat folder `template` dan file `header.blade.php`**

1. Di VS Code, buka folder **`resources`** → lalu klik panah folder **`views`** (pastikan masuk ke dalam **`views`** ya!).
2. Di dalam folder **`views`**, buat folder baru bernama **`template`**.
3. Di dalam folder **`template`**, buat file baru bernama **`header.blade.php`** (lokasi: `resources/views/template/header.blade.php`), lalu isi dengan kode ini:

```html
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <span class="font-weight-bold text-primary ml-2">Panel Laravel Admin</span>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <span class="nav-link text-gray-600 small">
                <i class="fas fa-user-circle fa-lg mr-1"></i> Admin
            </span>
        </li>
    </ul>
</nav>