@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-end"><button type="button" class="btn btn-outline-primary"
                    data-bs-toggle="modal" data-bs-target="#modalId">
                    <i class="bi bi-plus"></i>
                </button>

                <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-fullscreen" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">Nhập Thông tin thợ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body bg-white">
                                <div class="row">
                                    <div class="col-md-8 col-lg-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-2">Avata</div>
                                            <div class="col-10">
                                            <label for="image_uploads"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                                            <input type="file" class='image_uploads' id="image_uploads" name="image_worker" class="input_imag"
                                                accept=".jpg, .jpeg, .png" />
                                                
                                                {{-- <input type="file" name="image_worker" id="image_worker"
                                                    class="form-control"> --}}
                                            </div>
                                        </div>
                                        <label for="" class="m-1">Tên Thợ: </label>
                                        <input type="text" name="name_worker" id="name_worker" class="form-control m-1">
                                        <div class="row">
                                            <div class="col-6"><label for="" class="m-1">Mã Thợ: </label>
                                                <input type="text" name="code_worker" id="code_worker"
                                                    class="form-control m-1">
                                            </div>
                                            <div class="col-6"><label for="" class="m-1">Kinh Nghiệm: </label>
                                                <input type="text" name="year_worker" id="year_worker"
                                                    class="form-control m-1">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mô Tả</label>
                                            <textarea class="form-control" name="description_worker" id="description_worker" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-12">
                                        <div class="preview_im_coment">
                                            <p>Chưa chọn hình.</p>
                                        </div>
                                        <div class="preview_info_w">
                                            <p>Chua có thông tin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="table-responsive">
                    <table
                        class="table table-striped-columns
                table-hover	
                table-bordered
                table-primary
                align-middle"
                        id="thoAll">
                        <thead class="table-light">
                            <caption>Trang thông tin giới thiệu thợ</caption>
                            <tr>
                                <th>STT</th>
                                <th>Mã</th>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Kinh Nghiệm</th>
                                <th>Chỉnh</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">

                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea#description_worker',
            height: 400
        });
        const input = document.querySelector('.image_uploads');
        const preview_im_coment = document.querySelector('.preview_im_coment');

        // input.style.opacity = 0;

        input.addEventListener('change', updateImageDisplay);

        function updateImageDisplay() {
            while (preview_im_coment.firstChild) {
                preview_im_coment.removeChild(preview_im_coment.firstChild);
            }

            const curFiles = input.files;
            if (curFiles.length === 0) {
                const para = document.createElement('p');
                para.textContent = 'Không chọn được hình ảnh';
                preview_im_coment.appendChild(para);
            } else {
                const list = document.createElement('ol');
                preview_im_coment.appendChild(list);

                for (const file of curFiles) {
                    const listItem = document.createElement('li');
                    const para = document.createElement('p');
                    if (validFileType(file)) {
                        para.textContent = `Hình ảnh: ${file.name}, kích thước ${returnFileSize(file.size)}.`;
                        const image = document.createElement('img');
                        image.src = URL.createObjectURL(file);

                        listItem.appendChild(image);
                        listItem.appendChild(para);
                    } else {
                        para.textContent = `Hình ${file.name}: Không đúng định dạng`;
                        listItem.appendChild(para);
                    }

                    list.appendChild(listItem);
                }

            }
            
        }


        const fileTypes = [
            "image/apng",
            "image/bmp",
            "image/gif",
            "image/jpeg",
            "image/pjpeg",
            "image/png",
            "image/svg+xml",
            "image/tiff",
            "image/webp",
            "image/x-icon"
        ];

        function validFileType(file) {
            return fileTypes.includes(file.type);
        }
        function returnFileSize(number) {
                if (number < 1024) {
                    return `${number} bytes`;
                } else if (number >= 1024 && number < 1048576) {
                    return `${(number / 1024).toFixed(1)} KB`;
                } else if (number >= 1048576) {
                    return `${(number / 1048576).toFixed(1)} MB`;
                }
            }
        function onchangeInfo()
        {
            
        }
    </script>
@endsection
