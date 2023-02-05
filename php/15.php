<!DOCTYPE html>
     <html> 
     <head> 
  <title>Chess Board  </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>Chess Board using Nested For Loop</h3>
   <table style="align:center;" width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
      for($r=1;$r<=8;$r++)
	  {
          echo "<tr>";
          for($c=1;$c<=8;$c++)
		  {
                $total=$r+$c;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=white></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=black></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  
  </body>
  </html>
