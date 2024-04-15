<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="./styleForm.css">
    <link rel="stylesheet" href="css/connexion.css">
    <script defer src="js/connexion.js"></script>
</head>
<body>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

body {
     background: url('../img/WhatsApp Image 2024-03-18 à 10.24.17_2424ea33.jpg')no-repeat;
    background-size: cover;
     
    padding: 50px 0 80px 0;

    background-color: rgb(93, 189, 93);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;


}

form {
    /* background: url('../img/WhatsApp Image 2024-03-18 à 14.54.40_8d4a3745.jpg'); */
    display: flex;
    flex-direction: column;
    background-color: rgba(255,255,255,0.06);
    padding: 1rem;
    padding:10px 90px;
    height:320px;
    border-radius: 20px;
    border-left:1px solid rgba(255,255,255,0.3);
    border-top:5px solid #000;
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 20px 20px 20px -6px rgba(0,0,0,0.2);
    text-align:center;
    position:relative;
    -webkit-transition: all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
   
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
    /* rgba(255,255,255,0.3); */


    rgba(255,255,255,0.06);
}

h4 {
    text-align: center;
    font-size: 20px;
}

hr {
    margin: 10px 0;
    background-color: #fff;
    border: 0;
    height: 1px;
    width: 100%;
}

label {
    margin-bottom: 6px;
}

/* input {
    margin-bottom: 5px;
    padding: 5px;
    outline: 0;
    border: 1px solid rgba(0, 0, 0, 0.4);
} */

input:focus {
    border: 1px solid rgba(93, 189, 93);;
}

input[type='submit'] {
    color: white;
    background-color: #7151a9;
    margin-top: 15px;
    border: 1px solid #fff;
    cursor: pointer;
}
.container{
    position:absolute;
    top:50%;
    left:50%;
    -webkit-transform:translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
form a{
    text-decoration:none;
    font-size:12px;
    color: #ddd;
}
form a :hover{
    text-shadow:2px 2px 6px #00000040;
}
form a:active{
    text-shadow:none;
}
form input{
    background:transparent;
    width:200px;
    padding:1rem;
    margin-bottom:2rem;
    border:none;
    border-left:1px solid rgba(255,255,255,0.3);
    border-top: 1px solid rgba(255,255,255,0.3);
    -webkit-backdrop-filter: blur(5px);
    backdrop-filter:blur(5px);
    box-shadow:4px 4px 60px rgba(0,0,0,0.2);
    text-align:center;
    position:relative;
    -webkit-transition:all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
    color:#fff;
    font-weight:500;
    font-family:'montserrat', sans-serif;
    -webkit-transition: all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
    text-shadow:2px 2px 4px rgba(0,0,0,0.2);
    border-radius:500px;
}
form input:hover{
    background:rgba(255,255,255,0.1);
    box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
}
form input[type="email"]:focus,
form input[type="mot de passe"]:focus,{
    background:rgba(255,255,255,0.1);
    box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);

}
form input[type="submit"]{
    margin-top:-10px;
    margin-left:20px;
    width:150px;
    font-size:1rem;
}
form input[type="submit"]:hover{
    curser: pointer;
}
form:hover{
    margin:4px;
}
::-webkit-input-placeholder{
    font-family:'montserrat', sans-serif;
    font-weight:400;
    color:#fff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
}
a,
input:focus,
button:focus,
select:focus{
    /* outline:none */
}
.drops{
    background:rgba(255,255,255,0.06);
    -webkit-backdrop-filter:blur(10px);
    backdrop-filter:blur(10px);
    border-radius:10px;
    border-left: 1px solid 
    rgba(255,255,255,0.3);
    border-top:1px solid
    rgba(255,255,255,0.3);
    box-shadow:10px 10px 60px -8px rgba(0,0,0,0.2);
    position:absolute;
    -webkit-transition:all 0.2s ease;
    transition:all 0.2s ease;

}
.container h4{
    color:white;
}


/* 
// require_once 'acceuil.php';
 */ 
    </style>
    <div class="container">
    

    <form action="./traite.php" method="post">
    
        <h4>se connecter</h4>
        <hr>

        <label for="email"></label>
        <input type="email" placeholder="eMail" type="email" name="email" id="email">

        <label for="password"></label>
        <input type="password" placeholder="mot de passe" type="password" name="password" id="password">

        <!-- <label for="password"></label>
        <input type="password" placeholder="confirmer mot de passe" type="password" name="password" id="password">
  -->
         <!-- <label for="confirmpassword">Confirmer le Mot de passe</label>
        <input type="password" name="confirmpassword" id="confirmpassword"> 
         -->
        <input type="submit" name="login" value="Valider">
        <!-- <a href="">mot de passe oublie?</a> -->
    </form>
   
</div>
<!-- <?php
// include('connexion.php')
// SESSION_start();
// if(isset($_post['connecter'])){
//     $email=$_post['email'];
//     $mdp=$_post['mdp'];
//     $req="SELECT id FROM user WHERE login ='$login' and mdp ='$mdp'";
//     $result = mysqli_query($conn,$req);
//     if(mysqlli_num_rows($result)===1){
//         $_session['email']=$email;
//         header("location:acceuil.php");
//     }{
//         $error ="nom d'utilisateur ou mot de passe incorrect veuillez reessayer"
//     }
//     }
//     mysqli_close($conn);
?>
<?php 
// if(isset($error)) (echo"<h3>$error</h3>";)
?> -
 

    
</body>
</html>