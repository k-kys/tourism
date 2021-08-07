
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- link google font "poppins" -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link fontawesome -->
    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/base.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/grid.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/css/responsive.css') }}" rel="stylesheet">

    <title>masonry</title>
</head>
<body>

    <div class="slider">
        <h1 class="slider-text translate" data-speed="0.1" >blog_masonry</h1>
        <img src="{{ URL::asset('frontend/img/img_slider/person.png') }} " class="person translate" data-speed="-0.25" alt="">
        <img src="{{ URL::asset('frontend/img/img_slider/slider1.jpg') }} " class="slider-img translate" data-speed="0.4" alt="">
    </div>
    <div class="container-blogmasonry">
        <div class="container-blogmasonry_list_content grid wide ">
            <div class="container-blogmasonry-title_item row">
                <div class="blogmasonry-title_item l-4 c-12 m12">
                    <a href="#" class="blogmasonry_item-img-link">
                        <img src="{{ URL::asset('frontend/img/img_item_tour/blog_masonry.jpg') }}" alt="" class="blogmasonry_item-img">
                    </a>
                </div>
                <div class="blogmasonry-title_item l-8 c-12 m-12">
                    <h2 class="blogmasonry_item-title"> Thể lệ chương trình ưu đãi </h2>
                    <div class="blogmasonry_item-date"><i class="far fa-calendar-alt"></i>
                        <span> 11/7/2021</span>
                    </div>
                    <div class="blogmasonry-title_list-content">
                        <p class="blogmasonry_content-text"> Nhằm gia tăng tiện tích cho khách hàng khi mua tour, Công ty Du lịch Vietravel tổ chức chương trình ưu đãi hấp dẫn cho khách hàng khi thanh toán bằng dịch vụ VNPay QR code.Nhằm gia tăng tiện tích cho khách hàng khi mua tour, Công ty Du lịch Vietravel tổ chức chương trình ưu đãi hấp dẫn cho khách hàng khi thanh toán bằng dịch vụ VNPay QR code Nhằm gia tăng tiện tích cho khách hàng khi mua tour...</p>
                    </div>
                    <div class="blogmasonry_content-detail">
                        <a href="" class="blogmasonry_detail-link">xem thêm <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="container-blogmasonry-title_item row">
                <div class="blogmasonry-title_item l-4 c-12 m12">
                    <a href="#" class="blogmasonry_item-img-link">
                        <img src="{{ URL::asset('frontend/img/img_item_tour/blog_masonry2.jpg') }}" alt="" class="blogmasonry_item-img">
                    </a>
                </div>
                <div class="blogmasonry-title_item l-8 c-12 m-12">
                    <h2 class="blogmasonry_item-title"> Hà Giang - sắc màu quyến rũ nơi rẻo cao phương bắc</h2>
                    <div class="blogmasonry_item-date"><i class="far fa-calendar-alt"></i>
                        <span> 11/7/2021</span>
                    </div>
                    <div class="blogmasonry-title_list-content">
                        <p class="blogmasonry_content-text">Không chỉ gây ấn tượng bởi vẻ đẹp thiên nhiên hoang sơ, Hà Giang còn là điểm đến hấp dẫn bởi các di tích lịch sử, hoạt động văn hóa và nền ẩm thực mộc mạc, tinh tế.</p>
                        <div class="blogmasonry_content-detail">
                            <a href="" class="blogmasonry_detail-link">xem thêm <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-blogmasonry-title_item row">
                <div class="blogmasonry-title_item l-4 c-12 m12">
                    <a href="#" class="blogmasonry_item-img-link">
                        <img src="{{ URL::asset('frontend/img/img_item_tour/blog_masonry1.jpg') }}" alt="" class="blogmasonry_item-img">
                    </a>
                </div>
                <div class="blogmasonry-title_item l-8 c-12 m-12">
                    <h2 class="blogmasonry_item-title"> Ưu đãi Tháng 5, cơ hội vàng săn tour du lịch hè giá tốt</h2>
                    <div class="blogmasonry_item-date"><i class="far fa-calendar-alt"></i>
                        <span> 11/7/2021</span>
                    </div>
                    <div class="blogmasonry-title_list-content">
                        <p class="blogmasonry_content-text">Không chỉ nổi tiếng với hàng loạt bờ biển xinh đẹp nhất nước, vùng đất Nam Trung bộ còn sở hữu những cung đường biển tuyệt đẹp khiến ai cũng mê mẩn. Để khởi động một mùa hè đầy hứng khởi, hành trình caravan vượt biển xuyên rừng mang đến cho bạn nhiều trải nghiệm gần gũi về cung đường biển nên thơ cùng những giá trị làm nên nét đặc sắc của vùng đất Nam Trung bộ. Mãn nhãn với cung đường huyền thoại...</p>
                        <div class="blogmasonry_content-detail">
                            <a href="" class="blogmasonry_detail-link">xem thêm <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('frontend/js/main.js') }}"></script>
</body>
</html>
