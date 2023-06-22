// var url_Host = 'http://192.168.1.22/';
var url_Host= 'https://data.thoviet.com/';
var url_Host1 = 'https://data.thoviet.com/';
var url_order = url_Host1 + 'api/addWork';
var url_comment = url_Host + 'api/comment';
var url_conver = url_Host + 'api/newConver';
var url_answer = url_Host + 'api/newAnswer';
var url_listWork = url_Host1 + 'api/list_work_show';
const ul2 = document.getElementById('output1');
const list = document.createDocumentFragment();

const hostNameWorker = 'http://192.168.1.21/api/';
const url_show_info = hostNameWorker+'allW?slug=a01';
const showInfo = document.getElementById('thongTinTho');
// const url = 'https://data.thoviet.com/api/showAllWork';
// const url = 'https://data.thoviet.com/api/list_work_show';
function load() {
    fetch(url_listWork, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            // 'Access-Control-Allow-Origin': '*',
        }
    }).then((response) => {
        return response.json();
    }).then((data) => {
        let authors = data;
        console.log(authors);
        authors.map(function (author) {

            const divItem = document.createElement('div');
            divItem.classList.add('loadListWork')
            divItem.innerHTML = `
						<span style="color:#0619f9;"><b>${author.work_content}</b></span> <br>
                        <span>${author.work_name_cus} - ${author.work_distric}</span> <br>
                        <span><b>${author.work_phone} </b></span>
						<hr>
                    `;
            ul2?.appendChild(divItem);
        });
    }).catch(function (error) {
        console.log(error);
    });
}
// output1.appendChild(list);
// console.log(list);
load();
config = {
    enableTime: false,
    dateFormat: "d-m-Y",
    minDate: "today"
}
flatpickr("input[type = datetime-local]", config);
const form1 = document.getElementById('orderForm');
form1.addEventListener('submit', async function (e) {
    e.preventDefault();

    const data1 = {
        // yccvCont: document.getElementById('cvCont').value + '&nbsp' + '(' + window.location.href + ')',
        yccvCont: document.getElementById('cvCont').value + '&nbsp' + '(' + window.location.href + ')',
        tenCont: document.getElementById('tenCont').value,
        sdtCont: document.getElementById('sdtCont').value,
        quanCont: document.getElementById('qCont').value,
        diaChiCont: document.getElementById('diaChiCont').value,
        dateCont: document.getElementById('dateCont').value,
        ghiChuCont: document.getElementById('ghiChuCont').value,
        from_cus: 1
    }

    try {
        const res = await fetch(url_order, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                // 'Access-Control-Allow-Origin': '*',
            },
            body: JSON.stringify(data1),
        })

        if (res.status !== 200) {
            const err = new Error("Error")
            throw err;
        }
        window.location.reload();

    } catch (error) {
        console.log(error);
    }
});
// function demo() {

