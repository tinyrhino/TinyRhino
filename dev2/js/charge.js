// JavaScript Document


function TROnePage(){

	GetChargeData("./charges/charge1.php","#morechange1","#morechange2");
	
}

function TRLite(){

	GetChargeData("./charges/charge2.php" ,"#morechange1","#morechange2");

}


function TRBespoke(){

	GetChargeData("./charges/charge3.php" ,"#morechange1","#morechange2");

}


function TRStore(){

	GetChargeData("./charges/charge4.php" ,"#morechange2","#morechange1");

}


function TRMobile(){

	GetChargeData("./charges/charge5.php" ,"#morechange2","#morechange1");

}

function TR6(){

	GetChargeData("./charges/charge6.php" ,"#morechange2","#morechange1");

}

function GetChargeData(getUrl,divIn,divOut){
	$(divOut).hide();
		$.ajax({
                url:getUrl,
                dataType: "html",
                success: function(data){   
				$(divIn).html(data);
                   
                    }   
                });
				$(divIn).css("diplay", "block");
                $(divIn).fadeIn(1000);
	}