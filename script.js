$('.decor').submit(function validate_form() {

    var msg = $('.decor').serialize();

    let st_exp = /^[А-Яа-яІі\s]+$/;
	let gr_exp = /^[А-ЯІі]{2,2}\-[0-9][0-9]$/;
	let sp_exp = /^[А-Яа-яІі\s]+$/;
	let em_exp = /^[a-z0-9._-]+\@[a-z0-9]+\.[a-z]{2,4}$/;
	
	let name = document.getElementById('input_name').value;
	let group = document.getElementById('input_group').value;
	let specialty = document.getElementById('input_spec').value;
	let email = document.getElementById('input_email').value;
	let date = document.getElementById('input_date').value;

	if (name == '')
	{
		$('#info').html('Введіть, будь ласка, ім\'я');
		return false;
	}

    if (st_exp.test(name) == false && name != '')
	{
		$('#info').html('Введіть ім\'я коректно');
		return false;
	}

	if (group == '')
	{
		$('#info').html('Введіть, будь ласка, назву групи');
		return false;
	}

	if (gr_exp.test(group) == false && group != '')
	{
		$('#info').html('Введіть назву групи коректно');
		return false;
	}

	if (date == '')
	{
		$('#info').html('Введіть, будь ласка, дату народження');
		return false;
	}

	if(date < 1940 || date > 2004)
	{
		$('#info').html('Недопустимий рік народження');
		return false;
	}

	if (specialty == '')
	{
		$('#info').html('Введіть, будь ласка, назву спеціальності');
		return false;
	}

	if (sp_exp.test(specialty) == false && specialty != '')
	{
		$('#info').html('Введіть назву спеціальності коректно');
		return false;
	}

	if(email == '')
	{
		$('#info').html('Введіть, будь ласка, електронну пошту');
		return false;
	}

	if (em_exp.test(email) == false && email != '')
	{
		$('#info').html('Введіть Email коректно');
		return false;
	}

	else {
	    $.ajax({
	         type: 'POST',
	         url: 'php/file.php',
	         data: msg,
	        success: function(data) { 
	            $('#info').html(data);
	        }
	    });
	    return false;
	}

});


///////////////////////////////////////////////////////////////////

function query_1(){
	$.post(
		'php/createTable.php',
		function(msg){
			$('#msgbd').html(msg);
		}
		);
}

function query_2(){
	$.post(
		'php/addData.php',
		function(msg){
			$('#msgbd').html(msg);
		}
		);
}

function query_3(){
	$.post(
		'php/addColumn.php',
		function(msg){
			$('#msgbd').html(msg);
		}
		);
}

function query_4(){
	$.post(
		'php/updateColumn.php',
		function(msg){
			$('#msgbd').html(msg);
		}
		);
}


function query_5(){
	$.post(
		'php/selectAll.php',
		function(msg){
			$('#msgbd').html(msg);
		}
		);
}

function query_6(){
	$.post(
		'php/selectTen.php',
		function(msg){
			$('#msgbd').html(msg);
		}
		);
}

function query_7(){
	$.post(
		'php/deleteTable.php',
		function(msg){
			$('#msgbd').html(msg);
		}
		);
}

function query_8(){
	$.post(
		'php/count.php',
		function(msg){
			$('#msgbd').html(msg);
		}
		);
}
