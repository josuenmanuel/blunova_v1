var Checkout = function() {

    var billing_check = function () {
        $('input[name="shipping_check"]').on('switchChange.bootstrapSwitch', function(event, state) {
            if(state){
                $('input[name^="checkout[shipping]"]').prop('disabled', true);
                $("#shipping_section").addClass("hidden");
            }else{
                $('input[name^="checkout[shipping]"]').prop('disabled', false);
                $("#shipping_section").removeClass("hidden");
            }
        });
    };

    var checkout = function () {
        $("button[name='checkout_submit']").on("click", function () {
            validate("checkout_form");
        })
    };

    var terms = function () {
        $("#checkout_terms").change(function () {
            if($("#checkout_terms").is(":checked")){
                $("#terms_confirm").addClass("hidden");
            }
        })
    };

    var validate = function (form) {
        $("#"+form).validate({
            rules:{
                'checkout[billing][name]': {required: true},
                'checkout[billing][lname]': {required: true},
                'checkout[billing][address]': {required: true},
                'checkout[billing][country]': {required: true},
                'checkout[billing][state]': {required: true},
                'checkout[billing][city]': {required: true},
                'checkout[billing][email]': {required: true, email: true},
                'checkout[billing][phone]': {required: true},
                'checkout[shipping][name]': {required: true},
                'checkout[shipping][lname]': {required: true},
                'checkout[shipping][address]': {required: true},
                'checkout[shipping][country]': {required: true},
                'checkout[shipping][state]': {required: true},
                'checkout[shipping][city]': {required: true},
                'checkout[shipping][email]': {required: true, email: true},
                'checkout[shipping][phone]': {required: true}
            },
            highlight: function(element) {
                $(element).addClass("error");
            },
            unhighlight: function(element) {
                $(element).removeClass("error");
            },
            submitHandler: function(form) {
                if($('#checkout_terms').prop('checked')){
                    alert("using GATEWAY: "+ $.trim($(".acctitle.acctitlec").text()));
                    form.submit();
                }else{
                    $("#terms_confirm").removeClass("hidden");
                }

            }
        })
    };

    return {
        //FUNCION PRINCIPAL PARA INICIALIZAR LOS MODULOS
        init: function() {
            checkout();
            billing_check();
            terms();
        }
    };

}();

jQuery(document).ready(function() {
    Checkout.init();
    jQuery(".bt-switch").bootstrapSwitch();
});
