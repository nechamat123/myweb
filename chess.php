<table width = "400px" cellspacing = "0px" cellpadding = "0px" border = "1px">
<?php
    for ($row = 1; $row <= 8; $row++){
        echo "<tr>";
        for ($column = 1; $column <= 8; $column ++){
            echo "<td height = 30px width = 30px bgcolor = 'red' ></td>";
            
            if($total%2==0)
            {
            echo "<td height=30px width=30px bgcolor=#red></td>";
            }
            else
            {
            echo "<td height=30px width=30px bgcolor=#black></td>";
            }
            }
            echo "</tr>";
      }
?>
</table>