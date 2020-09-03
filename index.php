

<!DOCTYPE html>
<html lang="en">
<head>
     

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#009578">
    <!-- ios -->
    <link rel="apple-touch-icon" href="/images/96.png">
    <meta name="apple-mobile-web-app-status-bar" content="#FFE1C4">
    <meta name="theme-color" content="#FFE1C4">
    <title>Document</title>
    
    <link rel="manifest" href="manifest.json">
   
</head>
<body>
<?php

class abc {

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function person()
    {
        echo 'hello'.' '.$this->name;
    }

    }

$obj= new abc('ashif');
$obj->person();

?>
</body>
<script src="app.js"></script>
</html>

