var Site = function() {


    /*/define la pagina donde se encuentra segun routes*/
    var thispage = (window.location.href.replace(site_url, '')).trim();

    var menu = function() {
        /*/verifica si la ruta es vacia, asume que es home*/
        if(thispage == ''){
            $('#primary-menu ul li:first').addClass("current");
        }else{
            var urlarray = thispage.split('#');
            $('#primary-menu ul li').each(function (index, value) {
                var liname = $(this).data("url");
                var dataurl = '';
                switch (urlarray[0]){
                    case "gallery":
                        dataurl = "about";
                        break;
                    case "product":
                    case "cart":
                    case "checkout":
                        dataurl = "shop";
                        break;
                    default:
                        dataurl = urlarray[0];
                        break;
                }
                if(dataurl == liname){
                    $(this).addClass("current");
                }
            })
        }
    };

    var login = function () {
        $("#login-form-submit").on("click", function() {
            $("#login-form").validate({
                rules: {
                    'login-form-user': { required: true },
                    'login-form-password': { required: true }
                },
                highlight: function(element) {
                    $(element).addClass("error");
                },
                unhighlight: function(element) {
                    $(element).removeClass("error");
                },
                submitHandler: function(form) {
                    form.submit();
                }
            })
        });
    };

    var register = function () {
        $("#register-form-submit").on("click", function() {
            $("#register-form").validate({
                rules: {
                    'register-form-user': { required: true, email: true },
                    'register-form-password': { required: true, minlength: 6 }
                },
                messages:{
                    'register-form-user': {
                        required: "This field is required",
                        email: "Please enter a valid email"
                    },
                    'register-form-password': {
                        required: "This field is required",
                        minlength: "{0} characters at least"
                    }
                },
                errorPlacement: function(error, element) {
                    element.parents(".col_half").find(".help-block:first").html(error);
                },
                highlight: function(element) {
                    $(element).addClass("error");
                },
                unhighlight: function(element) {
                    $(element).removeClass("error");
                },
                submitHandler: function(form) {
                    form.submit();
                }
            })
        });
    };

    return {
        //FUNCION PRINCIPAL PARA INICIALIZAR LOS MODULOS
        init: function() {
            menu();
            login();
            register();
        }
    };

}();

jQuery(document).ready(function() {
    Site.init();
});
