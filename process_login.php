<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "bonjourr___" && $password == "emilycooper4215"){
            header("Location: home.html");
            exit();
        }
        else{
            echo "
                <script>
                    alert('Username/Password tidak ditemukan');
                    window.location.href = 'log_in.php'; 
                </script>";
        }
    }
?>