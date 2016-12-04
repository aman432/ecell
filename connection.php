<?php define('DBHOST', 'localhost');
               define('DBUSER', 'root');
               define('DBPASS', '');
               define('DBNAME', 'ecell');
               
               $connect = mysql_connect(DBHOST,DBUSER,DBPASS);
               $dbcon = mysql_select_db(DBNAME);
               ?>