jQuery(document).ready(function () {
    jQuery(".addToCartBtn").click(function (e) {
        e.preventDefault();

        var product_id = jQuery(this)
            .closest(".product_data")
            .find(".product_id")
            .val();
        var product_qty = jQuery(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();

        jQuery.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
            },
        });

        jQuery.ajax({
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

    jQuery(".increment-btn").click(function (e) {
        e.preventDefault();

        var inc_value = jQuery(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            jQuery(this).closest(".product_data").find(".qty-input").val(value);
        }
    });

    jQuery(".decrement-btn").click(function (e) {
        e.preventDefault();

        var dec_value = jQuery(this).closest(".product_data").find(".qty-input").val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            jQuery(this).closest(".product_data").find(".qty-input").val(value);
        }
    });

    jQuery.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
    });

    jQuery(".delete-cart-item").click(function (e) {
        e.preventDefault();

        var product_id = jQuery(this).closest(".product_data").find(".product_id").val();
        jQuery.ajax({
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

    jQuery(".changeQuantity").click(function (e) {
        e.preventDefault();

        var product_id = jQuery(this).closest(".product_data").find(".product_id").val();
        var qty = jQuery(this).closest(".product_data").find(".qty-input").val();
        data = {
            'product_id' : product_id,
            'prod_qty' : qty,
        };
        jQuery.ajax({
            method: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {
                window.location.reload();

            },
        });

    });
});
