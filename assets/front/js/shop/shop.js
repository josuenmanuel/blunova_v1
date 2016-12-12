var Shop = function() {

    var widgets = function() {
        $('#shop').isotope({
            transitionDuration: '0.65s',
            getSortData: {
                name: '.product-title',
                price_lh: function( itemElem ) {
                    if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
                        var price = $(itemElem).find('.product-price ins').text();
                    } else {
                        var price = $(itemElem).find('.product-price').text();
                    }

                    priceNum = price.split("$");

                    return parseFloat( priceNum[1] );
                },
                price_hl: function( itemElem ) {
                    if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
                        var price = $(itemElem).find('.product-price ins').text();
                    } else {
                        var price = $(itemElem).find('.product-price').text();
                    }

                    priceNum = price.split("$");

                    return parseFloat( priceNum[1] );
                }
            },
            sortAscending: {
                name: true,
                price_lh: true,
                price_hl: false
            }
        });

        $('.custom-filter:not(.no-count)').children('li:not(.widget-filter-reset)').each( function(){
            var element = $(this),
                elementFilter = element.children('a').attr('data-filter'),
                elementFilterContainer = element.parents('.custom-filter').attr('data-container');

            elementFilterCount = Number( jQuery(elementFilterContainer).find( elementFilter ).length );

            element.append('<span>'+ elementFilterCount +'</span>');

        });

        $('.shop-sorting li').click( function() {
            $('.shop-sorting').find('li').removeClass( 'active-filter' );
            $(this).addClass( 'active-filter' );
            var sortByValue = $(this).find('a').attr('data-sort-by');
            $('#shop').isotope({ sortBy: sortByValue });
            return false;
        });
    };

    var checkout = function () {
        $("#checkout[submit]").on("click", function () {
            validate("checkout_form");
        })
    };

    var validate = function (form) {
        alert(form);
    };

    return {
        //FUNCION PRINCIPAL PARA INICIALIZAR LOS MODULOS
        init: function() {
            widgets();
            checkout();
        }
    };

}();

jQuery(document).ready(function() {
    Shop.init();
});
