jQuery(document).ready(function () {

    // Add Product 
    jQuery(".btn-add").click(function () {
        //csrf token generate
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //take the value from input field and put it into the variable
        var name = jQuery(".name").val();
        var des = jQuery(".des").val();
        var size = jQuery(".size").val();
        var color = jQuery(".color").val();
        var product_code = jQuery(".product_code").val();
        var cost_price = jQuery(".cost_price").val();
        var sale_price = jQuery(".sale_price").val();

        $.ajax({
            url: "/product/store",
            type: "POST",
            datatype: "JSON",
            data: {
                name: name,
                des: des,
                size: size,
                color: color,
                product_code: product_code,
                cost_price: cost_price,
                sale_price: sale_price
            },
            success: function (response) {
                // Error Genarate
                if (response.status == "faild") {
                    jQuery(".error_name").text(response.errors.name);
                    jQuery(".error_des").text(response.errors.des);
                    jQuery(".error_size").text(response.errors.size);
                    jQuery(".error_color").text(response.errors.color);
                    jQuery(".error_product_code").text(response.errors.product_code);
                    jQuery(".error_cost_price").text(response.errors.cost_price);
                    jQuery(".error_sale_price").text(response.errors.sale_price);
                }
                else {
                    jQuery(".msg").show().text("Added Successfully").fadeOut(1500);
                    show();
                    // Clear Form after send data
                    jQuery(".error_name").text("");
                    jQuery(".error_des").text("");
                    jQuery(".error_size").text("");
                    jQuery(".error_color").text("");
                    jQuery(".error_product_code").text("");
                    jQuery(".error_cost_price").text("");
                    jQuery(".error_sale_price").text("");
                    jQuery(".name").val("");
                    jQuery(".des").val("");
                    jQuery(".size").val("");
                    jQuery(".color").val("");
                    jQuery(".product_code").val("");
                    jQuery(".cost_price").val("");
                    jQuery(".sale_price").val("");

                }
            }
        });
    });

    // This function for show product data
    show();
    function show() {
        $.ajax({
            url: '/product/show',
            type: 'GET',
            datatype: 'JSON',
            success: function (response) {
                var data = '';
                var sl = 1;
                $.each(response.data, function (key, item) {
                    data += '<tr>\
                            <td>'+ sl + '</td>\
                            <td>'+ item.product_code + '</td>\
                            <td>'+ item.name + '</td>\
                            <td><div style="background:'+ item.color + ';width: 20px; height: 20px; border-radius: 50%;"></div></td>\
                            <td>'+ item.sale_price + '</td>\
                            <td>\
                                <button data-toggle="modal" data-target="#update-product" value="'+ item.id + '" class="btn-edit btn btn-info btn-sm"><i class="fa fa-edit"></i></button>\
                                <button data-toggle="modal" data-target="#delete-product" value="'+ item.id + '"class="btn-delete btn btn-danger btn-sm"><i class="fa fa-trash"><i>\
                            </td>\
                        </tr>';
                    sl++;
                })
                jQuery(".data").html(data);
            }
        });
    }


    // DELETE

    // this section for open modal and set id into modal's delete button
    jQuery(document).on("click", ".btn-delete", function () {
        var id = jQuery(this).val();
        jQuery(".delete").val(id);
    });

    // This section is for delete product data
    jQuery(document).on("click", ".delete", function () {
        var id = jQuery(this).val();
        $.ajax({
            url: '/product/destroy' + id,
            type: 'GET',
            datatype: 'JSON',
            success: function (response) {
                show();
                jQuery(".msg").show().text("Deleted Successfully").fadeOut(1500);
                jQuery("#delete-product").modal("hide");
                
            }
        });
    });

    // UPDATE

    //Bring Data from database to modal for edit and update
    jQuery(document).on("click", ".btn-edit", function () {
        var id = jQuery(this).val();
        jQuery(".btn-update").val(id);

        //take the value from input field and put it into the variable
        var name = jQuery("#name").val();
        var des = jQuery("#des").val();
        var size = jQuery("#size").val();
        var color = jQuery("#color").val();
        var product_code = jQuery("#product_code").val();
        var cost_price = jQuery("#cost_price").val();
        var sale_price = jQuery("#sale_price").val();

        $.ajax({
            url: '/product/edit' + id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                jQuery("#name").val(response.data.name);
                jQuery("#des").val(response.data.des);
                jQuery("#size").val(response.data.size);
                jQuery("#color").val(response.data.color);
                jQuery("#product_code").val(response.data.product_code);
                jQuery("#cost_price").val(response.data.cost_price);
                jQuery("#sale_price").val(response.data.sale_price);
                jQuery(".edit").val(response.data.id);
            }
        });

    });

    //for update data in modal

    jQuery(document).on("click", ".btn-update", function () {
        var id = jQuery(this).val();

        //stored updated data into the variable for push to database
        var name = $('#name').val();
        var des = $('#des').val();
        var size = $('#size').val();
        var color = $('#color').val();
        var product_code = $('#product_code').val();
        var cost_price = $('#cost_price').val();
        var sale_price = $('#sale_price').val();
    
        // csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/product/update/' + id,
            type: "POST",
            datatype: "JSON",
            data: {
                name: name,
                des: des,
                size: size,
                color: color,
                product_code: product_code,
                cost_price: cost_price,
                sale_price: sale_price
            },
            success: function (response) {
                show();
                jQuery(".msg").show().text("Updated Successfully").fadeOut(1500);
                jQuery("#edit-product").modal("hide");
                jQuery("#update-product").modal("hide");
            }
        });
    });
});
