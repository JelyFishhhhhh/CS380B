<?php

    $variable= 35.6789;
    echo "-> original<br>";
    echo $variable;
    echo "<br>";
    echo gettype($variable);
    
    echo "<br>";
    
    echo "-> float<br>";
    settype($variable, "float");
    echo $variable;
    echo "<br>";
    echo gettype($variable);
    
    echo "<br>";
    
    echo "-> string<br>";
    settype($variable, "string");
    echo $variable;
    echo "<br>";
    echo gettype($variable);
    
    echo "<br>";
    
    echo "-> boolean<br>";
    $buffer= $variable;
    settype($buffer, "boolean");
    echo $buffer;
    echo "<br>";
    echo gettype($buffer);
    
    echo "<br>";
    
    echo "-> integer<br>";
    $buffer= $variable;
    settype($buffer, "integer");
    echo $buffer;
    echo "<br>";
    echo gettype($buffer);

?>