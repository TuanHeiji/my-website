<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Farme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="pictures/logo.png"/>
    <style>
        a{
            text-decoration: none;
        }

    /* Tạo slow  */
    .navbar .nav-link {
           transition: color 0.3s ease;
    }

    /* Hiệu ứng hover màu trắng*/
    .navbar .nav-link:hover {
        color: white !important;
    
    }

    /* Menu đang active (giữ màu trắng) */
    .navbar .nav-link.active {
        color: white !important;  
    }

    /* Giữ dropdown menu mặc định */
    .navbar .dropdown-menu a:hover {
        background-color: #f8f9fa; /* Màu nền xám nhạt */
    }
    </style>
</head>
<body>
    <section class="myheader">
        <div class="container">
            <div class="row">
                <div class="col-md-2  d-flex justify-content-center align-items-center">
                    <a href="index.php">
                        <img src="pictures/logo.png" class="img-fruid" style="width: 100px; height: 100px;" alt="Logo">
                    </a>
                </div>

                <div class="col-md-4  d-flex justify-content-center align-items-center">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control " placeholder="Bạn muốn tìm gì?" 
                            aria-label="Bạn muốn tìm gì?" aria-describedby="basic-addon2">
                        <span class="input-group-text text-success" id="basic-addon2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-md">
                            <a href="https://www.facebook.com/tuanheiji.204" target="_blank">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="fs-2 text-success">
                                            <i class="fa-brands fa-facebook"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="text-dark">
                                            Admin <br>
                                        </div>
                                        <strong class="text-success">Tuấn(Heiji)</strong>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md">
                            <a href="login.php">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="fs-2 text-success">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="text-dark">
                                           Xin chào <br>
                                        </div>
                                        <strong class="text-success">Đăng nhập</strong>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>


                <div class="col-md-2  d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-md">
                            <a herf="" class="position-relative">
                                <div class="fs-2 text-success">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md">
                            <a herf="" class="position-relative">
                                <div class="fs-2 text-success">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mymenu bg-success">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <nav class="navbar navbar-expand-lg bg-success">
                            <div class="container-fluid">
                                
                                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link active text-white-50" aria-current="page" href="#">Trang chủ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-white-50" href="#">Sản phẩm</a>
                                            </li>
    
                                            <li class="nav-item">
                                                <a class="nav-link text-white-50" href="#">Thanh toán</a>
                                            </li>
    
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle text-white-50" href="#" 
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Cài đặt</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Thông tin cá nhân</a></li>
                                                    <li><a class="dropdown-item" href="#">Ngôn ngữ</a></li>
                                                    <li><a class="dropdown-item" href="#">Báo cáo</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Đăng xuất</a></li>
                                                </ul>
                                            </li>     
                                        </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
    </section>

    <section class="mycontent my-4">

    </section>

    <section class="myfooter text-white" style="background-color: #E7F5DC">
                <div class="container">
                    <div class="row">
                        <div class="col-sm d-flex justify-content-center">
                                    <div class="row">
                                        <div class="row">
                                            <a href="index.php" class="d-flex align-items-center">
                                                <img src="pictures/logo.png" class="img-fruid" style="width: 100px; height: 100px;" alt="Logo">
                                             </a>
                                        </div>

                                         <div class="row">
                                             <div class="row">
                                                <p class="text-dark">Cơ quan chủ quản: Công ty Cổ phần công nghệ Tuấn Heiji</p>
                                             </div>
                                             <div class="row">
                                                <div class="col text-dark">
                                                    <p>
                                                        <i class="fa-solid fa-phone"></i>
                                                        Tel: 085.956.4979
                                                    </p>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col text-dark">
                                                    <p>
                                                        <i class="fa-solid fa-envelope"></i>
                                                        Email: ttanh311.dev@gmail.com
                                                    </p>
                                                </div> 
                                             </div>
                                         </div>
                                         <div class="row">
                                            <div>
                                                <a href="#">
                                                    <i class=" fs-3 fa-brands fa-facebook text-primary"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fs-3 fa-brands fa-tiktok text-dark"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fs-3 fa-brands fa-youtube text-danger"></i>
                                                </a>
                                            </div>
                                            <p class="text-dark">© 2023-2024 myfarm.vn</p>                                    
                                         </div>
                                    </div>                      
                        </div>
                        <div class="col-sm d-flex justify-content-center">
                            <p class="py-4 text-dark">
                                <i class="fa-solid fa-location-dot"></i>
                                Trụ sở: Thôn Yên Chỉ - X.Thượng Hòa - H.Nho Quan - Ninh Bình
                                <br> <br>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3298.971546889599!2d105.7766821945298!3d20.29682378166068!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1732795870271!5m2!1svi!2s" 
                                width="100%" height="300px" allowfullscreen loading="lazy"
                                referrerpolicy="no-referrer-when-downrage" style="border: none;" >
                                </iframe>        
                            </p>  
                        </div>
                    </div>
                </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
