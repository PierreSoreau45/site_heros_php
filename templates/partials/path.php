<?php

$resultats = [
    [
        "type_course" => "speed",
        "chemin" => "right_path",
        "histoire" => "
                        <p>
                            Vous avez choisi le chemin de droite. 
                            La fatigue vous a fait perdre l'équilibre sur une pierre instable. 
                            Vous vous êtes cassés la cheville, impossible de finir la course.
                        </p>

                        <p>
                        C'est perdu!
                        </p>"     
        
    ],
    [
        "type_course" => "speed",
        "chemin" => "left_path",
        "histoire" => "
                        <p>
                            Vous avez choisi le chemin de gauche. 
                            Malgré la fatigue et les montées régulières vous tenez le coup et vous finissez les 10km en 45min.
                        </p>

                        <p>
                            C'est gagné!
                        </p>"     
        
    ],
    [
        "type_course" => "fundamental_endurance",
        "chemin" => "right_path",
        "histoire" => "
                        <p>
                            Vous avez choisi le chemin de droite. 
                            Vous restez solide sur vos appuis malgré le chemin encombré de pierres instables et vous finissez les 10km en 50min.
                        </p>

                        <p>
                            C'est gagné!
                        </p>"     
        
    ],
    [
        "type_course" => "fundamental_endurance",
        "chemin" => "left_path",
        "histoire" => "
                        <p>
                            Vous avez choisi le chemin de gauche.
                            L'energie est encore là et vous gardez la même vitesse de course malgré le chemin vallonné. 
                            C'était la meilleure stratégie de course et vous finissez les 10km en 40min.
                        </p>

                        <p>
                            C'est gagné!
                        </p>"     
        
    ],
    [
        "type_course" => "slow",
        "chemin" => "right_path",
        "histoire" => "
                        <p>
                            Vous avez choisi le chemin de droite. 
                            Vous êtes en pleine forme mais vous avez perdu trop de temps sur les 5 premiers kilomètres. 
                            Il est désormais impossible pour vous de rattraper ce retard car vous ne pouvez pas accéler au risque de tomber. 
                            Vous finissez donc votre course en 1h20min 
                        </p>

                        <p>
                            C'est perdu!
                        </p>"     
        
    ],
    [
        "type_course" => "slow",
        "chemin" => "left_path",
        "histoire" => "
                        <p>
                            Vous avez choisi le chemin de gauche. 
                            Vous êtes en pleine forme et vous continuez à la même vitesse. 
                            C'était une stratégie osée mais vous finissez tout de même votre course en 58min.
                        </p>

                        <p>
                            C'est gagné!
                        </p>"     
        
    ]
];
session_start();
$choix_1=$_SESSION["choix_1"];
$path=$_GET["choix_2"];
foreach ($resultats as $resultat) {
    if ($resultat["type_course"]===$choix_1 && $resultat["chemin"]===$path) {
        echo $resultat["histoire"];
    }
}
?>