<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Z'Eduka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/logo.png" rel="icon" />
</head>
<body>
    <?php
        require('header.php');
        if(isset($_GET['target']))
        {
            $target=$_GET['target'];
        } 
            else 
            {
                $target='home';
            }
        switch($target)
        {
            case 'home'   :
                require('home.php');break;
            case 'about'  :
                require('about.php');break;
            case 'courses' :
                require('courses.php');break;
            case 'addons' :
                require('addons.php');break;
            case 'contact' :
                require('contact.php');break;
            case 'form' :
                require('form.php');break;
            case 'terima' :
                require('terima.php');break;
            default       :
                echo "<h2>PAGE NOT FOUND!!!</h2>";
        }
        require('footer.php');
    ?>
</body>
</html>