
  $(document).ready(function () {
    $(".btn-dropdown__quantity").change(function() {
        let element = $(this);
        let idProduct = $(this).attr("data-id")
        let valueQuantity = element.val();
        $.ajax({
            type: "POST",
            url: "http://localhost/user/updateQuantityItemCart",
            data: {idProduct, valueQuantity},
            // dataType: "dataType",
        })
    })

    $(".btn-delete-product").click(function() {
        let element = $(this);
        let idProduct = $(this).attr("data-id")
        // console.log('s2', idProduct)
        $.ajax({
            type: "POST",
            url: "http://localhost/user/deleteItemCart",
            data: {idProduct},
            // dataType: "dataType",
        })
    })

});
