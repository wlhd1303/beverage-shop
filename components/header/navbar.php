<?php
// File PHP bình thường nhé
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Navbar Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-custom {
      height: 60px;
    }
    .search-bar {
      width: 300px;
      background-color: #f1f3f5;
      border-radius: 30px;
      padding-left: 10px;
    }
    .search-bar input {
      border: none;
      background: transparent;
      outline: none;
    }
    .icon-btn {
      background-color: #f1f3f5;
      border-radius: 30px;
      padding: 5px 15px;
    }
    .navbar-icon {
      font-size: 22px;
      margin-left: 20px;
      color: #006400;
      cursor: pointer;
    }
    /* Menu dưới */
    .sub-navbar {
      height: 40px;
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      border-top: 1px solid #f1f1f1;
    }
    .sub-navbar a {
      margin: 0 20px;
      font-weight: 500;
      color: #555;
      text-decoration: none;
      font-size: 14px;
    }
    .sub-navbar a:hover {
      color: #006400;
    }
    @media (max-width: 768px) {
      .choose-delivery-btn {
        display: none;
      }
      .sub-navbar a {
        margin: 0 10px;
        font-size: 12px;
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

<!-- Navbar chính -->
<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-custom px-3">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="https://via.placeholder.com/40" alt="Logo" height="40">
    </a>

    <!-- Search Bar -->
    <div class="d-flex align-items-center flex-grow-1">
      <div class="search-bar d-flex align-items-center">
        <i class="fas fa-search text-muted"></i>
        <input class="form-control ms-2" type="search" placeholder="Bạn muốn mua gì...">
      </div>
    </div>

    <!-- Right Side -->
    <div class="d-flex align-items-center">
      <button class="btn icon-btn choose-delivery-btn d-flex align-items-center me-2">
        <i class="fas fa-motorcycle me-2"></i>
        <span class="text-success fw-bold">Chọn Phương Thức Nhận Hàng</span>
      </button>

      <i class="far fa-envelope navbar-icon"></i>
      <i class="far fa-user navbar-icon"></i>
    </div>
  </div>
</nav>

<!-- Navbar phụ -->
<div class="sub-navbar">
  <a href="#">TRANG CHỦ</a>
  <a href="#">MENU</a>
  <a href="#">SẢN PHẨM ĐÓNG GÓI</a>
  <a href="#">VỀ CHÚNG TÔI</a>
  <a href="#">KHUYẾN MÃI</a>
  <a href="#">HỘI VIÊN</a>
</div>

</body>
</html>
