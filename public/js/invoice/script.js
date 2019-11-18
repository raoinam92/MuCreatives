var newid = 0;
$(document).ready(function() {


    $("#add_row").on("click", function() {
        // Dynamic Rows Code

        // Get max row id and set new id
        newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;

        var tr = $("<tr></tr>", {
            id: "tr-"+newid,
            "data-id": newid
        });

        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function(k,v) {

			var cur_td = $(this);

            var children = cur_td.children();

            // add new td and element if it has a nane
            if ($(this).data("name") != undefined) {
                var td = $('<td id="td-'+newid+'-'+k+'"></td>', {
                    "data-name": $(cur_td).data("name")
                });

                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
				if(c[0].tagName=='SPAN'){
					c[0].innerHTML=  newid;
				}
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                var td = $("<td></td>", {
                    'text': $('#tab_logic tr').length,
                }).appendTo($(tr));
            }
        });

        // add delete button and td

//        $("<td></td>").append(
//            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
//                .click(function() {
//                    $(this).closest("tr").remove();
//                })
//        ).appendTo($(tr));


        // add the new row
        $(tr).appendTo($('#tab_logic'));

        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
             get_total();
        });
        debugger;

//             $('.productTags').autocomplete("destroy");

        apply_autocomplete();
});

//	to delete row
	$("#clear_row").click(function(){

	$("#tbod").find("tr:gt(0)").remove();
});
$("#add_row").trigger("click");


    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();

        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width());
        });

        return $helper;
    };

//    $(".table-sortable tbody").sortable({
//        helper: fixHelperModified
//    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#add_row").trigger("click");

// to upload multiple files
	  $('.uploadf input').change(function () {
    $('.uploadf p').text(this.files.length + " file(s) selected");
  });


    $('#termt').select2({
          tags: true,
            placeholder: 'Select Terms',
                allowClear: true,
                    dropdownParent: $("#new-sale")

    });
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

});
//RADIO BUTTON SHOW INPUT FEILD
	function yesnoCheck() {

    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else
	{
		document.getElementById('ifYes').style.visibility = 'hidden';
	}

}
	function yesnoCheck1() {

    if (document.getElementById('yespCheck').checked) {
        document.getElementById('ifYesp').style.visibility = 'visible';
    }
    else
	{
		document.getElementById('ifYesp').style.visibility = 'hidden';
	}

}


//    PURCHASES SECTION
var newpid = 0;
$(document).ready(function() {


    $("#addp_row").on("click", function() {
        // Dynamic Rows Code

        // Get max row id and set new id
        newpid = 0;
        $.each($("#tabp_logic tr"), function() {
            if (parseInt($(this).data("id")) > newpid) {
                newpid = parseInt($(this).data("id"));
            }
        });
        newpid++;

        var tr = $("<tr></tr>", {
            id: "tr-"+newpid,
            "data-id": newpid
        });

        // loop through each td and create new elements with name of newid
        $.each($("#tabp_logic tbody tr:nth(0) td"), function(k,v) {

			var cur_td = $(this);

            var children = cur_td.children();

            // add new td and element if it has a nane
            if ($(this).data("name") != undefined) {
                var td = $('<td id="tdp-'+newpid+'-'+k+'"></td>', {
                    "data-name": $(cur_td).data("name")
                });

                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
				if(c[0].tagName=='SPAN'){
					c[0].innerHTML=  newpid;
				}
                c.attr("name", $(cur_td).data("name") + newpid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                var td = $("<td></td>", {
                    'text': $('#tabp_logic tr').length,
                }).appendTo($(tr));
            }
        });

        // add delete button and td

//        $("<td></td>").append(
//            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
//                .click(function() {
//                    $(this).closest("tr").remove();
//                })
//        ).appendTo($(tr));


        // add the new row
        $(tr).appendTo($('#tabp_logic'));

        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
             get_ptotal();
        });
        debugger;

//             $('.productTags').autocomplete("destroy");

        applyp_autocomplete();
});

//	to delete row
	$("#clearp_row").click(function(){

	$("#tpbod").find("tr:gt(0)").remove();
});
$("#addp_row").trigger("click");


    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();

        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width());
        });

        return $helper;
    };

//    $(".table-sortable tbody").sortable({
//        helper: fixHelperModified
//    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#addp_row").trigger("click");

// to upload multiple files
	  $('.uploadf input').change(function () {
    $('.uploadf p').text(this.files.length + " file(s) selected");
  });


    $('#termpt').select2({
          tags: true,
            placeholder: 'Select Terms',
                allowClear: true,
                    dropdownParent: $("#new-purchase")

    });
    // $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

});
//RADIO BUTTON SHOW INPUT FEILD
	function yesnopCheck() {

    if (document.getElementById('yespCheck').checked) {
        document.getElementById('ifpYes').style.visibility = 'visible';
    }
    else
	{
		document.getElementById('ifpYes').style.visibility = 'hidden';
	}

}