// }
function calcHeight(value) {
    let numberOfLineBreaks = (value.match(/\n/g) || []).length;
    let newHeight = 20 + numberOfLineBreaks * 20 + 12 + 2;
    return newHeight;
}
let textarea = document.querySelector(".resize-ta");
textarea?.addEventListener("keyup", () => {
    textarea.style.height = calcHeight(textarea.value) + "px";
});
// --function comment
fetch(url_comment, {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json',
    }
}).then((response) => {
    return response.json();
}).then((data) => {
    data.map(function (conver) {
        const divItem = document.createElement('ul');
        var b = conver.comment_parent[0];
        var stringNameAvatar = b.name_comment;
        var a = stringNameAvatar.toUpperCase().slice(0, 1);
        var dateCmt = b.created_at;
    var c = dateCmt.slice(0,10);
        divItem.classList = "cmtUlNew"
        divItem.innerHTML =
            `<div class='par'>
      <div class="avatarCmtNew">
        <span class="avatarNew">${a}</span>
        <div class='comment_infoNew headCmtFormNew'> ${b.name_comment}</div>
      </div>
      <div class='comment_parent'>
      <div class="girdContentCmt">
            <div class="contentNew">${b.comment}
            <input type='hidden' id='name_comment${b.id}' value='${b.name_comment}' />
            <input type="hidden" id="text123" value="${b.id}" /></div>
            <div class="dataCmtNew">${c}</div>
        </div>`;
        if (b.img_comment_path) {
            divItem.innerHTML += `<div class="imgCmtNew">
          <a class="button" href="#popup${b.id}">
          <image src ='https://data.thoviet.com/${b.img_comment_path}' width='100px'/>

          </a>

          <div id="popup${b.id}" class="overlayNew">
            <div class="popupNew">
              <a class="closeNew" href="#">&times;</a>
              <image src ='https://data.thoviet.com/${b.img_comment_path}' width='300px'/>
            </div>
          </div>
          </div>`;
        }

        divItem.innerHTML += `
        <div class='button-repD-flex'>
        <button class='btn-replayNew btn btn-sm btn-outline-primary'
          onclick='showReplay(${b.id})'>Phản Hồi</button>
      </div>
      </div>
      <div class='replay${b.id}' style='display:none; margin-top :5px;'>
        <form id="formCmtTVReply" onsubmit="return handleReply(event, ${b.id} )" enctype="multipart/form-data">
          <div id="infoCmt">
            <div class="gridCmtNew">
              <div class="grid-item-cmtNew">
                <input type="text" name="name" id="fullNameReply${b.id}" class="form-controlFixNew" placeholder=" "
                  style="background-color: white;" required>
                <label class="labelFieldNew" for="name">Tên (<span style="color: red;">*</span>)</label>
              </div>
              <div class="grid-item-cmtNew">
                <input type="number" name="sdt" id="sdtReply${b.id}" class="form-controlFixNew" placeholder=" "
                  style="background-color: white;" required>
                <label class="labelFieldNew" for="name">Số điện thoại (<span style="color: red;">*</span>)</label>
              </div>
            </div>
            <div class="textarea-cmtNew">
              <textarea name="msg" id="textAreaCmtReply${b.id}" msg cols="30" rows="1" class="form-controlFixTextareaNew resize-ta"
                style="background-color: white; padding-top:5px; overflow: hidden;" placeholder=" " required></textarea>
              <label class="labelFieldTextareaNew" for="message">Nội dung (<span style="color: red;">*</span>)</label>
            </div>
            <div class="formBtnCmtNew">
              <button type="submit" id="postcmt" class="formBtn_Reply formBtn-CmtNew">Gửi</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
    `;
        for (const [key, value] of Object.entries(conver.answer)) {
            var stringAvatarAnswer = conver.answer[key].name_comment;
            var nameAva = stringAvatarAnswer.toUpperCase().slice(0, 1)
            if (typeof conver.answer[0] !== 'undefined') {
                divItem.innerHTML +=
                    `<div class='answerNew'>
          <div class="avatarCmtNew">
            <span class="avatarNew">${nameAva}</span>
            <div class='comment_infoNew'><em> ${conver.answer[key].name_comment}</em></div>
          </div>

          <input type='hidden' id='name_comment${conver.answer[key].id}' value='${conver.answer[key].name_comment}' />
          <input type='hidden' id='name_answer' value='${conver.answer[key].id}' />
          <div class='awnser_commentNew'>
            <div class='content'>${conver.answer[key].comment}</div>
          </div>
        </div>
        `;
            }
        }
        cmtEl?.appendChild(divItem);
    });

}).catch(function (error) {
    console.log(error);
});
const cmtEl = document.querySelector('.containerCmtNew');
const fullNameCmt = document.querySelector('#fullName');
const numberPhone = document.querySelector('#sdt');
const textareaCmtEl = document.querySelector('#textAreaCmt');
const image_uploadsCmt = document.querySelector('#image_uploads');


