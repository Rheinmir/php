<!--
    Validate form Client: HTML5 tag, JS
    Validate form Server: PHP 

    validate
    fullname -> more than 4 characters
    email: -> must be in the correct email format
!-->
<?php
    if(!empty($_POST)){
        $error = [];

        //fullname error filtering
        if(empty($_POST['fullname'])){
            $errors['fullname']['required'] = 'Fullname cannot be null';
        }
        else{
            if(strlen($_POST['fullname'])<4){
                $errors['min_length'] = 'Fullname must be more than 4 characters';
            }
        }
         //email error filtering
        if(empty($_POST['email'])){
            $errors['email']['required'] = 'Email cannot be null';
        }
        else{
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $errors['email']['invalid'] = 'Email is invalid';
            }
        }

        if(empty($errors)){
            echo "Validate pass";
        }
        else{
            echo "Error appears";
        }

        echo '<pre>';
        print_r($errors);
        echo '</pre>';
    }
       
    
?>
<form method="post" action="">
    <p>Fullname:
        <input type="text" name="fullname" placeholder="Fullname:">
        <?php echo !empty($errors['fullname']['required']) ?'<p style="color:red;">'. $errors['fullname']['required'] : ''; ?>
        <?php echo !empty($erors['fullname']['min_length']) ?'<p style="color:red;">'. $errors['fullname']['min_length'] : ''; ?>

    </p>
    <p>Email:
        <input type="text" name="email" placeholder="Email:">
        <?php echo !empty($errors['email']['required']) ?'<p style="color:red;">'. $errors['email']['required'] : ''; ?>
        <?php echo !empty($erors['email']['invalid']) ?'<p style="color:red;">'. $errors['email']['invalid'] : ''; ?>

    </p>
    
        <button type="submit">Confirm</button>
</form>