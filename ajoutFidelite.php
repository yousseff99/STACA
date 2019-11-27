<?PHP
include "fidelite.php";
include "fideliteC.php";

if (isset($_POST['id']) and isset($_POST['id_client']) and isset($_POST['solde'])) {
$fidelite1=new fidelite($_POST['id'],$_POST['id_client'],$_POST['solde'] );
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$fidelite1C=new FideliteC();
$fidelite1C->ajouterFidelite($fidelite1);
header('Location: afficherFidelite.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>