const formCmt = document.getElementById('formCmtTV');
formCmt?.addEventListener('submit', async function (e) {
    e.preventDefault();

    const formDataCmt = new FormData();
    formDataCmt.append('name_comment', document.getElementById('fullName').value);
    formDataCmt.append('phone_comment', document.getElementById('sdt').value);
    formDataCmt.append('comment', document.getElementById('textAreaCmt').value);
    formDataCmt.append('img_comment', document.getElementById('image_uploads').files[0]);
    formDataCmt.append('new_convertition', 1);

    try {
        const res = await fetch(url_conver, {
            method: 'POST',
            body: formDataCmt,
        })

        if (res.status !== 200) {
            const err = new Error("Error")
            throw err;
        }
        const data = await res.json()
        console.log('data', data);
        window.location.reload();

    } catch (error) {
        console.log(error);
    }
});
// const d = document.getElementById('text123').value
async function handleReply(e, id) {
    e.preventDefault();
    console.log("kiem tra", id);
    const formDataReply = new FormData();
    formDataReply.append('name_comment', document.getElementById(`fullNameReply${id}`).value);
    formDataReply.append('phone_comment', document.getElementById(`sdtReply${id}`).value);
    formDataReply.append('answer', document.getElementById(`textAreaCmtReply${id}`).value);
    // formDataReply.append('img_comment', document.getElementById(`image_uploadsReply${id}`).files[0]);
    formDataReply.append('id_comment', id);
    formDataReply.append('new_answer', 1);
    try {
        const res = await fetch(url_answer, {
            method: 'POST',
            body: formDataReply,
        })
        if (res.status !== 200) {
            const err = new Error("Error")
            throw err;
        }
        const dataReply = await res.json()
        window.location.reload();
        console.log(dataReply);
    } catch (error) {
        console.log(error);
    }
}

function showReplay(id) {
    console.log("show id", id);
    const replyCmtShow = document.getElementsByClassName('replay' + id).value;
    console.log(replyCmtShow);
    if ($('.replay' + id).css('display') === 'none') {
        $('.replay' + id).css('display', 'block');
    } else {
        $('.replay' + id).css('display', 'none');
    }
}
// function showReplay(id) {
//   console.log("show id", id);
//   const replyCmtShow = document.getElementsByClassName('replay' + id).value;
//   console.log(replyCmtShow);
//   if (replyCmtShow.setAttribute('display') === 'none') {
//   replyCmtShow.setAttribute('display', 'block');
//   } else {
//     replyCmtShow.setAttribute('display', 'none');
//   }
// }
$('input[type=number]').on('mousewheel', function (e) {
    $(e.target).blur();
});
// image Input upload
const input = document.getElementById('image_uploads');
const preview_img_coment = document.querySelector('.previewNew');
const fileTypes = [
    "image/jpeg",
    "image/png"
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
input.style.opacity = 0;
input.addEventListener('change', updateImageDisplay);
function updateImageDisplay() {
    while (preview_img_coment.firstChild) {
        preview_img_coment.removeChild(preview_img_coment.firstChild);
    }

    const curFiles = input.files;
    if (curFiles.length === 0) {
        const para = document.createElement('p');
        para.textContent = 'Không chọn được hình ảnh';
        preview_img_coment.appendChild(para);
    } else {
        const list = document.createElement('ol');
        preview_img_coment.appendChild(list);

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
// console.log(url_show_info);
// function showInfoWorker() {
//     fetch(url_show_info, {
//         method: 'GET',
//         headers: {
//             'Content-Type': 'application/json',
//             // 'Access-Control-Allow-Origin': '*',
//         }
//     }).then((response) => {
//         return response.json();
//     }).then((data) => {
//         let authors = data;
//         console.log(authors);
//         authors.map(function (author) {
//             const divItem = document.createElement('div');
//             divItem.classList.add('card-body')
//             divItem.innerHTML = `
//             <div class="avatarProfile">
//                 <img src="https://thoviet.com.vn/wp-content/uploads/2023/06/mrCo.png" alt="">
//             </div>
//             <div class="infoStaff ">
//             <input type="hidden" value="${author.id}" />
//                 <h5 class="card-title" id="tenKyThuatVien">KTV:${author.name_worker}
//                 </h5>
//                 <p class="card-text" id="maNV">Mã NV: ${author.code_worker}</p>
//                 <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: ${author.year_worker} năm</p>
//             </div>`;
//         showInfo.appendChild(divItem);

//         });
//     }).catch(function (error) {
//         console.log(error);
//     });
// }

// // output1.appendChild(list);
// // console.log(list);
// showInfoWorker();
