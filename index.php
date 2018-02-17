<!DOCTYPE HTML>
<HTML LANG="EN-US">
  <head>  
    <meta charset="utf-8"/>
    <title>VADAT STORES</title>
    <link rel="stylesheet" href="/pharmacy/css/default.css" type="text/css"> 
  </head>
  <body>
    <div id="wrapper">
      <div id="header1">
        <img src="/pharmacy/css/images/vadat.gif" margin-left="3px" width="100px" height="90px"/>
        <h1>VADAT PHARMACY STORES</h1>
        <form class="form" action="pharmacy/login1_comit.php" method="post">
          CUSTOMER_ID:<input  type="text" name="customer_id" placeholder="customer_id"/>
          PASSWORD:<input type="password" name="password" placeholder="password"/>
          <input type="submit" name="submit" value="LOGIN"/>
        </form>
      </div>

      <div id="page"> 
        
          <div id="nav">
            <ul>
                <a href=""><li>HOME</li></a>
                <a href=""><li>CONTACT US</li></a>
                <a href=""><li>ABOUT US</li></a>
                <a href="/pharmacy/pharmacy/register.php"><li>REGISTER</li></a>
            </ul>
          </div>
             <div id="sidebar">
                <ul>
                       <?php include $_SERVER['DOCUMENT_ROOT'].'/pharmacy/includes1/nav.php';?>
                        <!-- end navigation -->
                          
                </ul>
             </div>
             <div id="content">
               <h2>VADAT PHARMACY STORES</h2>
                        <!--body-->
                    <p>
                        
                        Welcome to VADAT PHARMACY STORES.
                            Here you will find the complete collection of
                            Drugs on our system.
                            Please contact our staff if you want to purchase any drugs
                    </p>
                        <p>PLEASE REGISTER IF YOU ARE A NEW CUSTOMER VISITING THIS STORE
                             </p>
             </div>
             <div id="sideleft">
              
             </div>

      </div>
         <div id="footer">
           &copy; 2017 D.dan Concept
         </div> 
      
    </div>
  </body>

</HTML>