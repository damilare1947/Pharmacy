<?php
$link=mysql_connect('localhost','root','') or die (mysql_error());
mysql_select_db("pharmacy") or die (mysql_error());
$query = "SELECT * FROM drug order by drug_id";
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

                    <h2 style="text-align:center; color:deeppink;" >DRUG COLLECTIONS</h2>

                    <table class="aatable">
                        <tr>
                            <th >SL No</th>
                            <th>Drug Name</th>
                            <th><a href="/pharmacy/pharmacy/manufacturer.php">Drug Manufacturer</a></th>
                            <th >Price</th>
                            <th >Status</th>
                        </tr>
                            
                            <?php

                            while ($row = mysql_fetch_array($result)) {
                            $drug_id = $row['drug_id'];
                            $drug_name = $row['name'];
                            $manufacturer = $row['manufacturer'];
                            $price=$row['price'];
                            $status=$row['status'];


                            echo "<tr>";
                            echo "<td>".$drug_id."</td>";
                            echo "<td >".$drug_name."</td>";
                             echo "<td>".$manufacturer."</td>";
                            echo "<td>".$price."</td>";
                            echo "<td>".$status."</td>";

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
