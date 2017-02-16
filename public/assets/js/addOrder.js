
$(document).ready(function(){

	$("#educationLevel").change(function() {
		calPriceNPage();
		calAmount();
	});
	$("#serviceLevel").change(function() {
		calPriceNPage();
		calAmount();
	});
	$("#deadline").change(function() {
		calPriceNPage();
		calAmount();
	});
	$("#numberOfPages").change(function() {
		calPriceNPage();
		calAmount();
	});

	function calPriceNPage(){
		var edu_level = $('#educationLevel').val();
		var  service_level = $('#serviceLevel').val();
		var deadline = $('#deadline').val();

		if (edu_level != "" && service_level != "" && deadline != "") {
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "6 Hours"){$$("#pricePerPage").val("27.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "12 Hours"){ $("#pricePerPage").val("24.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "24 Hours"){ $("#pricePerPage").val("22.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "48 Hours"){ $("#pricePerPage").val("19.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "72 Hours"){ $("#pricePerPage").val("17.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "4 Days"){ $("#pricePerPage").val("14.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "5 Days"){ $("#pricePerPage").val("13.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "7 Days"){ $("#pricePerPage").val("11.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "10 Days"){ $("#pricePerPage").val("10.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "14 Days"){ $("#pricePerPage").val("8.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Silver" && deadline == "30 Days"){ $("#pricePerPage").val("7.45"); }
			// Degree / Undergrad with Golden
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "6 Hours"){ $("#pricePerPage").val("30.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "12 Hours"){ $("#pricePerPage").val("27.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "24 Hours"){ $("#pricePerPage").val("25.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "48 Hours"){ $("#pricePerPage").val("22.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "72 Hours"){ $("#pricePerPage").val("20.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "4 Days"){ $("#pricePerPage").val("17.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "5 Days"){ $("#pricePerPage").val("16.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "7 Days"){ $("#pricePerPage").val("14.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "10 Days"){ $("#pricePerPage").val("13.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "14 Days"){ $("#pricePerPage").val("11.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Gold" && deadline == "30 Days"){ $("#pricePerPage").val("10.45"); }


			// Degree / Undergrad with Platinum
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "6 Hours"){ $("#pricePerPage").val("35.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "12 Hours"){ $("#pricePerPage").val("32.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "24 Hours"){ $("#pricePerPage").val("30.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "48 Hours"){ $("#pricePerPage").val("27.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "72 Hours"){ $("#pricePerPage").val("25.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "4 Days"){ $("#pricePerPage").val("22.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "5 Days"){ $("#pricePerPage").val("21.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "7 Days"){ $("#pricePerPage").val("19.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "10 Days"){ $("#pricePerPage").val("18.45"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "14 Days"){ $("#pricePerPage").val("16.95"); }
			if(edu_level == "Degree / Undergrad" && service_level == "Platinum" && deadline == "30 Days"){ $("#pricePerPage").val("15.45"); }



			// Masters/PostGrad with Silver
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "6 Hours"){ $("#pricePerPage").val("29.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "12 Hours"){ $("#pricePerPage").val("26.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "24 Hours"){ $("#pricePerPage").val("24.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "48 Hours"){ $("#pricePerPage").val("21.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "72 Hours"){ $("#pricePerPage").val("19.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "4 Days"){ $("#pricePerPage").val("16.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "5 Days"){ $("#pricePerPage").val("15.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "7 Days"){ $("#pricePerPage").val("13.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "10 Days"){ $("#pricePerPage").val("12.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "14 Days"){ $("#pricePerPage").val("10.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Silver" && deadline == "30 Days"){ $("#pricePerPage").val("9.45"); }

			// Masters/PostGrad with Golden
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "6 Hours"){ $("#pricePerPage").val("32.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "12 Hours"){ $("#pricePerPage").val("29.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "24 Hours"){ $("#pricePerPage").val("27.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "48 Hours"){ $("#pricePerPage").val("24.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "72 Hours"){ $("#pricePerPage").val("22.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "4 Days"){ $("#pricePerPage").val("19.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "5 Days"){ $("#pricePerPage").val("18.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "7 Days"){ $("#pricePerPage").val("16.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "10 Days"){ $("#pricePerPage").val("15.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "14 Days"){ $("#pricePerPage").val("13.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Gold" && deadline == "30 Days"){ $("#pricePerPage").val("12.45"); }


			// Masters/PostGrad with Platinum
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "6 Hours"){ $("#pricePerPage").val("37.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "12 Hours"){ $("#pricePerPage").val("34.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "24 Hours"){ $("#pricePerPage").val("32.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "48 Hours"){ $("#pricePerPage").val("29.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "72 Hours"){ $("#pricePerPage").val("27.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "4 Days"){ $("#pricePerPage").val("24.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "5 Days"){ $("#pricePerPage").val("23.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "7 Days"){ $("#pricePerPage").val("21.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "10 Days"){ $("#pricePerPage").val("20.45"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "14 Days"){ $("#pricePerPage").val("18.95"); }
			if(edu_level == "Masters/PostGrad" && service_level == "Platinum" && deadline == "30 Days"){ $("#pricePerPage").val("17.45"); }




			// Ph.D with Silver
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "6 Hours"){ $("#pricePerPage").val("31.45"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "12 Hours"){ $("#pricePerPage").val("28.95"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "24 Hours"){ $("#pricePerPage").val("26.45"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "48 Hours"){ $("#pricePerPage").val("23.95"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "72 Hours"){ $("#pricePerPage").val("21.45"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "4 Days"){ $("#pricePerPage").val("18.95"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "5 Days"){ $("#pricePerPage").val("17.45"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "7 Days"){ $("#pricePerPage").val("15.95"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "10 Days"){ $("#pricePerPage").val("14.45"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "14 Days"){ $("#pricePerPage").val("12.95"); }
			if(edu_level == "Ph.D" && service_level == "Silver" && deadline == "30 Days"){ $("#pricePerPage").val("11.45"); }

			// Ph.D with Golden
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "6 Hours"){ $("#pricePerPage").val("34.45"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "12 Hours"){ $("#pricePerPage").val("31.95"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "24 Hours"){ $("#pricePerPage").val("29.45"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "48 Hours"){ $("#pricePerPage").val("26.95"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "72 Hours"){ $("#pricePerPage").val("24.45"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "4 Days"){ $("#pricePerPage").val("21.95"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "5 Days"){ $("#pricePerPage").val("20.45"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "7 Days"){ $("#pricePerPage").val("18.95"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "10 Days"){ $("#pricePerPage").val("17.45"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "14 Days"){ $("#pricePerPage").val("15.95"); }
			if(edu_level == "Ph.D" && service_level == "Gold" && deadline == "30 Days"){ $("#pricePerPage").val("14.45"); }


			// Ph.D with Platinum
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "6 Hours"){ $("#pricePerPage").val("39.45"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "12 Hours"){ $("#pricePerPage").val("36.95"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "24 Hours"){ $("#pricePerPage").val("34.45"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "48 Hours"){ $("#pricePerPage").val("31.95"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "72 Hours"){ $("#pricePerPage").val("29.45"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "4 Days"){ $("#pricePerPage").val("26.95"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "5 Days"){ $("#pricePerPage").val("25.45"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "7 Days"){ $("#pricePerPage").val("23.95"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "10 Days"){ $("#pricePerPage").val("22.45"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "14 Days"){ $("#pricePerPage").val("20.95"); }
			if(edu_level == "Ph.D" && service_level == "Platinum" && deadline == "30 Days"){ $("#pricePerPage").val("19.45"); }
		}
	}
	function calAmount(){
		var pricePerPage = $("#pricePerPage").val();
		var numberOfPages = $("#numberOfPages").val();
		totalAmount = pricePerPage * numberOfPages;
		totalAmount = totalAmount.toFixed(2);
		$("#totalAmount").val(totalAmount);

	}
});