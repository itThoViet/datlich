@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center bg-white">
            <div class="col-12 d-flex justify-content-end"><button type="button" class="btn btn-outline-primary"
                    data-bs-toggle="modal" data-bs-target="#addNew">
                    <i class="bi bi-plus"></i>
                </button>

                <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-fullscreen" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">Nhập Thông tin thợ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('create_new') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body bg-white">
                                <div class="row">
                                  
                                    <div class="col-md-8 col-lg-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-2">Avata</div>
                                            <div class="col-10">
                                            <label for="image_uploads"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                                            <input type="file" class='image_uploads' id="image_uploads" name="image_worker" class="input_imag"
                                                accept=".jpg, .jpeg, .png" required/>
                                            </div>
                                        </div>
                                        <label for="" class="m-1">Tên Thợ: </label>
                                        <input type="text" name="name_worker" id="name_worker" class="form-control m-1" required>
                                        <div class="row">
                                            <div class="col-6"><label for="" class="m-1">Mã Thợ: </label>
                                               <select name="code_worker" id="code_worker" class="form-control">
                                                    <option value="1"> Điện Nước </option>
                                                    <option value="2"> Điện Lanh </option>
                                                    <option value="3"> Đồ Gỗ</option>
                                                    <option value="4"> Năng Lượng </option>
                                                    <option value="5"> Xây Dựng </option>
                                                    <option value="6"> Tài Xế </option>
                                                    <option value="7"> Văn Phòng </option>
                                               </select>
                                            </div>
                                            <div class="col-6"><label for="" class="m-1">Kinh Nghiệm: </label>
                                                <input type="text" name="year_worker" id="year_worker"
                                                    class="form-control m-1" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mô Tả</label>
                                            <textarea class="form-control" name="description_worker" id="description_worker" rows="3" required></textarea>
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
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-11">
                <div class="table-responsive">
                    <table
                        class="table table-hover table-bordered "
                        id="thoAll">
                        <thead class="table-light">
                            <tr>
                                <th>STT</th>
                                <th>Mã</th>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Kinh Nghiệm</th>
                                <th>Link</th>
                                <th>Chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
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
                        para.textContent = `Kích thước ${returnFileSize(file.size)}.`;
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
        $(document).ready( function () {
        var table = $('#thoAll').DataTable({
            responsive: true,

            ajaxSource: "{{url('quanly/allw')}}",
            columns: [
                { data: 'id'},
                { data: 'code_worker'},
                { data: 'name_worker'},
                { data: null,
                    render:function(data,row,type)
                    {
                        return `<img src='{{asset('`+data.img_worker+`') }}'width='50px'>`;
                    }
                },
                { data: 'description_worker'},
                { data: 'year_worker'},
                { data: null,
                    render:function(data,row,type)
                    {
                        return `<a href="{{asset('`+data.slug+`')}}" class ="btn btn-sm btn-outline-primary">Xem</a>`;
                    }
                },
                { data:null,
                    render : function(data,row,type)
                    {
                        return `<!-- Modal trigger button -->
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit`+data.id+`">
                           <i class='bi bi-tools'></i>
                        </button>
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="edit`+data.id+`" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg " role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">Sửa thông tin cho thợ: `+data.name_worker+`</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('edit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body bg-white">
                               
                                        <div class="row">
                                            <div class="col-2">Avata mới: </div>
                                            <div class="col-10">
                                            <label for="image_uploads"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                                            <input type="file" class='image_uploads' id="image_uploads" name="image_worker" class="input_imag"
                                                accept=".jpg, .jpeg, .png" />
                                            </div>
                                            <input type='hidden' name='code_worker' value='`+data.slug+`'/>
                                            <input type='hidden' name='id' value='`+data.id+`'/>
                                        </div>
                                        <label for="" class="m-1">Tên Thợ: `+data.name_worker+`</label>
                                        <input type="text" name="name_worker" id="name_worker" class="form-control m-1" required placeholder='Tên Mới'>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mô Tả Mới:</label>
                                            <textarea class="form-control" name="description_worker" id="description_worker2" rows="3">`+data.description_worker+`</textarea>
                                        </div>
                                   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                      `;
                    } 
                },
        ]
        });});
        tinymce.init({
            selector: 'textarea#description_worker2',
            height: 400
        });
    </script>
@endsection
