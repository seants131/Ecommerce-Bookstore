<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Admin Dashboard</title>
  <!-- Liên kết đến file CSS của Laravel -->
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  {{-- Nếu layout của trang admin mất đi khúc 2 ở bên là do cái này --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  @yield('styles')
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
      <img alt="Logo" height="50" src="https://storage.googleapis.com/a1aa/image/yy48DwMpQKrgIJeo3EYrKGqDysDOSHFfD7fWyuz4r8UidAunA.jpg" width="100"/>
      <a class="active" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-home"></i>Trang chủ
      </a>
      <a href="{{ route('admin.danhmucs.index') }}">
        <i class="fas fa-list"></i>Danh mục
      </a>
      <a href="{{ route('admin.books.index') }}">
        <i class="fas fa-book"></i>Sách
      </a>
      <a href="#">
        <i class="fas fa-user"></i>Người dùng
      </a>
      <a href="#">
        <i class="fas fa-sign-out-alt"></i>Đăng xuất
      </a>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
      <!-- Header -->
      <div class="header">
        <div class="left">
          <img alt="Admin" height="50" src="https://storage.googleapis.com/a1aa/image/8RihQ3eduvT1ESU0VpKIetK0ebQ0VlXcLSuvM8Njyo8kdAunA.jpg" width="50"/>
          <span>Admin</span>
        </div>
        <div class="right">
          <i class="fas fa-envelope"></i>
          <i class="fas fa-bell"></i>
          <i class="fas fa-user"></i>
          <span class="username">Username</span>
        </div>
      </div>
      
      <!-- Content will be injected here -->
      @yield('content')
    </div>
  </div>
</body>
</html>
