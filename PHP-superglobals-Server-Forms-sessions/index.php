<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Hello, world!</title>
  </head>
  <body class="text-center">



    <form class="form-signin" method="post" action="./validate.php">
      <img
        class="mb-4"
        src="https://media.giphy.com/media/ZVik7pBtu9dNS/giphy.gif"
        alt=""
        width="100%"
        height="100%"
      />

      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

    <label for="inputText" class="sr-only">Enter your name</label>
      <input 
        type="text"
        name="name"
        id="inputText"
        class="form-control"
        placeholder="enter your name"
        required
        autofocus
      />

      <label for="inputEmail" class="sr-only">Email address</label>
      <input
        type="email"
        name="user"
        id="inputEmail"
        class="form-control"
        placeholder="Email address"
        required
        autofocus
      />
      <label for="inputPassword" class="sr-only">Password</label>
      <input
        type="password"
        name="pwd"
        class="form-control"
        placeholder="Password"
        required
      />
      
      <input id="login" type="submit" value="Login" class="btn btn-lg btn-primary btn-block"/>
  
     
      <p class="mt-5 mb-3">&copy; Welcome user</p>
    </form>






    


  
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    
  
  
  </body>
</html>
