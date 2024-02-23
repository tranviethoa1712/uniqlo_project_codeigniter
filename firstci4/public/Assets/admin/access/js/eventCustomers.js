// document.getElementsByClassName("btn-del-confirm").addEventListener("click", function() {
//     // let url = this.dataset.url;
//     alert('heas')
// });

function delAlert(element){
    let url = element.dataset.url;
    if(!(confirm('Dữ liệu sẽ không được khôi phục, bạn chắc chứ?'))){
        return;
    }
    window.location.href = url;
}