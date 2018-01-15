//Set order date
var date = new Date();
var orderDate = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
$("#txtOrderDate").val(orderDate);