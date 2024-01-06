
<!DOCTYPE html>
<html>
<body>

<?php
function table($value)
    {
        $increment=1;
        echo "Table of {$value}<br>";
        while($increment<=10)
        {
            $result =$value*$increment;
            echo "$value x $increment = $result <br>";
            $increment++;
        }
        };
        table(5);
?>
</body>
</html>
