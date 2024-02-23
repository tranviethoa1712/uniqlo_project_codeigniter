// vì không có quá nhiều event để xử lý nên sẽ để chung
$('#change-password').change(function () {
    let status = !$(this).is(":checked");
    showChangePass(status);
});

$('#reset').change(function () {
    showChangePass(true);
});

function showChangePass(status){ 
    $('#password-user').attr('readonly', status);
    $('#password-confirm-user').attr('readonly', status);

    $('#password-user').val('');
    $('#password-confirm-user').val('');
}
