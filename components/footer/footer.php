<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Footer Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .footer {
      background-color: #00703c; /* Màu xanh đậm */
      color: white;
      padding: 40px 20px 20px;
    }
    .footer h6 {
      font-weight: bold;
      margin-bottom: 15px;
    }
    .footer a {
      color: white;
      text-decoration: none;
      font-size: 14px;
    }
    .footer a:hover {
      text-decoration: underline;
    }
    .footer-bottom {
      background-color: #ffffff;
      color: #00703c;
      text-align: center;
      font-size: 14px;
      padding: 10px 0;
      max-height: 55px;
    }
    .social-icons a {
      color: #00703c;
      font-size: 20px;
      margin: 0 8px;
    }
    @media (max-width: 768px) {
      .footer {
        text-align: center;
      }
      .footer .row > div {
        margin-bottom: 20px;
      }
    }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


</head>
<body>

<!-- Footer -->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <!-- Cột Địa chỉ -->
        <div class="col-md-4">
          <h6>ĐỊA CHỈ</h6>
          <p><strong>Trụ sở chính:</strong> Công ty Cổ Phần Phúc Long Heritage - ĐKKD: 0316 871719 do sở KHĐT TPHCM cấp lần đầu ngày 21/05/2021</p>
          <p><strong>Nhà máy:</strong> D_8D_CN Đường XE 1, Khu Công Nghiệp Mỹ Phước III, phường Mỹ Phước, thị xã Bến Cát, tỉnh Bình Dương, Việt Nam.</p>
          <p><strong>Địa chỉ:</strong> Phòng 702, Tầng 7, Tòa nhà Central Plaza, số 17 Lê Duẩn, phường Bến Nghé, quận 1, Hồ Chí Minh.</p>
          <p><strong>Hotline Đặt hàng:</strong> 1800 6779</p>
          <p><strong>Hotline Công ty:</strong> 1900 2345 18 (Bấm phím 0: Lễ Tân | phím 1: CSKH)</p>
          <p><strong>Email:</strong> sales@phuclong.masan.group.com<br>info2@phuclong.masangroup.com</p>
        </div>

        <!-- Cột Công ty -->
        <div class="col-md-2">
          <h6>CÔNG TY</h6>
          <p><a href="#">Giới thiệu công ty</a></p>
          <p><a href="#">Thư viện hình ảnh</a></p>
          <p><a href="#">Liên hệ</a></p>
          <p><a href="#">Hình ảnh Menu</a></p>
          <p><a href="#">QR</a></p>
        </div>

        <!-- Cột Tuyển dụng -->
        <div class="col-md-2">
          <h6>TUYỂN DỤNG</h6>
          <p><a href="#">HTCH</a></p>
          <p><a href="#">Kiosk</a></p>
          <p><a href="#">Văn phòng</a></p>
          <p><a href="#">Nhà máy</a></p>
        </div>

        <!-- Cột Hội viên -->
        <div class="col-md-2">
          <h6>HỘI VIÊN</h6>
          <p><a href="#">Câu hỏi thường gặp (FAQ)</a></p>
          <p><a href="#">Điều khoản và điều kiện</a></p>
          <p><a href="#">Chương trình hội viên</a></p>
          <p><a href="#">Điều khoản & Điều kiện Thẻ trả trước</a></p>
          <p><a href="#">Điều kiện sử dụng Thiệp Voucher</a></p>
        </div>

        <!-- Cột Điều khoản -->
        <div class="col-md-2">
          <h6>ĐIỀU KHOẢN SỬ DỤNG</h6>
          <p><a href="#">Chính sách bảo mật thông tin</a></p>
          <p><a href="#">Chính sách đặt hàng</a></p>
          <img src="https://via.placeholder.com/120x40?text=BCT" alt="Bộ Công Thương" class="img-fluid mt-2">
        </div>
      </div>
    </div>
  </div>

  <!-- Footer dưới -->
  
    <div class="footer-bottom d-flex justify-content-between align-items-center px-4" style="background-color: #ffffff; height: 55px;">
    <p class="mb-0" style="color: #00512a; font-size: 14px;">© Công ty CP Phúc Long Heritage 2025</p>
    <div class="social-icons d-flex align-items-center">
        <a href="#" class="mx-2" style="color: #00512a;"><i class="fab fa-facebook fa-lg"></i></a>
        <a href="#" class="mx-2" style="color: #00512a;"><i class="fab fa-instagram fa-lg"></i></a>
        <a href="#" class="mx-2" style="color: #00512a;"><i class="fab fa-youtube fa-lg"></i></a>
    </div>
    </div>


</footer>

</body>
</html>
