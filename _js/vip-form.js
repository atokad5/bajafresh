export default function() {
  ;(function($) {
   let $url ='https://hooks.zapier.com/hooks/catch/2061966/qcxthf/';
  
   let $form = $('.the_landing_form');
   let $orderNumber = $('.order_number');
   let $firstName = $('.first_name');
   let $lastName = $('.last_name');
   let $email = $('.email_add');
   let $formNumber = $('.number_');
   

   const sendForm = e => {
     e.preventDefault();
     let $urlDest = $(e.currentTarget).attr('data-url');

     $.ajax({
       url: $url,
       data: {
        'ordernumber': $orderNumber.val(),
        'firstname': $firstName.val(),
        'lastname': $lastName.val(),
        'email': $email.val(),
        'phonenumber': $formNumber.val()
       },
       beforeSend: function() {
        $('.form-hdr').html(`
            <h1>Loading...</h1>
          `); 
       }, 
       success: function(data) {
         $form.hide();
        if(data.status === "success") {
          

          location.replace($urlDest+'?firstname='+$firstName.val());


          // $msg.text('You have successfully signed up!') 
        } else {
          console.log('didnt work!')
          alert('something went wrong, please try again');
          // $msg.text('uhoh! Something went wrong, try again!')
        }

       }
     })
   }


   $form.on('submit', e => sendForm(e))
   
  })(jQuery);
}