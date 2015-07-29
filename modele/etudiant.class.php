<?php
class Etudiant {
	var $id;
	var $nom_etud;
	var $prenom_etud;

	
	//constructeur de la classe étudiant:
	function __construct($id,$nom_etud,$prenom_etud){
	$this->id=$id;
	$this->nom_etud=$nom_etud;
	$this->prenom_etud=$prenom_etud;

	}
	//methode ajout:
	function ajout()
	{
		mysql_query("insert into etudiant (nom_etud,prenom_etud) 
		values('".$this->nom_etud."','".$this->prenom_etud."')");
		echo "<script>window.location.href='index.php';>
		</script>";
		}
	//redirection
	
	//methode modifier
	function modif(){
	
	mysql_query("update etudiant set nom_etud='".$this->nom_etud."',prenom_etud='".$this->prenom_etud."',adresse='".$this->adresse."',email='".$this->email."',cin='".$this->cin."' where id ='".$this->id."'");
	
	}
	//suppression
	function supp()
	{
		mysql_query("delete from etudiant where id='".$this->id."'");
		
		echo "<script>window.location.href='index.php';>
		</script>";
		
		
	}
	function liste()
	{
		$req=mysql_query("select * from etudiant");
		return $req;
		

	}#fin classe
	
	//remplir le formulaire de modif etudiant
	function Modif1($id)
	{
		$req=mysql_query("select * from etudiant where id='$id'");
		
		return $req;
	}
	
}