<!Doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8"/>
    <title>Customer Registration</title>
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
        <h2 style="text-align:center; color:deeppink">Customer Registration</h2>
      <form action="register_comit.php" method="post">
        <div id="formtext">Customer_ID:</div>
        <input class="formbox" type="text" size="30" name="customer_id" value=""><br></br>
        <div id="formtext">Firstname:</div>
        <input class="formbox" type="text" size="30" name="firstname" value=""><br></br>
        <div id="formtext">Lastname:</div>
        <input class="formbox" type="text" size="30" name="lastname" value=""><br></br>
        <div id="formtext"> Password:</div>
        <input class="formbox" type="password" size="30" name="password" value=""><br></br>
        <select class="formbox" name="sex"><br></br>
        <option class="formbox" value="" selected>select a sex</option>
        <option class="formbox" value="male">male</option>
        <option class="formbox" value="female">female</option>
        </select><br></br>
        <div id="formtext">Address:</div>
        <input class="formbox" type="text" size="30" name="address" value=""><br></br>
        <div id="formtext">Phone no:</div>
        <input class="formbox" type="tel" size="30" name="phone_no" value=""><br></br>
        <div id="formtext">Email:</div>
        <input class="formbox" type="email" size="30" name="email" value=""><br></br>
        <input  type="submit" name="submit" value="Submit"/>
        <input  type="reset" value="clear form"/>
      
      </form>
      </section>
    </div>
  </body>
</html>
