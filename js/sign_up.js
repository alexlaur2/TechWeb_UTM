$(function (){
	$.validator.addMethod('textonlyValidate',function (value,element){
      return this.optional(element)
          || /^[a-zA-Z]+([\s][a-zA-Z]+)*$/.test(value);
   })
   
   $("#register_form").validate({
        rules:
        {
            firstName: {
                required: true,
				textonlyValidate: true
            },
			lastName: {
                required: true,
				textonlyValidate: true
            },
            password: {
                required: true,
                minlength: 5,
                maxlength: 15
            },
            confirmPassword: {
                required: true,
                equalTo: '#password'
            },
            email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            firstName: "Prenumele trebuie să conțină doar litere!",
            lastName: "Numele trebuie să conțină doar litere!",
			password:{
                required: "Introduceți parola!",
                minlength: "Parola trebuie să fie din cel puțin 5 caractere!",
				maxlength: "Parola trebuie să fie din cel mult 15 caractere!"
            },
            email: "Introduceți un e-mail valid!",
            confirmPassword:{
                required: "Repetați parola d-voastră!",
                equalTo: "Parolele nu coincid!"
            }
        },
    });
});

$('#signup').click(function (e){
   e.preventDefault();

   if($("#register_form").valid()) {
      let email = $('input[name="email"]').val(),
          password = $('input[name="password"]').val(),
          confirmPassword = $('input[name="confirmPassword"]').val(),
          firstName = $('input[name="firstName"]').val(),
          lastName = $('input[name="lastName"]').val();
		
      $.ajax({
         url: '../php/signup.php',
         type: 'post',
         dataType: 'json',
         data: {
				email: email,
				password: password,
				confirmPassword: confirmPassword,
				firstName: firstName,
				lastName: lastName
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



