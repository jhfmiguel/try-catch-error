<?php
function treatName($name){
    if(!$name){
        throw new Exception("No name found.", 1);
    }
    echo ucfirst($name)."<br>";
}

try{
    treatName("John");
    treatName("");
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "Try executed.";
}