<?php
    if (isset($_POST['passe']) AND 
              $_POST['passe'] == 'kangourou'){
?>

        <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>


<?php
}
else{
    echo'<p>Mauvais mot de passe</p>';

}

?>