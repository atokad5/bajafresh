export default function() {
  ;(function($) {
   let $url ='https://hooks.zapier.com/hooks/catch/2061966/qt602h';
   let $form = $('.form');
   let $email = $('.email-el');
   let $msg = $('.msg');
   let $body = $('body');

  





   const sendForm = e => {
     e.preventDefault();
     $.ajax({
       url: $url,
       data: {
        'email': $email.val()
       },
       success: function(data) {
         $form.hide();
        if(data.status === "success") {
          $msg.text('You have successfully signed up!') 
        } else {
          $msg.text('uhoh! Something went wrong, try again!')
        }

       }
     })
   }


   $form.on('submit', e => sendForm(e))
   
  })(jQuery);
}