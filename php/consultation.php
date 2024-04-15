
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="/css/connexion.css"> -->
</head>
<body>
    <style>
        
    * {
margin: 0;
padding: 0;
box-sizing: border-box;

}

body {
background-color: #e8cd84;
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
}

form {
background-color: #fff;
padding: 100px;
border-radius: 6px ;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

}

h1 {
text-align: center;
font-size: 20px;
}
.centre{
text-align: end;
}

/* hr { */
/* margin: 10px 0;
background-color: #fff;
border: 0;
height: 1px;
width: 100%; */
/* } */

label {
margin-bottom: 6px;
}

input {
margin-bottom: 5px;
padding: 5px;
width:100%;
outline: 0;
border: 1px solid rgba(0, 0, 0, 0.4);
jus
}

input:focus {
border: 1px solid #23a1f0;
}

input[type='submit'] {
color: white;
background-color: #e8cd84;
margin-top: 15px;
border: 1px solid #23a1f0;
cursor: pointer;
padding:20px;
}
.image{
    width: 100px;
}
.consultation img{
    width:160px;

  
}

form h1{
    padding-top: 26px;
}

#button{
    border-radius:px;
    padding-left:12px;
    gap:30px;
    /* margin-left:170px; */
    margin:5px 0;
    padding:10px;
    /* border:none;
    outline:none; */
    border-bottom: 2px solid ;

}
.consultation{
     /* display: flex;  */
    gap:10px
    /* margin-left:170px; */
}

textarea{
    width:100%;
}

.text{
    text-align:;
 
}
body {
     background: url('../img/pilules-blanches-thermomet.jpg')no-repeat;
    background-size: cover;
    /* padding: 50px 0 80px 0; */
    /* background-color: rgb(93, 189, 93); */
    /* display: flex; */
    align-items: center;
    justify-content: center;
    /* height: 100vh; */
}

