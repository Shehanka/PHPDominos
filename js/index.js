$("#btn-build-order").click(
    function () {
        var mainCity = $('#cmb-main-city').val();
        var city = $('#cmb-city').val();
        var street = $('#cmb-street').val();
        console.log(mainCity,city,street);

        if(mainCity != null && city != null && street != null){
            window.location.assign("menu.html")
        }else {

        }

    }
);