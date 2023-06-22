<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    {{-- cdn format date  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{-- css  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styleProfile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reponsiveProfile.css') }}">
    {{-- flatpickr --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Styles -->
    @vite(['resources/js/app.js'])

</head>

<body>

    @yield('content')

    @yield('scripts')
</body>
<footer class="footerProfile">
    <div class="row container m-auto ">
        <div class="col-sm-12 col-lg-4 bgColorFooter">
            <h4>THÔNG TIN CÔNG TY</h4>
            <hr >
            <p>CÔNG TY TNHH DỊCH VỤ KỸ THUẬT THỢ VIỆT<br>
                MSDN: 0311158568<br>
                ĐC: 25/6 Phùng Văn Cung, Phường 2, Q. Phú Nhuận, TP.HCM<br>
                Số TK: 119 – 0000 – 80546  tại NH Công Thương Việt Nam – Chi nhánh 2 TP. HCM<br>
                Tổng đài: 1800 8122 (Miễn phí cước gọi) <br>
                Website: www.thoviet.com.vn <br>
                Email: info@thoviet.com.vn</p>
        </div>
        <div class="col-sm-12 col-lg-4 bgColorFooter bg-light">
            <h4>DỊCH VỤ SỬA CHỮA – BẢO HÀNH NHANH CHÓNG</h4>
            <hr>
            <p>ĐỘI THỢ ĐÔNG ĐẢO KHẮP CÁC QUẬN TPHCM, BÌNH DƯƠNG, ĐỒNG NAI <br>
                VPDD : Hẻm 184 Nguyễn Xí, Phường 26, Bình Thạnh<br>
                CN 1: 174 Đường K7, P12, Tân Bình<br>
                CN 2: 145a Linh Trung, Quận Thủ Đức<br>
                CN 3: 56 Đường 20, Nguyễn Thị Định, Quận 2<br>
                CN 4: 24 Đường 8, Tân Tạo A, Bình Tân<br>
                CN 5: 180/43A Bùi Văn Ba, Quận 7<br>
                CN 6: D2/7 ấp 4, Vĩnh Lộc A, Huyện Bình Chánh<br>
                CN 7: 138 Hà Đặc, Trung Mỹ Tây, Quận 12<br>
                CN 8: 104 Trần Bá Giao, Gò Vấp<br>
                CN 9: Tổ 5 Ấp 2, Xã Xuân Thới Thượng, Hóc Môn<br>
                CN 10: 189 Nguyễn Thị Lắng, Phước Vĩnh An, Củ Chi<br>
                CN 11: 227 KP Thống Nhất, Đường 13, TX. Dĩ An, Bình Dương<br>
                CN 12: 530 An Dương Vương, Quận 6<br>
                CN 13: 32 đường số 5, Bình Hưng, Bình Chánh<br>
                CN 14: 92 Nguyễn Sơn, Phường Phú Thọ Hòa, Quận Tân Phú<br>
                CN 15: 428 Dương Thị Mười, Quận 12<br>
                CN 16: 102 Nguyễn Hữu Cảnh, Binh Nhâm, Thuận An, Bình Dương</p>
        </div>
        <div class="col-sm-12 col-lg-4 bgColorFooter">
            <h4>Quy Trình Làm Việc</h4>
            <hr>
            <ul>
                <li>Thợ kiểm tra, thông báo lỗi và báo giá cho KH. </li>
                <li>KH xác nhận lỗi cần sửa, xác nhận giá như thợ đã báo. </li>
                <li>Kh đồng ý thợ tiến hành sửa chữa như đã báo trước.( Nếu KH không đồng ý, thợ không tiến hành công việc)</li>
                <li>KH kiểm tra, giám sát quá trình thợ làm việc.</li>
                <li> Sau khi hoàn thành, KH nghiệm thu và thanh toán tiền.</li>
                <li>Để tránh rắc rối và Khách hàng phàn nàn về sau , Thợ Việt mong Quý Khách kiểm tra, giám sát quá trình thợ thực hiện và nghiệm thu sau khi hoàn thành. Thợ Việt bảo hành như cam kết.</li>
            </ul>

        </div>
    </div>
</footer>
</html>
