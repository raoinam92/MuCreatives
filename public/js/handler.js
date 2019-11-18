
//var base_url = 'http://localhost:8080/ystock/public/';
var base_url = 'http://127.0.0.1:8000/';


var token = "";
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var one_day = 1000 * 60 * 60 * 24;

$(document).ready(function () {
    token = $('meta[name="csrf-token"]').prop('content');
});

function ajax_call(request_type, method_name, call_data, success_method, error_method) {
    $.ajax({
        type: request_type,
        url: app.base_url + method_name,
        headers: getHeader(),
        data: call_data,
        success: success_method,
        error: error_method
    });
}

function get_html_with_values(html, params) {
    for (var k in params) {
        var re = new RegExp("{" + k + "}", "g");
        html = html.replace(re, params[k]);
    }
    return html;
}

function submit_form_data_payment() {
    var data = $('#paymentaddajax').serialize();

    var crf = token;
    $.ajax({
        url: base_url + "amountadd",
        data: {
            '_token': crf,
            data: data
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data1) {
            debugger;
            $('#paymentclose').trigger('click');
            swal("SuccessFully  AMOUNT ADDED");
            setTimeout(function () {
                window.location.reload();

            }, 1000);
        }
    });
    return false;
}

function submit_form_data_payment_supp() {
  debugger;
    var data = $('#payment_supaddajax').serialize();

    var crf = token;
    $.ajax({
        url: base_url + "amountaddsup",

        data: {
            '_token': crf,
            data: data
        },
        type: 'POST',
        dataType: 'JSON',
            success: function (data1) {
            debugger;
            $('#paymentclose').trigger('click');
            swal("SuccessFully  AMOUNT ADDED");
            setTimeout(function () {
                window.location.reload();
            }, 1000);
        }
    });
    return false;

}

function category_form() {
    var data = $('#category_form').serialize();
    var crf = token;
    $.ajax({
        url: base_url + "catadd",
        data: {
            '_token': crf,
            data: data
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            debugger;


            swal("SuccessFully  Added Category");
            $('#closec').trigger('click');
           show_category_list();
        }
    });
    return false;
}
function pro_category_form() {
    var data = $('#pro_category_form').serialize();

    var crf = token;
    $.ajax({
        url: base_url + "prodcatadd",

        data: {
            '_token': crf,
            data: data
        },
        type: 'POST',
        dataType: 'JSON',


        success: function (data) {
            debugger;


            swal("SuccessFully  Added Category");
            $('#closet').trigger('click');
           show_pcategory_list();
        }
    });
    return false;
}
function submit_expense_form(){
    var data = $('#expense_form').serialize();
    data+='&category_id='+$('#clist').attr('categry_id');

    var crf = token;
    $.ajax({
        url: base_url + "expenseform",
        data: {
            '_token': crf,
            data: data
        },
        type: 'POST',
        dataType: 'JSON',
         success: function (data) {
            debugger;


            swal("SuccessFully  Added Expense");
            setTimeout(function () {
                window.location.reload();

            }, 1000);
        }
    });
    return false;

}


