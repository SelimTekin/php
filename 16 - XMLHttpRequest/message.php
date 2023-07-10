<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $comment = $_POST['comment'];

    if(!empty($username) && !empty($comment)){
        echo "<div>Form Submitted Successfully</div>";
        echo "<div>Here is the " . $comment . "</div>";
    }
    else{
        echo "Please fill the form";
    }
}
else{
    echo "OOPS!! Something wrong happened !!";
}