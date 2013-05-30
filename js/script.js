
var descr = false;

$(".boxer").boxer();

$("#edit_infos").width("5%");

var check_own = $("#check_own").attr("data-check");

if (check_own == 'yes')
{
	function editProfil(input_id,input_name,error)
	{
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == error)
				$(this).append("<input type='text' id='"+input_id+"'>");
			else
				$(this).append("<input type='text' id='"+input_id+"' value='"+content+"'>");


			$("#firstname_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'firstname',
					ajax : 'on',
					post : {
						input_name : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					if (data.state != "ok")
					{
						console.log(data.state);
						$("#firstname_profil").empty();
						$("#firstname_profil").html(data.state);
					}
					else
					{
						var new_content = $("#firstname_area").val();

						$("#firstname_profil").empty();
						$("#firstname_profil").text(new_content);
					}
				},"json");

				descr = false;
			});

			descr = true;
		}
	}

	$("#firstname_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == "Vous devez remplir ce champ")
				$(this).append("<input type='text' id='firstname_area'>");
			else
				$(this).append("<input type='text' id='firstname_area' value='"+content+"'>");


			$("#firstname_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'firstname',
					ajax : 'on',
					post : {
						firstname : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					if (data.state != "ok")
					{
						console.log(data.state);
						$("#firstname_profil").empty();
						$("#firstname_profil").html(data.state);
					}
					else
					{
						var new_content = $("#firstname_area").val();

						$("#firstname_profil").empty();
						$("#firstname_profil").text(new_content);
					}
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#lastname_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == "Vous devez remplir ce champ")
				$(this).append("<input type='text' id='lastname_area'>");
			else
				$(this).append("<input type='text' id='lastname_area' value='"+content+"'>");

			$("#lastname_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'lastname',
					ajax : 'on',
					post : {
						lastname : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					if (data.state != "ok")
					{
						$("#lastname_profil").empty();
						$("#lastname_profil").html(data.state);
					}
					else
					{
						var new_content = $("#lastname_area").val();

						$("#lastname_profil").empty();
						$("#lastname_profil").text(new_content);
					}
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#email_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == "Vous devez remplir ce champ" 
				|| content == "Cette email est déjà utilisé" 
				|| content == "Cette email n'est pas valide")
			{
				$(this).append("<input type='email' id='email_area'>");
			}
			else
				$(this).append("<input type='email' id='email_area' value='"+content+"'>");

			$("#email_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'email',
					ajax : 'on',
					post : {
						email : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					if (data.state != "ok")
					{
						$("#email_profil").empty();
						$("#email_profil").html(data.state);
					}
					else
					{
						var new_content = $("#email_area").val();

						$("#email_profil").empty();
						$("#email_profil").text(new_content);
					}
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#description_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();
			if (content == "Ajoutez une description")
				$(this).append("<textarea rows='1' id='description_area'></textarea>");
			else
				$(this).append("<textarea rows='1' id='description_area'>"+content+"</textarea>");

			$("#description_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'description',
					ajax : 'on',
					post : {
						description : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					var new_content = $("#description_area").val();

					$("#description_profil").empty();

					if (new_content != "")
						$("#description_profil").text(new_content);
					else
						$("#description_profil").text("Ajoutez une description");

					console.log('here');
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#birthdate_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == "Ajoutez votre date de naissance")
				$(this).append("<input type='date' id='birthdate_area'>");
			else
				$(this).append("<input type='date' id='birthdate_area' value='"+content+"'>");

			$("#birthdate_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'birthdate',
					ajax : 'on',
					post : {
						birthdate : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					var new_content = $("#birthdate_area").val();

					$("#birthdate_profil").empty();

					if (new_content != "")
						$("#birthdate_profil").text(new_content);
					else
						$("#birthdate_profil").text("Ajoutez votre date de naissance");
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#sexe_profil").click(function(){
		var content = $(this).html();
		console.log(content);
		if (descr == false)
		{
			$(this).empty();

			if (content == "Précisez votre sexe")
			{
				$(this).append("<input type='radio' class='sexe_area' name='sexe' value='homme'>homme <input type='radio' name='sexe' class='sexe_area' value='femme'>femme <input type='radio' name='sexe' class='sexe_area' value='' checked>Non renseign&eacute;");
			}
			else if (content == "homme")
			{ 
				$(this).append("<input type='radio' class='sexe_area' name='sexe' value='homme' checked>homme <input type='radio' name='sexe' class='sexe_area' value='femme'>femme <input type='radio' name='sexe' class='sexe_area' value=''>Non renseign&eacute;");
			}
			else if (content == "femme")
			{
				$(this).append("<input type='radio' class='sexe_area' name='sexe' value='homme'>homme <input type='radio' class='sexe_area' name='sexe' value='femme' checked>femme <input type='radio' name='sexe' class='sexe_area' value=''>Non renseign&eacute;");

			}

			$(".sexe_area").blur(function(e)
			{
				var data = {
					action : 'profil',
					elem : 'sexe',
					ajax : 'on',
					post : {
						sexe : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					var new_content = $(".sexe_area:checked").val();

					$("#sexe_profil").empty();
					if (new_content != "")
						$("#sexe_profil").text(new_content);
					else
						$("#sexe_profil").text("Précisez votre sexe");
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#address_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == "Ajoutez une adresse")
				$(this).append("<input type='text' id='address_area'>");
			else
				$(this).append("<input type='text' id='address_area' value='"+content+"'>");


			$("#address_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'address',
					ajax : 'on',
					post : {
						address : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					var new_content = $("#address_area").val();

					$("#address_profil").empty();

					if (new_content != "")
						$("#address_profil").text(new_content);
					else
						$("#address_profil").text("Ajoutez une adresse");
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#zipcode_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == "Ajoutez un code postal")
				$(this).append("<input type='text' id='zipcode_area'>");
			else
				$(this).append("<input type='text' id='zipcode_area' value='"+content+"'>");


			$("#zipcode_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'zip_code',
					ajax : 'on',
					post : {
						zip_code : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					var new_content = $("#zipcode_area").val();

					$("#zipcode_profil").empty();

					if (new_content != "")
						$("#zipcode_profil").text(new_content);
					else
						$("#zipcode_profil").text("Ajoutez un code postal");
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#town_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == "Ajoutez une ville")
				$(this).append("<input type='text' id='town_area'>");
			else
				$(this).append("<input type='text' id='town_area' value='"+content+"'>");


			$("#town_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'town',
					ajax : 'on',
					post : {
						town : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					var new_content = $("#town_area").val();

					$("#town_profil").empty();

					if (new_content != "")
						$("#town_profil").text(new_content);
					else
						$("#town_profil").text("Ajoutez une ville");
				},"json");

				descr = false;
			});

			descr = true;
		}
	});

	$("#country_profil").click(function(){
		var content = $(this).html();

		if (descr == false)
		{
			$(this).empty();

			if (content == "Ajoutez un pays")
				$(this).append("<input type='text' id='country_area'>");
			else
				$(this).append("<input type='text' id='country_area' value='"+content+"'>");


			$("#country_area").blur(function()
			{
				var data = {
					action : 'profil',
					elem : 'country',
					ajax : 'on',
					post : {
						country : $(this).val()
					}
				};

				$.post('./index.ajax.php', data, function(data){
					var new_content = $("#country_area").val();

					$("#country_profil").empty();

					if (new_content != "")
						$("#country_profil").text(new_content);
					else
						$("#country_profil").text("Ajoutez un pays");
				},"json");

				descr = false;
			});

			descr = true;
		}
	});
}
$(".boxer").boxer();

var widthPic = $(".gallery_img").width();
var newWidthPic = (widthPic * 30) / 100;
$(".gallery_img").width(newWidthPic);

var widthAva = $(".avatar_profil").width();
var newWidthAva = (widthAva * 30) / 100;
$(".avatar_profil").width(newWidthAva);

$("#edit_infos").width("5%");

var widthPic = $(".galery_img").width();
var newWidthPic = (widthPic * 20) / 100;
$(".galery_img").width(newWidthPic);

// AREA TEXT POST STATUT
var opcl = true;

$('#toggle_status_box').click(function(){
	if (opcl) {
		$('#post_status_box').animate({height:'175px'});
		$('#triangle_down').attr('id', 'triangle_up');
		opcl = false;
	} else {
		$('#post_status_box').animate({height:'15px'});
		$('#triangle_up').attr('id', 'triangle_down');
		opcl = true;
	}
});

// INIT REDACTOR

$(document).ready(function()
{
	$('#redactor_box').redactor();
});

// HOVER PHOTO

$(".content_img").mouseenter(function(){

	$(this).prev().show();
	$(this).mousemove(function(e){
		$(this).prev().offset({left : e.pageX+20, top : e.pageY+20})
	})

});

$(".content_img").mouseleave(function(){

	$(this).prev().hide();
});