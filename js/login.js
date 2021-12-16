

$(function (){
   
   $("#login_form").validate({
        rules:
        {
            password: {
                required: true,
                minlength: 5,
                maxlength: 15
            },   
            email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            password:{
                required: "Introduceți parola!",
                minlength: "Parola trebuie să fie din cel puțin 5 caractere!",
				maxlength: "Parola trebuie să fie din cel mult 15 caractere!"
            },
            email: "Introduceți un e-mail valid!"
        },
    });
});

$('#login').click(function (e){
   e.preventDefault();
   $(`input `).removeClass('error');

   if($("#login_form").valid()) {
      let email = $('input[name="email"]').val(),
          password = $('input[name="password"]').val();
          
      $.ajax({
         url: '../php/login.php',
         type: 'post',
         dataType: 'json',
         data: {
				email: email,
				password: password,
				},
         success(data) {
			$('.msg').removeClass('none').text(data.message);
            if (data.status == true) {
				console.log('my data'); 
				window.setTimeout(function(){
					window.location.href = '../pages/page_1.php';
				}, 3000);
            } 
         }
      });
   }
});
