// JavaScript Document

function TROnePage(){
	GetChargeData("./charges/charge1.php");
	
}

function TRLite(){
	GetChargeData("./charges/charge2.php");

}


function TRBespoke(){
	GetChargeData("./charges/charge3.php");

}


function TRStore(){
	GetChargeData("./charges/charge4.php");

}


function TRMobile(){
	GetChargeData("./charges/charge5.php");

}

function TR6(){
	GetChargeData("./charges/charge6.php");

}

function GetChargeData(getUrl){
	
	
		$.ajax({
                url:getUrl,
                dataType: "html",
                success: function(data){   
				$("#moreCharge").html(data);
                   
                    }   
                });
				$("#moreCharge").css("diplay", "block");
                $("#moreCharge").fadeIn(2000);
	}