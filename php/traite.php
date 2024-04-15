 <?php

include'./db.php';


$email= $_POST['email'];
$password= $_POST['password'];
$confirmpassword= $_POST['confirmpassword'];

echo $email,$password;

$inserer = "INSERT INTO `mes_utilisateurs` (`email`, `password`, `confirmpassword`) VALUES ('$email', '$password', '$confirmpassword')";

if(mysqli_query($db,$inserer) == true){
    echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
    header('location:acceuil.php');
}
    else
{
echo "Echec d'enregistrement";
}


echo "<br/>";



?> 
<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
// namespace Piwik\Access\Role;

use Piwik\Access\Role;
use Piwik\Piwik;
use Piwik\Url;

class Admin extends Role
{
    public const ID = 'admin';

    public function getName(): string
    {
        return Piwik::translate('UsersManager_PrivAdmin');
    }

    public function getId(): string
    {
        return self::ID;
    }

    public function getDescription(): string
    {
        return Piwik::translate('UsersManager_PrivAdminDescription', array(
            Piwik::translate('UsersManager_PrivWrite')
        ));
    }

    public function getHelpUrl(): string
    {
        return Url::addCampaignParametersToMatomoLink('https://matomo.org/faq/general/faq_69/');
    }
}
?>