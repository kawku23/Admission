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
      <!--$%adsense%$-->
      <main class="cd__main">
         <form action="#" class="asm-form" id="frmSignIn" novalidate onsubmit="return validateForm(this)">
            <div class="asm-form__header">
               <h2>Account Authentication</h2>
            </div>
            <div class="asm-form__body">
               <div class="asm-form__inputbox">
                  <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                     <path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/>
                  </svg>
                  <input class="asm-form__input validate" data-validation="regex" data-regex="^[a-z0-9]{6,20}$" type="text" name="username" id="signinUsername" required placeholder="username">
                  <label class="asm-form__inputlabel" for="signinUsername">username</label>
                  <div class="asm-form__error">Username must be [6,20] symbols and contain only small letters and numbers</div>
               </div>
               <div class="asm-form__inputbox">
                  <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                     <path d="M320 48c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.66-10.339L224 368h-32v48h-48v48H48v-96l134.177-134.177A143.96 143.96 0 0 1 176 192c0-79.529 64.471-144 144-144m0-48C213.965 0 128 85.954 128 192c0 8.832.602 17.623 1.799 26.318L7.029 341.088A24.005 24.005 0 0 0 0 358.059V488c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24v-24h24c13.255 0 24-10.745 24-24v-20l40.049-40.167C293.106 382.604 306.461 384 320 384c106.035 0 192-85.954 192-192C512 85.965 426.046 0 320 0zm0 144c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"/>
                  </svg>
                  <input class="asm-form__input validate" data-validation="regex" data-regex=".{6,}" type="password" name="password" id="signinPassword" required placeholder="password">
                  <label class="asm-form__inputlabel" for="signinPassword">password</label>
                  <svg class="asm-form__icon append" data-action="toggle-show-password" data-input="#signinPassword" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                     <path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"/>
                  </svg>
                  <div class="asm-form__error">Password must be more than 6 symbols</div>
               </div>
               <div class="asm-form__leverbox">
                  <label class="asm-form__leverlabel">
                  <input class="asm-form__lever" type="checkbox" name="remember" id="signinRemember">
                  <span class="asm-form__lever-text">Remember me</span>
                  </label>
                  <button type="button" class="asm-form__link" data-action="show-form" data-target="#frmForget">Forgot password</button>
               </div>
               <div class="asm-form__linkbox">
                  Not a vendor? <button type="button" class="asm-form__link" data-action="show-form" data-target="#frmRegister">Register</button>
               </div>
            </div>
            <div class="asm-form__footer">
               <button class="asm-form__btn" id="signinSubmit">Sign In</button>
            </div>
         </form>
         <form action="#" class="asm-form active" id="frmForget" novalidate onsubmit="return validateForm(this)">
            <div class="asm-form__header">
               <h2>Account Authentication</h2>
            </div>
            <div class="asm-form__body">
               <div class="asm-form__inputbox">
                  <!-- Updated SVG for a password icon -->
                  <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                     <path d="M12 2c-3.54 0-6.9 1.38-9.39 3.89-2.51 2.51-3.89 5.85-3.89 9.39s1.38 6.9 3.89 9.39c2.51 2.51 5.85 3.89 9.39 3.89s6.9-1.38 9.39

-3.89c2.51-2.51 3.89-5.85 3.89-9.39s-1.38-6.9-3.89-9.39c-2.49-2.51-5.85-3.89-9.39-3.89zM12 2.96c3.3 0 6.45 1.26 8.79 3.6 2.34 2.34 3.6 5.49 3.6 8.79s-1.26 6.45-3.6 8.79c-2.34 2.34-5.49 3.6-8.79 3.6s-6.45-1.26-8.79-3.6c-2.34-2.34-3.6-5.49-3.6-8.79s1.26-6.45 3.6-8.79c2.34-2.34 5.49-3.6 8.79-3.6zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zM12 8.96c1.67 0 3.04 1.37 3.04 3.04s-1.37 3.04-3.04 3.04-3.04-1.37-3.04-3.04 1.37-3.04 3.04-3.04zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zM12 8.96c1.67 0 3.04 1.37 3.04 3.04s-1.37 3.04-3.04 3.04-3.04-1.37-3.04-3.04 1.37-3.04 3.04-3.04z"/>
                  </svg>
                  <input class="asm-form__input validate" data-validation="email" type="email" name="pin" id="forgotEmail" required placeholder="Passphrase">
                  <label class="asm-form__inputlabel" for="forgotEmail">Passphrase</label>
               </div>
            </div>
            <div class="asm-form__footer">
               <button class="asm-form__btn" id="forgotSubmit">Verify</button>
               <div id="countdown" style="margin-right: 20px;"></div>
               <button type="button" class="asm-form__link" id="resendCodeBtn" style="margin-left: 20px;">Resend</button>
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
