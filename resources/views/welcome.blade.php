@extends('layouts.guest')
@section('title')
<title>Công ty TNHH DVKT Thợ Việt</title>
@endsection
@section('content')
<section class="bg-overlay ">
    <div class="text-center overlay">
        <h2 class="h2Profile">CÔNG TY TNHH DỊCH VỤ KỸ THUẬT THỢ VIỆT</h2>
        <p class="para-profile-overlay">Xây Dựng – Nội Thất <br> Điện Nước – Điện Lạnh </p>
        <a href="#datlich" type="button" class=" btnOverlayProfile">Đặt Lịch Ngay
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-cart4" viewBox="0 0 16 16">
                <path
                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg>
        </a>
    </div>
</section>
<section class="main-Indexprofile container">
    <div class="row">
        <div class="col-12">
            <div class="card text-center borderTopCardProfile">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <div class="d-flex justify-content-between">
                        <ul class="nav nav-tabs nav-tabs-profile" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#dienNuoc" type="button" role="tab" aria-controls="dienNuoc"
                                    aria-selected="true">Điện Nước</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#dienLanh" type="button" role="tab" aria-controls="dienLanh"
                                    aria-selected="false">Điện Lạnh</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                    data-bs-target="#doGo" type="button" role="tab" aria-controls="doGo"
                                    aria-selected="false">Đồ Gỗ</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                    data-bs-target="#xayDung" type="button" role="tab" aria-controls="xayDung"
                                    aria-selected="false">Xây Dựng</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                    data-bs-target="#VSBN" type="button" role="tab" aria-controls="VSBN"
                                    aria-selected="false">Vệ Sinh Bể
                                    Nước</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#vp"
                                    type="button" role="tab" aria-controls="vp" aria-selected="false">Nhân Viên Văn
                                    Phòng</button>
                            </li>

                        </ul>
                        <div class="input-group input-group-profile mb-3">
                            <input type="text" class="form-control" placeholder="Tìm Kiếm..."
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-search-heart-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                                </svg></span>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="dienNuoc" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row mt-3 ">
                                <a style="text-decoration: none;" href="{{ url('a01') }}" id="cardWorkerDN">
                                
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="dienLanh" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-3 " >
                                <a style="text-decoration: none;" href="{{ url('b01') }}" id="cardWorkerDL"></a>
                            </div>
                        </div>
                        <div class="tab-pane" id="doGo" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="xayDung" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="VSBN" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="vp" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Pham Van A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card border-primary">
                                        <img class="card-img-top "
                                            src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                                            alt="Title">
                                        <div class="card-body">
                                            <h5 class="card-title" id="tenKyThuatVien">Kỹ thuật viên: Nguyễn Văn A
                                            </h5>
                                            <p class="card-text" id="maNV">Mã nhân viên: A-01</p>
                                            <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: 11 Năm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{ url('assets/javascripts/showCard.js') }}"></script>
@endsection
