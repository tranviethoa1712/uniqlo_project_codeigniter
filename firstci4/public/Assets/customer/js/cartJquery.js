
  $(document).ready(function () {
    $(".btn-dropdown__quantity").change(function() {
        let element = $(this);
        let idProduct = $(this).attr("data-id")
        let valueQuantity = element.val();
        $.ajax({
            type: "POST",
            url: "http://localhost/user/updateQuantityItemCart",
            data: {idProduct, valueQuantity},
        })
    })

    $(".btn-delete-product").click(function() {
        let element = $(this);
        let idProduct = $(this).attr("data-id")
        $.ajax({
            type: "POST",
            url: "http://localhost/user/deleteItemCart",
            data: {idProduct},
        })
    })

});
