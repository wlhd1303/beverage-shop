<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <style>
        .navbar {
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            border-bottom: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            height: 50px;
        }
        .nav-link {
            color: #ffffff !important;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #ffd700 !important;
        }
        .btn-outline-dark {
            color: #ffffff !important;
            border-color: #ffffff !important;
        }
        .btn-outline-dark:hover {
            background-color: #ffffff !important;
            color: #ff7e5f !important;
        }
        .btn-link {
            color: #ffffff !important;
        }
        .btn-link:hover {
            text-decoration: underline !important;
        }
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #ff0000;
            color: #ffffff;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
        }
        .navbar-collapse {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-right {
            display: flex;
            align-items: center;
            gap: 10px; /* Add spacing between buttons */
        }
    </style>
    <title>Beverage Shop</title>
</head>
<body id="page-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="#">
                <img src="drink-logo.png" alt="Logo" loading="lazy">
            </a>

            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarButtonsExample"
                aria-controls="navbarButtonsExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
                style="border: none;"
            >
                <i class="fas fa-bars text-white"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>

                <!-- Right buttons -->
                <div class="navbar-right">
                    <button type="button" class="btn btn-link px-3">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark">
                        Sign up
                    </button>
                    <a href="cart.php" class="btn btn-outline-dark position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        
                    </a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>