<!Doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8"/>
    <title>Admin</title>
    <link rel="stylesheet" href="/pharmacy/css/default.css" type="text/css"/>
    <style>
        
        li{ 
            list-style: none;
             padding:3px;    
        }
        a{
         text-decoration:none;
        }
          a:visited{
          color:gray;
        }
          a:hover{
           color:blue ;
        }
   </style>
 
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div id="header"></div>
        <nav>
          <ul>
            <a href="/pharmacy/index.php"><li style="color:white">HOME</li></a>
            <a href=""><li style="color:white">ABOUT US</li></a>
            <a href=""><li style="color:white">CONTACT US</li></a>
          </ul>
        </nav>
      </header>
      <section>
        <h2 style="text-align:center; color:deeppink">ADMIN DASHBOARD</h2>
        <div id="dash">
          <ul>
            <a href="add_drugs.php"><li>Add Drugs</li></a>
            <a href="add_drugs.php"><li>Update Drugs</li></a>
            <a href="add_drugs.php"><li>Delete Drugs</li></a>
          </ul>
        </div>
        <div id="dash1">
          <ul>
            <a href="add_manufacturer.php"><li>Add manufactuers</li></a>
            <a href="add_manufacturer.php"><li>Update Manufacturers</li></a>
            <a href="add_manufacturer.php"><li>Delete manufacturers</li></a>
          </ul>
        </div>
      
      </section>
    </div>
  </body>
</html>
