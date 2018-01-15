window.onload =(function () {
    var httpCustomerViewRequest = new XMLHttpRequest();
    httpCustomerViewRequest.onreadystatechange = function (ev) {
        if (httpCustomerViewRequest.readyState == 4 && httpCustomerViewRequest.status == 200) {
            var customers = JSON.parse(httpCustomerViewRequest.responseText);
            for (var i = 0; i < customers.length; i++) {
                $("#tblCustomer").append('<tr>' +
                    '<td><input class="uk-checkbox" type="checkbox"></td>' +
                    '<td><img class="uk-preserve-width uk-border-circle" width="40" src="images/chamodshehanka.jpg"></td>' +
                    '<td>' + customers[i].customer_Name + '</td>' +
                    '<td>' + customers[i].customer_Address + '</td>' +
                    '<td>' + customers[i].customer_Tel + '</td>'
                    + '</tr>'
                );
            }
        }
    };
    httpCustomerViewRequest.open('GET',"load_customer.php",true);
    httpCustomerViewRequest.send();
});


// $("#btnSave").click(function () {
//
//     var customer_ID = $('').val('input#customer_ID');
//     if ($.trim(customer_ID) !== ''){
//         $.post('add-customer.php',{customer_ID : customer_ID},function (data) {
//             alert(data);
//         });
//     }
//
//
//
//     var http = new XMLHttpRequest();
//
//     http.onReadyStateChange = function () {
//        if (http.readyState === 4 && http.status === 200){
//            console.log(http.responseText);
//        }
//    };
//
//    http.open('POST','addCustomer.php',true);
//
//    http.setRequestHeader("Content-type","application/json");
//
//    var jsonString = $("#formCustomer").serializeArray();
//    console.log(jsonString);
//    http.send(JSON.stringify(jsonString));
// });