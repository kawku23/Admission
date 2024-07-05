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
      
   </head>
   <body>
      <header class="cd__intro">
         <h1></h1>
         <div class="cd__action">
            
         </div>
      </header>
      <!--$%adsense%$-->
      <main class="cd__main">
         <!-- Start DEMO HTML (Use the following code into your project)-->
         <form action="#" class="asm-form active" id="frmSignIn" novalidate onsubmit="return validateForm(this)">
    <div class="asm-form__header">
      <h2>Sign In</h2>
    </div>
    <div class="asm-form__body">
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg>
          <input class="asm-form__input validate" data-validation="regex" data-regex="^[a-z0-9]{6,20}$" type="text" name="username" id="signinUsername" required placeholder="username">
          <label class="asm-form__inputlabel" for="signinUsername">username</label>
          <div class="asm-form__error">Username must be [6,20] symbols and contain only small letters and numbers</div>
        </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M320 48c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.66-10.339L224 368h-32v48h-48v48H48v-96l134.177-134.177A143.96 143.96 0 0 1 176 192c0-79.529 64.471-144 144-144m0-48C213.965 0 128 85.954 128 192c0 8.832.602 17.623 1.799 26.318L7.029 341.088A24.005 24.005 0 0 0 0 358.059V488c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24v-24h24c13.255 0 24-10.745 24-24v-20l40.049-40.167C293.106 382.604 306.461 384 320 384c106.035 0 192-85.954 192-192C512 85.965 426.046 0 320 0zm0 144c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"/></svg>
          <input class="asm-form__input validate" data-validation="regex" data-regex=".{6,}" type="password" name="password" id="signinPassword" required placeholder="password">
          <label class="asm-form__inputlabel" for="signinPassword">password</label>
          <svg class="asm-form__icon append" data-action="toggle-show-password" data-input="#signinPassword" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"/></svg>
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

  <form action="#" class="asm-form" id="frmForget" novalidate onsubmit="return validateForm(this)">
    <div class="asm-form__header">
      <h2>Forget Password</h2>
    </div>
    <div class="asm-form__body">
        <div class="asm-form__linkbox">
          <button type="button" class="asm-form__link" data-action="show-form" data-target="#frmSignIn">Sign in</button>
        </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/></svg>
          <input class="asm-form__input validate" data-validation="regex" data-regex="\\S+@\\S+\\.\\S+" type="email" name="email" id="forgetEmail" required placeholder="email">
          <label class="asm-form__inputlabel" for="forgetEmail">email</label>
          <div class="asm-form__error">Invalid Email</div>
        </div>
        <div class="asm-form__linkbox">
          Not a vendor? <button type="button" class="asm-form__link" data-action="show-form" data-target="#frmRegister">Register</button>
        </div>
    </div>

    <div class="asm-form__footer">
      <button class="asm-form__btn" id="forgetSubmit">Send</button>
    </div>
  </form>

  <form action="../../controllers/account_function.php" method="POST" class="asm-form" id="frmRegister" novalidate onsubmit="return validateForm(this)">
    <div class="asm-form__header">
      <h2>Register</h2>
    </div>
    <div class="asm-form__body">
        <div class="asm-form__linkbox">
            Already a vendor? <button type="button" class="asm-form__link" data-action="show-form" data-target="#frmSignIn">Sign in</button>
        </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg>
          <input class="asm-form__input validate" data-validation="regex" type="text" name="institution_name" id="registerUsername" required placeholder="Instituition Name">
          <label class="asm-form__inputlabel" for="registerUsername">Instituition Name</label>
        </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M476.5 22.9L382.3 1.2c-21.6-5-43.6 6.2-52.3 26.6l-43.5 101.5c-8 18.6-2.6 40.6 13.1 53.4l40 32.7C311 267.8 267.8 311 215.4 339.5l-32.7-40c-12.8-15.7-34.8-21.1-53.4-13.1L27.7 329.9c-20.4 8.7-31.5 30.7-26.6 52.3l21.7 94.2c4.8 20.9 23.2 35.5 44.6 35.5C312.3 512 512 313.7 512 67.5c0-21.4-14.6-39.8-35.5-44.6zM69.3 464l-20.9-90.7 98.2-42.1 55.7 68.1c98.8-46.4 150.6-98 197-197l-68.1-55.7 42.1-98.2L464 69.3C463 286.9 286.9 463 69.3 464z"/></svg>
          <input class="asm-form__input validate" data-validation="regex" data-regex="^[0-9]{10}$" type="tel" name="telephone_number" id="registerPhone" required placeholder="phone" pattern="^[0-9]{10}$" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
          <label class="asm-form__inputlabel" for="registerPhone">phone</label>
          <div class="asm-form__error">Phone</div>
        </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/>
          </svg>
          <input class="asm-form__input validate" data-validation="regex" data-regex="\S+@\S+\.\S+" type="email" name="email" id="registerEmail" required placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter a valid email address">
          <label class="asm-form__inputlabel" for="registerEmail">email</label>
        <div class="asm-form__error">Invalid Email</div>
        </div><div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M320 48c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.66-10.339L224 368h-32v48h-48v48H48v-96l134.177-134.177A143.96 143.96 0 0 1 176 192c0-79.529 64.471-144 144-144m0-48C213.965 0 128 85.954 128 192c0 8.832.602 17.623 1.799 26.318L7.029 341.088A24.005 24.005 0 0 0 0 358.059V488c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24v-24h24c13.255 0 24-10.745 24-24v-20l40.049-40.167C293.106 382.604 306.461 384 320 384c106.035 0 192-85.954 192-192C512 85.965 426.046 0 320 0zm0 144c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"/></svg>
          <input class="asm-form__input validate" data-validation="regex" data-regex="^[A-Z]{2}-\d{3}-\d{4}$" type="text" name="gps_address" id="registerGPS" required placeholder="GPS Address" pattern="^[A-Z]{2}-\d{3}-\d{4}$" title="Enter a valid GPS address in the format AA-123-2728">
          <label class="asm-form__inputlabel" for="registerGPS">GPS Address</label>
          <div class="asm-form__error">Invalid GPS Address (AA-123-2728)</div>
        </div>
        <div class="asm-form__textbox">
            <span>By clicking register you agree to our <a href="#1" class="asm-form__link">terms of service</a></span>
        </div>
    </div>
    <div class="asm-form__footer">
      <button class="asm-form__btn" id="registerSubmit">Register</button>
    </div>
      </main>
      <footer class="cd__credit">test Project </a></footer>
      
      <!-- Script JS -->
      <script src="./js/script.js"></script>
      <!--$%analytics%$-->
   </body>
</html>