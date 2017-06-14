<h1>THANKS!</h1>

<h2>Check back soon for more ebooks!</h2>
<br />
<h4>Having unepxected issues? Please Email <strong class="emial-text">mammamia5504@gmail.com</strong> if you didn't quite get what you were looking for</p></h4>


<script>

download()

 var download = function() {
       for(var i=0; i<arguments.length; i++) {
         var iframe = $('<iframe style="visibility: collapse;"></iframe>');
         $('body').append(iframe);
         var content = iframe[0].contentDocument;
         var form = '<form action="' + arguments[i] + '" method="GET"></form>';
         content.write(form);
         $('form', content).submit();
         setTimeout((function(iframe) {
           return function() { 
             iframe.remove(); 
           }
         })(iframe), 2000);
       }
     }  
</script>

