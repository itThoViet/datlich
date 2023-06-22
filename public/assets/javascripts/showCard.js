const hostNameWorker = 'http://192.168.1.21/api/';
const url_show_info = hostNameWorker + 'allW';
const showCardWorkerDN = document.getElementById('cardWorkerDN');
const showCardWorkerDL = document.getElementById('cardWorkerDL');
{/* <img class="card-img-top"src="http://192.168.1.21/${author.img_worker}" alt="Title"></img> */ }
console.log("test-1:", url_show_info);
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
        console.log("test-2:", authors);
        authors.map(function (author) {
            console.log("test-3:", author);
            const divItem = document.createElement('div');
            divItem.classList.add('col-2')
            divItem.innerHTML = `
            <a style="text-decoration: none;" href="${author.slug}" >
                <div class="card border-primary">
                    <input type="hidden" id="maNVSlug" value="${author.slug}" />
                    <input type="hidden" id="idInfo" value="${author.id}" />
                    <img class="card-img-top"src="https://thoviet.com.vn/wp-content/uploads/2023/06/mrCo.png" alt="Title">
                    <div class="card-body">
                        <h5 class="card-title" id="tenKyThuatVien">KTV:${author.name_worker}</h5>
                        <p class="card-text" id="maNV">Mã NV: ${author.code_worker}</p>
                        <p class="card-text" id="kinhNghiemNV">Kinh nghiệm: ${author.year_worker} năm</p>
                    </div>
                </div>
            </a>
            `;
            // var idNV = document.getElementById('maNV').value;
            // var idNV = document.getElementById('idInfo').value;
            // console.log("mã nhân viên:", idNV);
            if (author.slug === "A01"){
                showCardWorkerDN.appendChild(divItem);
                console.log("test-4:", author.slug);
                console.log(showCardWorkerDN);
            } else {
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
