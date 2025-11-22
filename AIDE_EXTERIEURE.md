dans le fichier speed.phtml (ligne 49 et 51): 

session_start();
$_SESSION["choix_1"] = $_GET["choix_1"];

dans le fichier path.phtml (ligne 95 et 96):

session_start();
$choix_1=$_SESSION["choix_1"];

Fonction session qui me permet de garder en mémoire la donnée du choix 1 de l'utilisateur (la vitesse de course) et le réutiliser pour la condition d'affichage du texte de fin du jeu qui prend en compte le choix 1 et 2.J'avais besoin de cette session parce que sinon ça ne me gardait pas en mémoire le get du choix 1 pour mon fichier path.phtml

Je l'ai trouvé via ChatGPT en indiquant ce prompt "comment tu fais pour récupérer les données de 2 formulaires différents provenant de 2 get différents et qui sont pas sur la même page en php"

dans le fichier main.phtml (ligne 4):

isset() sert à vérifier si une variable existe et n'est pas nul

Cette fonction m'a servi à demander d'afficher à l'écran le début du jeu et le premier formulaire dans le cas ou il n'y a aucune données de récupérée par l'input "page" du formulaire.

Je l'ai trouvé via ChatGPT en indiquant ce prompt "comment tu fais pour checker si une variable existe ou est nulle en php?"