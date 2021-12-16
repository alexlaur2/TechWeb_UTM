
$(function (){
	$.validator.addMethod('textonlyValidate',function (value,element){
      return this.optional(element)
          || /^[a-zA-Z]+([\s][a-zA-Z]+)*$/.test(value);
   })
   $.validator.addMethod('textValidate',function (value,element){
      return this.optional(element)
          || /^.{1,300}$/.test(value);
   })
   $("#contact_form").validate({
        rules:
        {
            username: {
                required: true,
				textonlyValidate: true
            },
            text_contact: {
                required: true,
				textValidate: true
            },
            email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            username: "Numele trebuie să conțină doar litere!",
            email: "Introduceți un e-mail valid!",
            text_contact: "Textul trebuie să conțină cel mult 300 de caractere!"
        },
    });
});

$('#contact_send').click(function (e){
   e.preventDefault();
   $(`input `).removeClass('error');

   if($("#contact_form").valid()) {
      let email = $('input[name="email"]').val(),
          text_contact = $('textarea').val(),
          username = $('input[name="username"]').val();
		
      $.ajax({
         url: '../php/contract.php',
         type: 'post',
         dataType: 'json',
         data: {
				email: email,
				text_contact: text_contact,
				username: username
         },

         success(data) {
			$('.msg').removeClass('none').text(data.message);
            if (data.status == true) {
				console.log('my data'); 
				window.setTimeout(function(){
					window.location.href = '../pages/page_1.php';
				}, 1000);
            } 
         }
      });
   }
});