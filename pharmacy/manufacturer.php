<?php
$link=mysql_connect('localhost','root','') or die (mysql_error());
mysql_select_db("pharmacy") or die (mysql_error());
$query = "SELECT * FROM drug_manufacturer order by drug_manufacturer_id";
$result = mysql_query($query,$link)
or die(mysql_error());
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=unicode UTF-8" />
        <title>VADAT STORES</title>

        <link href="/pharmacy/css/default.css" rel="stylesheet" type="text/css" />
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
                 <div id="section3">

                    <h2 style="text-align:center; color:deeppink;" >DRUG MANUFACTURER COLLECTIONS</h2>

                    <table class="aatable">
                        <tr>
                            <th >SL No</th>
                            <th>Names</th>
                            <th>Address</th>
                           
                        </tr>
                            
                            <?php

                            while ($row = mysql_fetch_array($result)) {
                            $drug_manufacturer_id= $row['drug_manufacturer_id'];
                            $name = $row['name'];
                            $address = $row['address'];
                            

                            echo "<tr>";
                            echo "<td>".$drug_manufacturer_id."</td>";
                            echo "<td >".$name."</td>";
                            
                            echo "<td>".$address."</td>";
                           
                                ?>
                            <?php
                        echo "</tr>";
                            }
                            ?>
                        </table>
                          <!--body ends-->
 
                    <!-- end div#welcome -->

           
                         <!-- end div#content -->

                            <!-- end div#sidebar -->
                        <div style="clear: both; height: 1px"></div>
            
                           
                </section>
        </div>
    </body>
</html>
