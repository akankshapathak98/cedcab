$(document).ready(function() {
    $('#luggage_input').on("input",function(){
        var checkfornumber=$('#luggage_input').val();
        if(isNaN(checkfornumber)) {
            $('#luggage_input').val("");
            alert("enter only number");
        }
    });

    $("#inputGroupSelect03").on("click", function() {
        var selected_value = $("#inputGroupSelect03 option:selected").text();
        if (selected_value == "CedMicro") {
            $("#luggage_input").prop('value', "");
            $("#luggage_input").prop('disabled', true);
            $("#luggage_input").attr("placeholder", "there is no option for luggage");
        }
        else{
            $("#luggage_input").prop('disabled', false);
            $("#luggage_input").attr("placeholder", "Enter Weight in KG");
        }
    });
    $("#getfare").on("click", function() {
        var msg = "Please select Department";
        if ($('#inputGroupSelect01').val() == "Current" && $('#inputGroupSelect02').val() == "Enter drop for ride estimate" && $('#inputGroupSelect03').val() == "Drop down to select CAB type") {
            alert("please enter required field");
            return false;
        } else if ($('#inputGroupSelect01').val() == "Current") {
            alert("please select the pickup field");
            return false;
        } else if ($('#inputGroupSelect02').val() == "Enter drop for ride estimate") {
            alert("please select the drop field");
            return false;
        } else if ($('#inputGroupSelect03').val() == "Drop down to select CAB type") {
            alert("please select the cab type field");
            return false;
        }
        var pickup = $("#inputGroupSelect01").val();
        var drop = $("#inputGroupSelect02").val();
        var cab_type = $("#inputGroupSelect03").val();
        var luggage = $("#luggage_input").val();



        $.ajax({
            method: "POST",
            url: "detail_ajax.php",
            data: {
                pickup: pickup,
                drop: drop,
                cab_type: cab_type,
                luggage: luggage
            },
            success: function(result_array) {

                $('#getfare').text("Total fare:₹"+result_array);
            },
            error: function() {
                alert("error");
            }
        });
    });
    $(".focus").on("focus", function() {
        $('#getfare').text("Calculate Fare");
    });
})