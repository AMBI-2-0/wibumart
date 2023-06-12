$(document).ready(function () {
    $(".addToCartBtn").click(function (e) {
        e.preventDefault();

        var product_id = $(this)
            .closest(".product_data")
            .find(".product_id")
            .val();
        var product_qty = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                product_id: product_id,
                product_qty: product_qty,
            },
            success: function (response) {
                alert(response.status);
                window.location.href = response.redirect;
            },
        });
    });

    $(".increment-btn").click(function (e) {
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $(this).closest(".product_data").find(".qty-input").val(value);
        }
    });

    $(".decrement-btn").click(function (e) {
        e.preventDefault();

        var dec_value = $(this).closest(".product_data").find(".qty-input").val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).closest(".product_data").find(".qty-input").val(value);
        }
    });

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $(".delete-cart-item").click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest(".product_data").find(".product_id").val();
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                'product_id':product_id,
            },
            success: function (response) {
                window.location.reload();
                alert(response.status);
            }
        });
    });

    $(".changeQuantity").click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest(".product_data").find(".product_id").val();
        var qty = $(this).closest(".product_data").find(".qty-input").val();
        data = {
            'product_id' : product_id,
            'prod_qty' : qty,
        };
        $.ajax({
            method: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {
                window.location.reload();

            },
        });

    });
});
