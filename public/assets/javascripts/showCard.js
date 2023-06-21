const hostNameWorker = 'http://192.168.1.21/api/';
const url_show_info = hostNameWorker+'allW';
const showCardWorkerDN = document.getElementById('cardWorkerDN');
const showCardWorkerDL = document.getElementById('cardWorkerDL');
console.log("test-1:",url_show_info);
function loadCardWorker() {
    fetch(url_show_info, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            // 'Access-Control-Allow-Origin': '*',
        }
    }).then((response) => {
        return response.json();
    }).then((data) => {
        let authors = data;
        console.log("test-2:",authors);
        authors.map(function (author) {
            console.log("test-3:",author);
            const divItem = document.createElement('div');
            divItem.classList.add('col-2')
            divItem.innerHTML = `
                <div class="card border-primary">
                    <input type="hidden" value="${author.slug}" />
                    <img class="card-img-top "
                        src="https://thoviet.com.vn/wp-content/uploads/2023/06/sua-he-thong-bom-nuoc.jpg"
                        alt="Title">
                    <div class="card-body">
                        <h5 class="card-title" id="tenKyThuatVien">KTV:${author.name_worker}
                        </h5>
                        <p class="card-text" id="maNV">Mã NV: ${author.code_worker}</p>
                        <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: ${author.year_worker} năm</p>
                    </div>
                </div>
            `;
            if (author.slug === 'a01') {
                showCardWorkerDN.appendChild(divItem);
                console.log("test-4:",author.slug);
            }else{
                 showCardWorkerDL.appendChild(divItem);
            }

        // showCardWorkerDL.appendChild(divItem);

        });
    }).catch(function (error) {
        console.log(error);
    });
}

// output1.appendChild(list);
// console.log(list);
loadCardWorker();