form {
    /* background: url('../img/consultimg.jpg'); */
    /* display: flex;
    flex-direction: column; */
    background-color: rgba(255,255,255,0.06);
    padding: 1rem;
    padding:10px 300px;
    /* height:320px; */
    border-radius: 20px;
    border-left:1px solid rgba(255,255,255,0.3);
    border-top:1px solid #000;
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 20px 20px 20px -6px rgba(0,0,0,0.2);
    text-align:center;
    /* position:relative; */
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
    
    padding: 10px 10px;
    color: white;
    background-color: #7151a9;
    margin-top: 10px;
    border: 1px solid #fff;
    cursor: pointer;
}
.container{
    /* position:absolute; */
    top:50%;
    left:50%;
    -webkit-transform:translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
form a{
    /* text-decoration:none;
    font-size:12px;
    color: #ddd; */
}
form a :hover{
    /* text-shadow:2px 2px 6px #00000040; */
}
form a:active{
    /* text-shadow:none; */
}
textarea {
    /* background:transparent;
    width:250px;
    padding:7rem;
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
    border-radius:500px; */

}
form input {
    background:transparent;
    width:250px;
    padding:7rem;
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
c
/* a,
input:focus,
button:focus,
select:focus{ */
    /* outline:none */
}
header .container {
    display: flex;
    justify-content: space-around;
    align-items: center;

}

header .container .menu ul{
    display: flex;
    gap: 30px;
}


.menu ul li {
    list-style: none;
}

.menu ul li a {
    text-decoration: none;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 600;
}

.deconnexion{
    color: white;
    border: 1px solid peru;
    padding: 5px;
    background-color: rgba(220, 188, 9, 0.4);
    margin-top: -5px;
}

.deconnexion:hover {
    background-color: peru;
}
.menu ul li a:hover {
    border-bottom: 1px solid;
}
nav{
    width: 100%;
    height: 50px;
    background-color: cornflowerblue;
    border-bottom: 0.5px solid white;
    height: vh;
    padding-left: 35%;
}
.liste-items{
    display: flex;
    justify-content: center;
    color: black;
    list-style-type: none;
    height: 100%;
    line-height: 50px;
    font-size: 22px;
    gap: -10px;
}
.items{
    cursor: pointer;
    margin: 0 20px;
    flex-shrink: 0;
}
.items span{
    font-size: 17px; 
}
.items:nth-child(3){
    margin-left: 0;
}
.sous-liste{
    /* position: relative; */
    top: -3px;
    display: none;
}
.items-sous-liste{

    list-style-type: none;
    text-align: center;
    padding: 0 10px;
    background: rgb(181, 208, 250);
    border-bottom: 0.5px solid rgb(167, 167, 167);
}
.items-sous-liste:hover{
    background: rgb(156, 156, 156);
}
.items:hover > ul {
    display: block;
}
.items a{
    text-decoration: none;
    color: black;
}
.item a{
    text-decoration: none;
    color:#fff;
    padding: 10px  10px ;
    margin: 0 8px 0 8px;
    border-radius: 20px;
    background-color: #7151a9;
    border: 1px solid #fff;
    cursor: pointer;
    /* font-size:1rem; */
    font-weight:900;
    /*  #7151a9;*/
}
.cons{
    font-weight: 800;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-family:'montserrat', sans-serif;

    color: #fff;
}
form .item a:hover{
    background:rgba(255,255,255,0.1);
    box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
}
      
        

    </style>
     <header>
        <!-- <nav>
            <ul class="liste-items">
                <li class="items">
                    Acceuil
                    <span>&#9660 ;</span>
                    <ul class="sous-liste">
                        <li class="items-sous-liste">lorem</li>
                        <li class="items-sous-liste">lorem</li>
                        <li class="items-sous-liste">lorem</li>
                    </ul>
                    </li>
                </nav>
     -->
            <!-- <h1></h1>
            <div class="container">
                <img src="../img/WhatsApp Image 2024-03-18 à 11.49.14_caae857f.jpg" alt="logo" width="120px">
                <!-- <h3>infirmerie iSEPAT</h3> -->
             
                <!-- <div class="menu">
                    <ul>
                        <li><a href="consultation.php">consultation</a></li>
                        <li><a href="rv.php">prendre un rendez</a></li>
                        <li><a href="listepatient.php">listes des patients</a></li>
                        <li class="deconnexion"><a href="connexion.php">Deconnexion</a></li>
                    </ul>
                </div> -->
            <!-- </div> --> 
             
        </header>
        <!-- <li><a href="listerv.php">liste rv</a></li> -->
        <form action="ajout.php" method="post" name="form1">
        <br>
        <div class="cons">
        <h1>Consultation</h1>
        <br>
        </div>
        <div class="item">
        <a href="acceuil.php">Acceuil</a>
        <a href="rv.php">rendez-vous</a>
        <a href="listepatient.php">listes des patients</a>
         <!-- <li><a href="listerv.php">liste rv</a></li>  -->
        <a href="pourdeconnecter.php">Deconnexion</a>
        </div>
        <br>

        <hr>
             <!-- <img id="profile" src="../img/consultimg.jpg" alt=""> -->

        <input type="hidden" id="button" >
        <input type="text" placeholder="nom" name="nom" id="button" >
    
        <input type="text" placeholder="prenom" name="prenom" id="button" >
    
        <input type="text" placeholder="age" name="age" id="button" >
    
        <!-- <label id="button">Poids(kg)</label> -->

        <input type="text" placeholder="sex" name="sex" id="button">
        
        <!-- <label id="button">Tension</label> -->

        <input type="text" placeholder="group sanguin" name="group_sanguin" id="button" >
        
    
        <input type="text" placeholder="filiere" name="filiere" id="button" >
        

        <input type="text" placeholder="tension" name="tension" id="button" >

        <input type="text" placeholder="Temperature" name="temperature" id="button" >
        <!-- <label id="button">Temperature(c)</label>
        <br> -->
        <input type="text" placeholder="diagnostic" name="diagnostic" id="button" >
        
        
<textarea placeholder='observation' name="observation"  id="text" cols="3" rows="3">
    observation
    
</textarea><br>
<br>

<input type="submit"name="valider" value="soumetre"><br><br>


</div>
       
    </div>

        </form>
        
    </form>
</body>
</html>