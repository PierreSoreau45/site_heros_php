<?php

$courses = [
    [
        "type_course" => "speed",
        "histoire" => "
                        <p>
                            Vous avez choisi de courrir vite pour atteindre votre objectif. 
                            Au cinquième kilomètre vous êtes donc déjà essouflés et les jambes sont lourdes.<br> 
                            Pour faire les 5 derniers kilomètres vous devez choisir entre:
                        </p>
                        
                        <ul>
                            <li>Le chemin à droite qui est un chemin très valloné sur tout le reste de la course.</li>
                            <li>Le chemin de gauche qui est un chemin de pierres instables sur tout le reste de la course.</li>
                        </ul>"
    ],
    [
        "type_course" => "fundamental_endurance",
        "histoire" => " 
                        <p>
                            Vous avez choisi de courrir en endurance fondamentale pour atteindre votre objectif. 
                            Au cinquième kilomètre vous êtes donc encore en forme mais les jambes commencent à être lourdes.<br>  
                            Pour faire les 5 derniers kilomètres vous devez choisir entre:
                        </p> 

                        <ul>
                            <li>Le chemin à droite qui est un chemin très valloné sur tout le reste de la course.</li>
                            <li>Le chemin de gauche qui est un chemin de pierres instables sur tout le reste de la course.</li>
                        </ul>"
    ],
    [
        "type_course" => "slow",
        "histoire" => "
                        <p>
                            Vous avez choisi de courrir lentement pour atteindre votre objectif. 
                            Au cinquième kilomètre vous êtes donc encore en forme et les jambes sont fraîches.<br>  
                            Pour faire les 5 derniers kilomètres vous devez choisir entre:
                        </p>

                        <ul>
                            <li>Le chemin à droite qui est un chemin très valloné sur tout le reste de la course.</li>
                            <li>Le chemin de gauche qui est un chemin de pierres instables sur tout le reste de la course.</li>
                        </ul>"
    ]
];

session_start();
$_SESSION["choix_1"] = $_GET["choix_1"];
$speed = $_GET["choix_1"];
foreach ($courses as $course) {
    if ($course["type_course"] === $speed) {
        echo $course["histoire"];
    }
}
