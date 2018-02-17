<!Doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8"/>
    <title>Admin</title>
    <link rel="stylesheet" href="/pharmacy/css/default.css" type="text/css"/>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div id="header"></div>
        <nav>
          <ul>
            <a href="/pharmacy/index.php"><li>HOME</li></a>
            <a href=""><li>ABOUT US</li></a>
            <a href=""><li>CONTACT US</li></a>
          </ul>
        </nav>
      </header>
      <section>
        <h2 style="text-align:center; color:deeppink">Customer Login</h2>
      <form action="login1_comit.php" method="post">
        <div id="formtext">Customer_ID:</div>
        <input class="formbox" type="text" size="30" name="customer_id" value="" placeholder="Customer_id"><br></br>
        <div id="formtext">Password:</div>
        <input class="formbox" type="password" size="30" name="password" value=""placeholder="password"><br></br>
        <input  type="submit" name="submit" value="Login"/>
        <input  type="reset" value="clear form"/>
      
      </form>
      </section>
    </div>
  </body>
</html>
