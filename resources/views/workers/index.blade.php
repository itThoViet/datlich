@extends('layouts.guest')

@section('title')
    <title>Công ty TNHH DVKT Thợ Việt</title>
@endsection
@section('content')
<section id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/Anh-tap-the-Tho-Viet-2023.jpg"
                class="d-block imgCarousel" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/Bon-nuoc-NLMT.jpg" class="d-block imgCarousel"
                alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/May-lanh-gia-kho.jpg"
                class="d-block imgCarousel" alt="Third slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>
    <section class="text-center overlay">
        <h2 class="h2Profile">CÔNG TY TNHH DỊCH VỤ KỸ THUẬT THỢ VIỆT</h2>
        <p class="para-profile-overlay">Xây Dựng – Nội Thất <br> Điện Nước – Điện Lạnh </p>
        <a href="#datlich" type="button" class=" btnOverlayProfile">Đặt Lịch Ngay
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-cart4" viewBox="0 0 16 16">
                <path
                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg>
        </a>
        <a href="#fullName" type="button" class=" btnOverlayProfile">Hỏi - Đáp Ngay
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question" viewBox="0 0 16 16">
                <path d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745z"/>
                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0z"/>
              </svg>
        </a>
    </section>
<section class="main-profile container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 mb-4">
            <div class="card text-center borderTopCardProfile " id="thongTinTho">
                <div class="card-body">
                    <div class="avatarProfile">
                        {{-- <img src="http://192.168.1.21/{{$worker->img_worker}}" alt=""> --}}
                        <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/mrCo.png" alt="">
                    </div>
                    <div class="infoStaff ">
                    <input type="hidden" value="{{$worker->slug}}" />
                        <h5 class="card-title" id="tenKyThuatVien">KTV:{{$worker->name_worker}}
                        </h5>
                        <p class="card-text" id="maNV">Mã NV: {{$worker->code_worker}}</p>
                        <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: {{$worker->year_worker}} năm</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="card bgCardProfile borderTopCardProfile">
                <div class="card-body">
                    <div class="noticeProfile">
                        <ul class="ulNoticeProfile">
                            <li>Luôn luôn tư vấn, báo giá trước khi làm</li>
                            <li>Công ty quản lý thợ có lý lịch đảm bảo, giúp an toàn cho gia đình Bạn!</li>
                            <li>Phạm vi phục vụ: Tất cả các quận huyện TPHCM, Bình Dương (Dĩ An, Thuận An, Tp Thủ
                                Dầu Một)
                                <ul>
                                    <li>Dịch vụ dò tìm rò rỉ thất thoát nước: Phục vụ tòa nhà, nhà máy, khu công
                                        nghiệp khắp các tỉnh thành trên cả nước.</li>
                                    <li>Dịch vụ vệ sinh bể nước: Phục vụ tại TPHCM, Bình Dương, Đồng Nai, Vũng Tàu,
                                        Long An, Tây Ninh,…</li>
                                </ul>
                            </li>
                            <li>Thợ Việt nhận làm từ những việc nhỏ nhất: thay bóng đèn, vòi nước, sơn mảng tường,
                                khoan lắp thiết bị,..</li>
                            <li>Thợ Việt chuyên cung cấp các thiết bị vệ sinh, điện nước, máy lạnh với giá rẻ tại
                                kho.</li>
                            <li>Hoàn tiền nếu xử lý không dứt điểm!</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="datlich"></div>
            <div class="card borderTopCardProfile mt-4">
                <div class="card-body">
                    <div class="containerContact" >
                        <div class="gridContactLeft">
                            <h3>Tư Vấn - Báo Giá - Đặt Lịch Ngay</h3>
                            <form action="" id="orderForm" method="post">
                                <div class="contactWork">
                                    <div class="workCont">
                                        <label class="yccv">Yêu cầu công việc<span class="required "
                                                style="float: none !important;">(*)</span></label>
                                        <br>
                                        <input class="inputText" type="text" name="cvCont" id="cvCont" required
                                            placeholder='Ví dụ: Vệ sinh máy lạnh, sửa máy giặt,...'>
                                    </div>
                                    <div class="namePro">
                                        <label class="ten">Họ Và Tên</label>
                                        <input class="inputText" type="text" name="tenCont" id="tenCont"
                                            placeholder='Nguyễn Văn A'>
                                    </div>
                                </div>
                                <div class="contactWork">
                                    <div class="workCont">
                                        <label>Số điện thoại<span class="required "
                                                style="float: none !important;">(*)</span></label>
                                        <input class="inputTel" type="tel" name="sdtCont" id="sdtCont"
                                            placeholder="VD: 0903 532 938" required>
                                    </div>
                                    <div class="namePro">
                                        <label>Ngày làm<span class="required "
                                                style="float: none !important;">(*)</span></label>
                                        <input type="datetime-local" class="inputDate" name="dateCont" id="dateCont"
                                            placeholder="dd-mm-yyyy" required>
                                    </div>

                                </div>
                                <div class="contactWork">
                                    <div class="workCont">
                                        <label class="spanDiaChi">Địa Chỉ<span class="required "
                                                style="float: none !important;">(*)</span></label>
                                        <input type="text" class="inputText" name="diaChiCont"
                                            placeholder="Số nhà, tên đường" id="diaChiCont" required>
                                    </div>
                                    <div class="namePro">
                                        <label>Quận, Huyện<span class="required "
                                                style="float: none !important;">(*)</span></label> <br>
                                        <select id="qCont" required>
                                            <option value="">Chọn</option>
                                            <option value="Quận 1"> Quận 1</option>
                                            <option value="Quận 3"> Quận 3</option>
                                            <option value="Quận 4"> Quận 4</option>
                                            <option value="Quận 5"> Quận 5</option>
                                            <option value="Quận 6"> Quận 6</option>
                                            <option value="Quận 7"> Quận 7</option>
                                            <option value="Quận 8"> Quận 8</option>
                                            <option value="Quận 10"> Quận 10</option>
                                            <option value="Quận 11"> Quận 11</option>
                                            <option value="Quận 12"> Quận 12</option>
                                            <option value="TP Thủ Đức">Thành phố Thủ Đức</option>
                                            <option value="Bình Tân">Quận Bình Tân</option>
                                            <option value="Bình Thạnh">Quận Bình Thạnh</option>
                                            <option value="Gò Vấp"> Quận Gò Vấp</option>
                                            <option value="Phú Nhuận">Quận Phú Nhuận</option>
                                            <option value="Tân Bình">Quận Tân Bình</option>
                                            <option value="Tân Phú">Quận Tân Phú</option>
                                            <option value="Bình Chánh">Huyện Bình Chánh</option>
                                            <option value="Cần Giờ">Huyện Cần Giờ</option>
                                            <option value="Củ Chi"> Huyện Củ Chi</option>
                                            <option value="Hooc Môn">Huyện Hóc Môn</option>
                                            <option value="Nhà Bè"> Huyện Nhà Bè</option>
                                            <option value="Dĩ An"> Dĩ An - Bình Dương</option>
                                            <option value="Thuận An">Thuận An - Bình Dương</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="noteOrder">
                                    <label>Ghi Chú<span class="required "
                                            style="float: none !important;"></span></label>
                                    <input type="text" class="inputText" name="ghiChuCont " id="ghiChuCont"
                                        placeholder="VD: Mang thang cao,...">
                                </div>

                                <div class="buttonSubmit" style="text-align: center;">
                                    <button class="btnOverlayProfile" type="submit">Đặt Lịch</button>
                                </div>
                                <div class="notice">
                                    <span style="color: red;">(**)</span>
                                    <span><b>Thợ Việt sẽ liên hệ lại KH ngay từ 07h đến 17h. Nếu KH đặt lịch ngoài giờ làm việc, Thợ Việt sẽ liên hệ xác nhận vào sáng mai hoặc vào ngày KH yêu cầu thực hiện.</b></span>
                                </div>
                            </form>
                        </div>
                        <div class="gridContactRight" style="word-wrap: break-word;">
                            <div class="contentContactRight">
                                <h3 style="text-align: center; background-color:#3d89f8; color: white ">THỢ VIỆT ĐÃ
                                    TIẾP NHẬN VÀ XỬ LÝ</h3>
                                <div
                                    style="color:black; margin: auto; margin-top: 5px; width: fit-content; height: 440px; border-radius: 15px;  justify-content: space-between; overflow: hidden; z-index: 1; background-color: white">
                                    <marquee direction="up" height="100%" data-speed=100 scrollamount="10"
                                        hspace="15px" vspace="0%" class="card1">
                                        <div id="output1"></div>
                                    </marquee>
                                </div>
                            </div>
                        </div>

                    </div>
                    <marquee direction="left" height="100%" data-speed=100 scrollamount="15" hspace="15px"
                            vspace="0%" class="card1">
                            <div id="output1" class="py-4">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                    alt="" srcset="">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/lap-dat-duong-ong-nuoc-ppr.jpg"
                                    alt="" srcset="">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/lap-dat-den-chieu-sang-gara-oto.jpg"
                                    alt="" srcset="">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/han-ong-nuoc.jpg"
                                    alt="" srcset="">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/ve-sinh-pin-nang-luong-mat-troi.jpg"
                                    alt="" srcset="">
                                    <img
                                    src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-tu-dien.jpg"
                                    alt="" srcset="">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/han-xi-dichvutv.jpg"
                                    alt="" srcset="">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/lat-gach-toilet.jpg"
                                    alt="" srcset="">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/dichvutv.png"
                                    alt="" srcset="">
                                <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/dichvutv.jpg"
                                    alt="" srcset="">
                            </div>
                        </marquee>
                    <!-- comment  -->
                    <section class="formCmtNew"
                        style="width: 100%; margin: auto; background-color: white; padding: 15px;">
                        <form id="formCmtTV" action="" method="GET" enctype="multipart/form-data">
                            <h4 class="headCmtFormNew">Hỏi / Đáp - Tư Vấn</h4>
                            <hr style="margin-bottom:25px;">
                            <div id="infoCmtNew">
                                <div class="gridCmtNew">
                                    <div class="grid-item-cmtNew">
                                        <input type="text" name="name" id="fullName" class="form-controlFixNew"
                                            placeholder=" " style="background-color: white;" required>
                                        <label class="labelFieldNew" for="name">Tên (<span
                                                style="color: red;">*</span>)</label>
                                    </div>
                                    <div class="grid-item-cmtNew">
                                        <input type="number" name="sdt" id="sdt" class="form-controlFixNew"
                                            placeholder=" " style="background-color: white;" required>
                                        <label class="labelFieldNew" for="name">Số điện thoại (<span
                                                style="color: red;">*</span>)</label>
                                    </div>
                                </div>
                                <div class="textarea-cmtNew">
                                    <textarea name="msg" id="textAreaCmt" msg cols="30" rows="1"
                                        class="form-controlFixTextareaNew resize-ta"
                                        style="background-color: white; overflow: hidden;" placeholder=" "
                                        required></textarea>
                                    <label class="labelFieldTextareaNew" for="message">Nội dung (<span
                                            style="color: red;">*</span>)</label>
                                </div>
                                <div class="imgUploadNew">
                                    <div class="imgUpLeftNew">
                                        <label for="image_uploads">Tải ảnh lên</label>
                                        <input style="display: none;" type="file" class="file-inputNew"
                                            id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png"
                                            multiple style="opacity:0" />
                                    </div>
                                    <div class="imgUpRightNew">
                                        <div class="previewNew"></div>
                                    </div>
                                </div>
                                <div class="formBtnCmtNew">
                                    <button type="submit" id="postcmt" class="formBtn-CmtNew"
                                        style="font-size: 13px; padding: 0px 10px;">Bình Luận</button>
                                </div>
                            </div>
                        </form>

                        <div class="blog-commentNew">
                            <h4 class="headCmtFormNew"><span class="countClassNew"></span> Bình Luận</h4>
                            <hr />
                            <!-- comment  -->
                            <div class="containerCmtNew"></div>
                            <!-- end comment  -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{ url("assets/javascripts/jsProfile.js") }}"></script>
<script>
    config = {
        enableTime: false,
        dateFormat: "d-m-Y",
        minDate: "today"
    }
    flatpickr("input[type = datetime-local]", config);
</script>
@endsection