function submit_form_data(form_id, url) {
    products_data = [];
    var form = form_id; // You need to use standard javascript object here
    var new_form = [];
    var markers;
    //var token = $('meta[name="csrf-token"]').prop('content');
    var formData = new FormData();
    //    for(var pair of formData.entries()) {
    //      token = pair[1];
    //      break;
    //    }

    var obj = $('input[type="file"]')[1].files;
    for (var i = 0; i < obj.length; i++) {
        formData.append('image' + i, $('input[type="file"]')[1].files[i]);

    }

    $('#tbod tr').each(function (key, value) {
        var temp_product = {};
        temp_product.name = $('#td-' + key + '-' + '1').find('input').val();
        temp_product.id = $('#td-' + key + '-' + '1').find('input').attr('product_id');
        temp_product.description = $('#td-' + key + '-' + '2').find('input').val();
        temp_product.qty = $('#td-' + key + '-' + '3').find('input').val();
        temp_product.rate = $('#td-' + key + '-' + '4').find('input').val();
        temp_product.amount = $('#td-' + key + '-' + '5').find('input').val();
        products_data.push(temp_product);
    });
    console.log(products_data);
    debugger;
    invoice_data.customer_id = $('#customerTags').attr('customer_id');
    invoice_data.term = $('#termt').val();
    invoice_data.invoice_date = $('#invoice_date').val();
    invoice_data.due_date = $('#due_date').val();
    invoice_data.payment_method = parseInt($('input[name=yesno]:checked').val());
    if (invoice_data.payment_method == 2) {
        invoice_data.amount_paid = parseInt($('#acc').val());
    }
    invoice_data.invoice_message = $('textarea[name=invoice_message]').val();
    invoice_data.statement_message = $('textarea[name=statement_message]').val();
    invoice_data.total = total;
    invoice_data.products = products_data;
    formData.append('form_data', JSON.stringify(invoice_data));
    formData.append('total', total);
    //    formData.append('total',total);
    //        formData.append('payment_method',$('input[name="yesno"]').val());
    $.ajax({
        url: base_url + url,
        type: "POST",
        data: formData,
        dataType: "json",
        headers: {
            'X-CSRF-TOKEN': token
        },
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (abc) {
          debugger;
          if(abc.status =='error'){
            markers = '';
            for(var i = 0 ; i< abc.products.length ;i++){
              markers+= 'Product : '+abc.products[i].name+' has limited stock\n';
            }
            swal({
    title: "Error",
    text: ""+markers+"",
    icon: "error",
    button: "Ok!",
  });

          }
        else
        {
            $('#close-btn-invoice').trigger('click');
            swal("SuccessFully  Invoice Created");
            setTimeout(function () {
                window.location.reload();
            }, 1000);


          }
        },
        error: function (abc) {
            debugger;
            // Handle upload error
            // ...
        }
    });

    return false;
}

function submit_form_data_purchase(form_id, url) {
    products_data = [];
    var form = form_id; // You need to use standard javascript object here
    var new_form = [];
    var formData = new FormData();
    var obj = $('input[type="file"]')[0].files;
    for (var i = 0; i < obj.length; i++) {
        formData.append('image' + i, $('input[type="file"]')[0].files[i]);
    }
    $('#tpbod tr').each(function (key, value) {
        var temp_product = {};
        temp_product.name = $('#tdp-' + key + '-' + '1').find('input').val();
        temp_product.id = $('#tdp-' + key + '-' + '1').find('input').attr('product_id');
        temp_product.description = $('#tdp-' + key + '-' + '2').find('input').val();
        temp_product.qty = $('#tdp-' + key + '-' + '3').find('input').val();
        temp_product.rate = $('#tdp-' + key + '-' + '4').find('input').val();
        temp_product.amount = $('#tdp-' + key + '-' + '5').find('input').val();
        products_data.push(temp_product);
    });
    console.log(products_data);
    debugger;
    invoice_data.supplier_id = $('#supplierTags').attr('supplier_id');
    invoice_data.term = $('#termpt').val();
    invoice_data.invoice_date = $('#invoice_date').val();
    invoice_data.due_date = $('#due_date').val();
    invoice_data.payment_method = parseInt($('input[name=yespno]:checked').val());
    if (invoice_data.payment_method == 2) {
        invoice_data.amount_paid = parseInt($('#accp').val());
    }
    invoice_data.invoice_message = $('#invoice_pmesage').val();
    invoice_data.statement_message = $('#statement_pmessage').val();
    invoice_data.total = ptotal;
    invoice_data.products = products_data;
    formData.append('form_data', JSON.stringify(invoice_data));
    formData.append('total', ptotal);
    $.ajax({
        url: base_url + url,
        type: "POST",
        data: formData,
        headers: {
            'X-CSRF-TOKEN': token
        },
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (abc) {
            $('#close-btn-invoice').trigger('click');
            swal("SuccessFully  Invoice Created");
            setTimeout(function () {
                window.location.reload();
            }, 1000);
            debugger;
        },
        error: function (abc) {
            debugger;
        }
    });

    return false;
}
function submit_form_data_pro(form_id, url) {
    debugger;
    temp_product_name = document.getElementById('name').value;
    // You need to use standard javascript object here
    var formData = $('#' + form_id).serialize();
    formData+='&category_id='+$('#procategorylist').attr('pcategry_id');
    console.log(formData);
    $.ajax({
        url: base_url + url,
        data: formData,
        type: 'POST',
        success: function (response) {
            debugger;
            get_cus_pro_data();
            swal("Products Added!", "", "success");
            $('#new-product').modal('hide');
        }
    });
    return false;
}
var temp_product_name = 0;
var temp_customer_name = 0;

