
  $(document).ready(function () {
    $(".btn-dropdown__quantity").change(function() {
        let element = $(this);
        let idProduct = $(this).data('id')
        let valueQuantity = element.val();

        $.ajax({
            type: "POST",
            url: "views/endUser/customers/handle/updateQuantity.php",
            data: {idProduct, valueQuantity},
            // dataType: "dataType",
        })
    })

    $(".btn-delete-product").click(function() {
        let element = $(this);
        let idProduct = $(this).data('id')

        $.ajax({
            type: "POST",
            url: "views/endUser/customers/handle/deleteProductCart.php",
            data: {idProduct},
            // dataType: "dataType",
        })
    })

});
