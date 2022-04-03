$(document).on("submit", "[rent-form='true']", function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    var method = form.attr('method');
    var name = form.attr('name');
    $("[data-message]").removeClass().html("");
    var buttontxt;
    if ($("input[type=submit]", form).attr('value')) {
        buttontxt = $("input[type=submit]", form).attr('value');
        $("input[type=submit]", form).attr('disabled', true).val('Loading...');
    } else {
        buttontxt = $("button[type=submit]", form).text();
        $("button[type=submit]", form).attr('disabled', true).html('Loading...');
    }
    $("span.error-message", form).replaceWith("");

    $.ajax({
        url: url,
        method: method,
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(resp) {
            if ($("input[type=submit]", form).attr('value')) {
                $("input[type=submit]", form).attr('disabled', false).val(buttontxt);
            } else {
                $("button[type=submit]", form).attr('disabled', false).html(buttontxt);
            }
            if (resp.StatusCode == 1) {
                $.each(resp.ErrorMessage, function(key, val) {
                    $('[name="' + key + '"],[textarea="' + key + '"]', form).after('<span class="error-message">'+val+'</span>');
                });
            }else if(resp.StatusCode == 4) {

                location.replace(resp.url);

            }else if (resp.StatusCode == 0) {

                if (resp.Reload && resp.Reload == 'false') {
                    if (resp.loadurl) {
                        var url = resp.loadurl;
                        $.get(url).done(function(data) {
                            $("[hideloader]").replaceWith("");
                            $("[data-lead-content]").html(data);
                        }).fail(function() {
                            alert("Unexpected error! Try again.");
                        });
                    }
                    if (resp.DivReload == 'true') {

                    }

                } else {
                    setTimeout(function() {
                        window.location.reload();
                    }, 10);
                }
                if(resp.FormBlank){
                    if (resp.FormBlank == 'false') {

                    } else {
                        form[0].reset();
                    }
                }

                if(resp.OtpField){
                    if (resp.OtpField == 'true') {
                        $("#loginForm").addClass('hide');
                        $("#otpForm").removeClass('hide');
                    }else {
                        $("#loginForm").removeClass('hide');
                        $("#otpForm").addClass('hide');
                    }
                }
                $("[data-message]").addClass(resp.Class).attr('onClick', "this.classList.add('hide')").html(resp.Message);
            } else {
                $("[data-message]").addClass(resp.Class).attr('onClick', "this.classList.add('hide')").html(resp.Message);
            }

        },
        error: function(res) {
            alert("Unexpected error! Try again.");
            // price.reload();
        }
    });


});

$(document).on("click", "[rent-back='true']", function(e) {
    $("#loginForm").removeClass('hide');
    $("#otpForm").addClass('hide');
    $("[data-message]").addClass('hide');
});

$(document).on("click", "[rent-resent='true']", function(e) {

    $("#resend").attr('disabled', true).val('Loading...');
    let url = $("#url").val();

    let site_url =  url+'/customer/resend-otp';

    $.ajax({
        url: site_url,
        method: 'Post',
        data: '',
        success: function(resp) {
            $("#resend").attr('disabled', false).val('Resend OTP');
            if (resp.StatusCode == 1) {
                $.each(resp.ErrorMessage, function(key, val) {
                    $('[name="' + key + '"],[textarea="' + key + '"]', form).after('<span class="error-message">'+val+'</span>');
                });
            } else if (resp.StatusCode == 0) {

                if (resp.Reload && resp.Reload == 'false') {
                    if (resp.loadurl) {
                        var url = resp.loadurl;
                        $.get(url).done(function(data) {
                            $("[hideloader]").replaceWith("");
                            $("[data-lead-content]").html(data);
                        }).fail(function() {
                            alert("Unexpected error! Try again.");
                        });
                    }
                    if (resp.DivReload == 'true') {

                    }

                } else {
                    setTimeout(function() {
                        window.location.reload();
                    }, 10);
                }
                if(resp.FormBlank){
                    if (resp.FormBlank == 'false') {

                    } else {
                        form[0].reset();
                    }
                }

                if(resp.OtpField){
                    if (resp.OtpField == 'true') {
                        $("#loginForm").addClass('hide');
                        $("#otpForm").removeClass('hide');
                    }else {
                        $("#loginForm").removeClass('hide');
                        $("#otpForm").addClass('hide');
                    }
                }
                $("[data-message]").addClass(resp.Class).attr('onClick', "this.classList.add('hide')").html(resp.Message);
            } else {
                $("[data-message]").addClass(resp.Class).attr('onClick', "this.classList.add('hide')").html(resp.Message);
            }

        },
        error: function(res) {
            alert("Unexpected error! Try again.");
            // price.reload();
        }
    });

});

function get_city(city){

    const cityArray = city.split("-");

    $("[city-value]").val(cityArray[0]);
    $("[city-id]").val(cityArray[1]);

    //$("#cityModal").hide();

    let cityModal = new bootstrap.Modal(document.getElementById('cityModal'));
    cityModal.hide();
}

$(document).on("click", "[rent-cart-common='true']", function(e) {
    e.preventDefault();

    let method = $(this).attr('data-method');
    let url = $(this).attr('data-href');
    let data_reference_id = $(this).attr('data-reference-id');
    $("[data-message]").removeClass().html("");
    var buttontxt;

    $.ajax({
        url: url,
        method: method,
        data:{
            data_reference_id: data_reference_id
        },
        cache: false,
        success: function(resp) {

            if (resp.StatusCode == 1) {

            } else if (resp.StatusCode == 0) {

                if (resp.redirect_url){
                    location.replace(resp.redirect_url);
                }

                $("[header-cart-dropdown]").html('');
                $("[header-cart-count]").html(resp.header_cart_count);
                $("[header-cart-dropdown]").html(resp.header_cart_dropdown);


                $("[data-message]").addClass(resp.Class).attr('onClick', "this.classList.add('hide')").html(resp.Message);
            } else {
                $("[data-message]").addClass(resp.Class).attr('onClick', "this.classList.add('hide')").html(resp.Message);
            }

        },
        error: function(res) {
            alert("Unexpected error! Try again.");
            // price.reload();
        }
    });


});

$(document).on("click", "[rent-cart-update='true']", function(e) {
    e.preventDefault();
    $("[data-message]").removeClass().html("");
    let method = $(this).attr('data-method');
    let url = $(this).attr('data-href');
    let data_vehicle_id = $(this).attr('data-vehicle-id');

    let qty = $("[rent-qty]").val();

    $.ajax({
        url: url,
        method: method,
        data:{
            data_vehicle_id: data_vehicle_id,
            'qty':qty
        },
        cache: false,
        success: function(resp) {

            if (resp.StatusCode == 1) {

            } else if (resp.StatusCode == 0) {
                $("[data-message]").addClass(resp.Class).attr('onClick', "this.classList.add('hide')").html(resp.Message);
                window.location.reload();
            } else {
                $("[data-message]").addClass(resp.Class).attr('onClick', "this.classList.add('hide')").html(resp.Message);
            }

        },
        error: function(res) {
            alert("Unexpected error! Try again.");
            // price.reload();
        }
    });


});

