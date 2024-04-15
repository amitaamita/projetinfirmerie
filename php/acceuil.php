<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>

   
    <style>

        header .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        
        }
        img{
            margin:5px;
        }
        
        header .container .menu ul{
            display: flex;
            gap: 30px;
            text-decoration: none;
            list-style: none;
        }
        
        .menu ul li {
            list-style: none;
            text-decoration: none;
        
        }
        
        .menu ul li a {
            text-decoration: none;
            list-style: none;
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
        .jumbo{
            /* background: url('img/WhatsApp Image 2024-03-18 à 10.24.20_ef02b7ba.jpg')no-repeat; */
            height: 100vh;
            padding-top: 100px;
            background-size: contain;
            display: flex;   
        }
        .jumbo{
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-top: -00px;
            background: url('../img/infirmerie free pic.jpg'); 
            background-size:cover;

        }
        .logo{
            padding-bottom: -400px;
        }
        .container{
            background-color:#fff;
            /* #c7adff */
        }
        /* .description{
            background-color: rgba(255, 255, 255, 0.3);
            padding: 18px;
            border-radius: 8px;
            gap: 20px;
            margin:0 8px 0 8px ;
        } */
        
        /* .slide-show-item:hover p{
            color: #69869a;
        } */
        .description{
            padding: 18px ;
            background-color: #ebe0ff; 
            /* hsla(320, 83%, 55%, 0.067); */
            /* #7151a9; */
            /* #c7adff; */
            border-radius: 8px;
            margin: 0 8px 0 8px;
             padding-bottom: -400px;
    
        
        }
        .slide-show{
            display: flex;
        }
        .description h3{
            text-align: center;
        }
        .description-img{
            text-align: center;
        }
        .jumbo h1 {
            text-align:center;
            margin-left: 39%;
            margin-bottom: 15%;
            font-size: x-large; 
            color:black;    
        }
        .titre p{
            margin-left: -65%;


        }
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        input[type='submit'] {
    color: white;
    background-color: #7151a9;
    padding:10px 10px;
    margin-top: 15px;
    border: 1px solid #fff;
    cursor: pointer;
    padding-left:-50px;
    border-radius:8px;
    margin-bottom:40px;
    margin
}
button a{
    text-decoration:none;
    list-style:none;
    color:white;
}
button {
    color:white;
    border-radius:8px;
    padding:10px 10px;
    background-color: #7151a9;
    margin-top:-10px;
    margin-left:-210px;
    border: 1px solid #fff;
    margin-bottom:-140px;

    width:150px;
    font-size:1rem;
}
        </style>
    <header>
    <body>
        <h1></h1>
        <div class="container">
            <img src="../img/treslogo_Plan de travail 1 copy.png" alt="logo" width="100px" >
            <!-- <h3>infirmerie iSEPAT</h3> -->
         
            <div class="menu">
                <ul>
                
                    <li><a href="consultation.php">consultation</a></li>
                    <li><a href="rv.php">prendre un rendez</a></li>
                    <li><a href="listepatient.php">listes des patients</a></li>
                    <li><a href="listerv.php">listes des rendez vous</a></li>
                    <li class="deconnexion"><a href="pourdeconnecter.php">Deconnexion</a></li>
                </ul>
            </div>
        </div>
        <?php
// require_once 'connexion.php';
?> 
    </header>
    <div class="main">

            
             <!-- ultime de la profession infirmière. -->
    
        <div class="jumbo">
            <h1>Bienvenue dans l'infirmerie <br>de l'isepat de diamniadio</h1>
           <div class="titre">
            <p>
            L'excellence des soins est la raison d'être de la profession infirmière <br>
            et reflète l'importance accordée à la vie humaine. Elle vise le bien-être et la sécurité <br>
             des personnes de tout âge, à toutes les étapes de leur vie et constitue le but<br> 

            </p>
              <div class="h7">
                       

             click ici pour ajouter
             </div>
             <button><a href="listepatient.php">voir plus..</a></button>
             <!-- <input  type="submit"  value="Valider"> -->
           </div>
           
            <div class="jumbo-img">
            <!-- <img src="../img/WhatsApp Image 2024-03-18 à 10.24.20_ef02b7ba.jpg" alt="img"> -->
            <div class="container">
                <div class="row">
                    
                    </div>
                </div>
    </div>
    <div>
    </div>
    <?php
    // $req = $db->query('SELECT * FROM mes_utilisateurs');
    // $mes_utilisateurs = $req->fetchall();

    // foreach ($mes_utilisateurs as $mes_utilisateurs) ?>
       <!-- echo $mes_utilisateurs['name']; -->
    
         <!-- <endforeach -->   
        
    </div>
   
    <div class="slide-show">
    <!-- <div class="images"> -->
   
    <div class="description">
        
        <h3>Traitement</h3>
        
        <img src="../img/WhatsApp Image 2024-03-18 à 10.24.17_2424ea33.jpg" alt="img" width="310px" margin="50px">
        <p>On distingue les traitements médicaux, utilisant <br>les médicaments et divers moyens physiques <br>(kinésithérapie, radiothérapie, thermalisme), 
        et les traitements<br> chirurgicaux, pratiqués selon les interventions avec<br>  divers 
        instruments et sous différents modes d'anesthésie.</p>
            </p>
            </div>
            <div class="description">
                <h3>Rendez-vous</h3>
                <img src="../img/rvimage.jpg" alt="img" width="290px" margin="50px">
              <p>L'équipe Infirmiers au rendez-vous est composée<br> de professionnels d’expérience qui se <br>démarquent par leurs compétences et leurs valeurs humaines.<br>
               Grâce à nos services, vous pouvez recevoir des soins<br> adaptés à vos besoins ou à ceux d’un être cher.<br> </p>
                    </div>
                    <div class="description">
                        <h3>consultation</h3>
                            <img src="../img/consultimg.jpg" alt="img" width="290px" margin="50px">
                <p>La consultation infirmière est un dispositif de<br> prise en soin global, ayant vocation à<br> répondre à plusieurs données ou problèmes présentés par une<br>
                 personne, dans le cadre du vécu de sa maladie. <br>Les objectifs de la consultation infirmière sont multiples<br></p>
                            </div>
</div>
</div>
                            <!-- <div class="description">
                                <h4>traitement</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Eius impedit tenetur consequuntur aliquid, ipsa iste incidunt? Odio, repellendus blanditiis! At, <br>
                                    nam! Totam temporibus corporis eligendi voluptatem natus pariatur doloremque sapiente?
                                    </p>
                                    </div> -->
            
                                    <!-- <h3>Traitement</h3>
                                    <img src="../img/WhatsApp Image 2024-03-18 à 10.24.17_2424ea33.jpg" alt="img" width="200px">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Eius impedit tenetur consequuntur aliquid, ipsa iste incidunt? <br>Odio, repellendus blanditiis! At, <br>
                                
                                        </p>
                                        </div>
                                        <div class="description">
                                            <h3>Rendez-vous</h3>
                                            <img src="../img/rvimage.jpg" alt="img" width="180px">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Eius impedit tenetur consequuntur aliquid, ipsa iste incidunt?<br> Odio, repellendus blanditiis! At, <br>
                                                </p>
                                                </div>
                                                <div class="description">
                                                    <h3>consultation</h3>
                                                        <img src="../img/consultimg.jpg" alt="img" width="200px">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Eius impedit tenetur consequuntur aliquid, ipsa iste incidunt?<br> Odio, repellendus blanditiis! At, <br>                   -->

</body>
</html>
<script src="jss/app.js"></script>
<script src="jss/slick.js"></script>
<script src="jss/script.js"></script>