function submit_form_data_cus(form_id, url) {
    debugger;

    // You need to use standard javascript object here
    var formData = $('#' + form_id).serialize();
    console.log(formData);
    $.ajax({
        url: base_url + url,
        data: formData,
        type: 'POST',
        success: function (response) {
            debugger;
            //    temp_product_name = temp_temp;
            get_cus_pro_data();
            swal("Customer Added!", "", "success");
            $('#new-customer').modal('hide');
        },
    });
    return false;
}
function submit_form_data_stock(form_id, url) {
    debugger;

    // You need to use standard javascript object here
    var formData = $('#' + form_id).serialize();
    console.log(formData);
    $.ajax({
        url: base_url + url,
        data: formData,
        type: 'POST',
        success: function (response) {
            debugger;
            //    temp_product_name = temp_temp;
            get_cus_pro_data();
            swal("Customer Added!", "", "success");
            $('#new-customer').modal('hide');
        },
    });
    return false;
}
var result = [];
var tag = {}
var tag1 = {}
var customersTags1 = [];
var productsTags1 = [];
var c_length = {
    prev: 0,
    current: 0
};
var p_length = {
    prev: 0,
    current: 0
};

function get_cus_pro_data() {

    debugger;
    url = 'fetchpro_cus';


    $.ajax({
        url: base_url + url,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            debugger;


            result = response;
            console.log(result);
            customerTags = [];
            customers = [];
            for (var a = 0; a < result.customers.length; a++) {
                tag = {};
                var tag5 = {};
                tag.value = result.customers[a].id;
                tag.label = result.customers[a].name;
                tag5.id = result.customers[a].id;
                tag5.name = result.customers[a].name;
                tag5.email = result.customers[a].email;
                tag5.phone = result.customers[a].phone;
                tag5.address = result.customers[a].address;
                customers.push(tag5);
                customerTags.push(tag);
            }
            customer_autocomplete();
            suppliers=[];
            supplierTags=[];
            for (var a = 0; a < result.supplier.length; a++) {
                tag = {};
                var tag6 = {};
                tag.value = result.supplier[a].id;
                tag.label = result.supplier[a].name;
                tag6.id = result.supplier[a].id;
                tag6.name = result.supplier[a].name;
                tag6.email = result.supplier[a].email;
                tag6.phone = result.supplier[a].phone;
                tag6.address = result.supplier[a].address;
                suppliers.push(tag6);
                supplierTags.push(tag);
            }
            supplier_autocomplete();
            productTags = [];
            for (var b = 0; b < result.products.length; b++) {
                tag1 = {};
                tag1.value = result.products[b].id;
                tag1.label = result.products[b].name;
                productTags.push(tag1);
            }
            apply_autocomplete();
            p_length.prev = p_length.current;
            p_length.current = result.products.length;
            c_length.prev = c_length.current;;
            c_length.current = result.customers.length;
        }
    });
}

$(document).ready(function () {
    get_cus_pro_data();
});
function show_category_list(){
$.ajax({
url: base_url + "get_expense_category",
data: {
'_token': token,
},
type: 'GET',
dataType: 'JSON',
success: function (data1) {
$('.categorylist').empty();
expcategorylist=[];
for(var i=0; i<data1.length;i++){
var temp ={};
temp.label =data1[i].name;
temp.value =data1[i].id;
expcategorylist.push(temp);

}
expensecat_autocomplete();
debugger;
setTimeout(function () {
//window.location.reload();

}, 1000);
}
});

return false;
}
function show_pcategory_list(){
$.ajax({
url: base_url + "get_product_category",
data: {
'_token': token,
},
type: 'GET',
dataType: 'JSON',
success: function (data1) {

prodcategorylist=[];
for(var i=0; i<data1.length;i++){
var temp ={};
temp.label =data1[i].name;
temp.value =data1[i].id;
prodcategorylist.push(temp);
}
procat_autocomplete();
debugger;
setTimeout(function () {
//window.location.reload();

}, 1000);
}
});

return false;


}
