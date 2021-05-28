document.querySelectorAll('.sidebar-submenu').forEach(e => {
    e.querySelector('.sidebar-menu-dropdown').onclick = (event) => {
        event.preventDefault()
        e.querySelector('.sidebar-menu-dropdown .dropdown-icon').classList.toggle('active')

        let dropdown_content = e.querySelector('.sidebar-menu-dropdown-content')
        let dropdown_content_lis = dropdown_content.querySelectorAll('li')

        let active_height = dropdown_content_lis[0].clientHeight * dropdown_content_lis.length

        dropdown_content.classList.toggle('active')

        dropdown_content.style.height = dropdown_content.classList.contains('active') ? active_height + 'px' : '0'
    }
})

let sidebar = document.querySelector('.sidebar')

document.querySelector('#mobile-toggle').onclick = () => {
    sidebar.classList.toggle('active')
}

document.querySelector('#sidebar-close').onclick = () => {
    sidebar.classList.toggle('active')
}

// const inpt = document.querySelector(".inpt");
// const fileName = document.querySelector(".file-name");
// const inputGambar = document.querySelector("#gambar_produk");
// const inputPreview = document.querySelector("#input_preview");
// const cancelBtn = document.querySelector("#cancel-btn");
// const img = document.querySelector(".box_img img");
// let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

// function defaultBtnActive(){
//     inputGambar.click();
//   }

// inputGambar.addEventListener("change", function(){
//     const file = this.files[0];
//     if(file){
//         const reader = new FileReader();
//         reader.onload = function(){
//             const result = reader.result;
//             img.src = result;
//             inpt.classList.add("active");
//         }

//         cancelBtn.addEventListener("click", function(){
//             img.src = " ";
//             inpt.classList.remove("active");
//         })
        
//         reader.readAsDataURL(file);
//     }
    
//     if(this.value){
//         let valueStore = this.value.match(regExp);
//         fileName.textContent = valueStore;
//     }

   
// });

// inputPreview.addEventListener("change", function(){
//     const file = this.files[0];
//     if(file){
//         const reader = new FileReader();
//         reader.onload = function(){
//             const result = reader.result;
//             img.src = result;
//             inpt.classList.add("active");
//         }

//         cancelBtn.addEventListener("click", function(){
//             img.src = " ";
//             inpt.classList.remove("active");
//         })
        
//         reader.readAsDataURL(file);
//     }
//     if(this.value){
//         let valueStore = this.value.match(regExp);
//         fileName.textContent = valueStore;
//     }
// });