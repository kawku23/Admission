
<?php 
include_once '.././model/notification_class.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="CodeHim">
      <title> Vendor </title>
      <!-- Style CSS -->
      <link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./css/demo.css">
      <style>
         .asm-form.active {
            max-height: 100%;
         }
         .asm-form__footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
         }
         .asm-form__btn {
            margin-top: 10px;
         }
      </style>
   </head>
   <body>
   <header class="cd__intro">
        <h1>Account Authentication</h1>
        <div class="cd__action"></div>
    </header>
    <main class="cd__main">
        <form action="verify.php" method="POST" class="asm-form active" id="frmForget" novalidate onsubmit="return validateForm(this)">
            <div class="asm-form__header">
                <h2>Account Authentication</h2>
            </div>
            <div class="asm-form__body">
                <div class="asm-form__inputbox">
                    <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M320 48c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.66-10.339L224 368h-32v48h-48v48H48v-96l134.177-134.177A143.96 143.96 0 0 1 176 192c0-79.529 64.471-144 144-144m0-48C213.965 0 128 85.954 128 192c0 8.832.602 17.623 1.799 26.318L7.029 341.088A24.005 24.005 0 0 0 0 358.059V488c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24v-24h24c13.255 0 24-10.745 24-24v-20l40.049-40.167C293.106 382.604 306.461 384 320 384c106.035 0 192-85.954 192-192C512 85.965 426.046 0 320 0zm0 144c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48z"/>
                    </svg>
                    <input class="asm-form__input validate" data-validation="email" type="email" name="pin" id="forgotEmail"  required placeholder="Passphrase">
                  <label class="asm-form__inputlabel" for="forgotEmail">Passphrase</label>
                  </div>
                  <div class="asm-form__footer">
               <button class="asm-form__btn" id="forgotSubmit">Verify</button>
               <div id="countdown" style="margin-right: 20px;"></div>
               <button type="button" class="asm-form__link" id="resendCodeBtn" style="margin-left: 20px;">Resend</button>
            </div>
            </div>
        </form>
    </main>
      <!-- Script -->
      <script src="./js/script.js"></script>
      <script>
         document.addEventListener("DOMContentLoaded", function() {
           var countdownElement = document.getElementById("countdown");
           var resendButton = document.getElementById("resendCodeBtn");
           var countdown = 60;
         
           resendButton.disabled = true;
           resendButton.style.pointerEvents = "none";
         
           var countdownInterval = setInterval(function() {
             countdownElement.textContent = (countdown) + " sec remaining";
             countdown--;
         
             if (countdown < 0) {
               clearInterval(countdownInterval);
               countdownElement.textContent = "";
               resendButton.disabled = false;
               resendButton.style.pointerEvents = "auto";
             }
           }, 1000);
         });
      </script>
   </body>
</html>
