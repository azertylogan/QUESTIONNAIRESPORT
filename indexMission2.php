<?php include "headerMission2.php"; ?>
<head>
  <link rel="stylesheet" href="css/HomePage.css">
  <link rel="stylesheet" href="style0.css">
  <link href='http://fonts.googleapis.com/css?family=Gabriela' rel='stylesheet' type='text/css'>
</head>

<body class="body">
  <div class="general">
  <h1>Quel sport vous correspond ?</h1>
    <h6>Ce questionnaire a pour but de découvrir quel sport est fait pour vous. Les résultats possible de ce questionnaire font partie d'une liste de quinze sports différents
    qui ont une ligue au sein de la Maison Des Ligues de Lorraine. Pour réaliser ce questionnaire aucune information ou inscritption n'est demandé. Vous pouvez à tout moment
  recommencer le questionnaire en cliquant sur <a classe="rcmgeneral" href="#sportsDeCombat">Commencer le questionnaire</a>.</h6>
    <a href="#sportsDeCombat"><h5>Commencer le questionnaire</h5></a>
      <div class="questionnaire">

        <div id="sportsDeCombat" class="questionReponse">
          <h4>Aimer vous les sports de combat ?</h4>
          <div class="ouiNon">
            <div class="ouno"><a href="#artMartiaux"> <p>oui</p></a></div>
            <div class="ouno"><a href="#sportsCollectif"> <p>non</p></a></div>
          </div>
        </div>

          <div id="artMartiaux" class="questionReponse">
            <h4>Les arts martiaux vous intéresse t il ?</h4>
            <div class="ouiNon">
              <div class="ouno"><a href="#frapper"> <p>oui</p></a></div>
              <div class="ouno"><a href="#boxe"> <p>non</p></a></div>
            </div>
              <div class="revenir"><a href="#sportsDeCombat"> <p>revenir en arrière</p></a></div>
          </div>

            <div id="frapper" class="questionReponse">
              <h4>Voulez-vous un sport où il faut frapper ?</h4>
              <div class="ouiNon">
              <div class="ouno"><a href="#karate"> <p>oui</p></a></div>
              <div class="ouno"><a href="#judo"> <p>non</p></a></div>
            </div>
              <div class="revenir"><a href="#artMartiaux"> <p>revenir en arrière</p></a></div>
            </div>

              <div id="karate" class="questionReponse">
                <h4>Karaté</h4>

                <div class="resultatimg">
                  <img src="image/karate.jpg" atl="karate" width="35%" height="35%">
                </br><p> Le Karaté est un art martial japonais qui tient son origine de l’île d’Okinawa. Il consiste en l’utilisation de techniques à la fois offensives et
                   défensives faisant appel à toutes les parties du corps : mains, pieds, etc.</p>
                <p>Les compétitions de karaté se font sous deux formes :</p>
                <li>Combat : En japonais, on le nomme « Kumite ». Le combat de compétition oppose deux athlètes durant un temps donné sur un tatami. Chaque athlète est équipé
                   de protections et d’une ceinture de couleur (rouge ou bleue) afin de bien les différencier.</li>
                <li>Kata : Il s’agit d’un enchainement de mouvements qui suit un diagramme bien défini. Son origine forme un corps de techniques qui est immuable et qui traverse
                   le temps de manière inchangée. L’athlète effectue un enchaînement de mouvements contre plusieurs adversaires qui est noté selon des critères précis
                   (précision, vitesse, etc.). Il existe deux types de compétitions en kata : individuel et par équipe (3 athlètes représentent une même équipe et effectuent le
                    kata simultanément).</li>
            </div>
            <div class="fede">
            <a target="blank" href="http://www.ffkarate.fr"><img src="image/ffkarate.png" alt="ffkarate" width="20%" height="20%"></a>

        </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue Karaté de Lorraine.</p>
        <form method="post" action="email.php">
        <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
        <button type="submit" class="bouton">Valider mon adresse mail</button>
        </div>
                <a href="#frapper"> <p>revenir en arrière</p></a>
              </div>

              <div id="judo" class="questionReponse">
                <h4>judo</h4>

                <div class="resultatimg">
                  <img src="image/judo.jpg" atl="judo" width="35%" height="35%">
                </br><p> Jigoro KANO, fondateur de l’école du JUDO KODOKAN, a résumé ainsi son entreprise :</p>
                <p>"Le Judo est l’élévation d’une simple technique à un principe de vivre".</p>
                <p>"En étudiant le Judo, il est essentiel d’entraîner le corps et de cultiver l’esprit à travers la pratique des méthodes d’attaque et de défense, et ainsi de maîtriser son principe."  </p>
                </br><p>Sport d’équilibre, sport éducatif, sport de défense, le Judo est adapté à toutes les tranches d’âge.
                Véritable sport éducatif, le Judo permet à chacun de devenir plus adroit, plus souple, plus fort mais aussi d’apprendre à respecter des règles, découvrir l’entraide, évaluer ses forces et ses faiblesses pour progresser.</p>
                </br><p>Le Judo est un sport pour tous qui procure un véritable équilibre. Activité de détente et de plaisir, le Judo est une discipline basée sur l’échange et la progression. L’apprentissage se fait de manière progressive en fonction des aptitudes de l’individu, ce qui permet à chacun d’évoluer à son rythme.</p>
            </div>
            <div class="fede">
            <a target="blank" href="http://www.ffjudo.com"><img src="image/ffjudo.png" alt="ffjudo" width="20%" height="20%"></a>

        </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de judo de Lorraine.</p>
        <form method="post" action="email.php">
        <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
        <button type="submit" class="bouton">Valider mon adresse mail</button>
        </div>

                <a href="#frapper"> <p>revenir en arrière</p></a>
              </div>

            <div id="boxe" class="questionReponse">
              <h4>boxe</h4>

              <div class="resultatimg">
                <img src="image/boxe.jpg" atl="boxe" width="35%" height="35%">
              </br><p> La boxe anglaise, aussi appelée le noble art, entre dans la catégorie des sports de combat. Cette discipline apparaît au XVIIIe siècle, organisée par des parieurs. Le premier boxeur reconnu comme champion poids lourds de boxe anglaise fut l'Anglais James Figg, en 1719. Les règles du marquis de Queensberry, rédigées en 1857, mirent l'accent sur l'agilité plutôt que sur la force. Ces nouvelles règles interdisaient lors d'un combat de boxe anglaise, le combat à mains nues, le corps à corps, l'étouffement, les coups lorsque l'adversaire est impuissant et les coups au-dessous de la ceinture. Le dernier champion poids lourds de boxe anglaise à mains nues fut l'américain John L. Sullivan, en 1889. En combattant avec des gants selon les règles de Queensberry, Sullivan perdit son titre de champion du monde de boxe anglaise, le 7 septembre 1892. Les règles de Queensberry devinrent le code qui régit la boxe professionnelle.</p>
              </br><p> Les principaux coups d'attaque de la boxe anglaise sont le crochet, le direct et l'uppercut. La garde est une position des bras et des jambes qui consiste à la fois à se protéger et à préparer une attaque.</p>
            </br><p>Aujourd’hui, que ce soit en boxe olympique ou professionnelle, les boxeurs tentent d'éviter les coups de poing de leur adversaire tout en essayant de le toucher. Des points sont attribués à chaque coup considéré comme net, puissant et précis. À la fin du combat, le boxeur ayant le plus de points est déclaré vainqueur. La victoire peut également être atteinte si un combattant met son adversaire hors de combat (par knockout ou KO), c’est-à-dire dans l'incapacité de se relever et de reprendre le combat après le compte de dix secondes de l'arbitre. Un combattant est également déclaré vainqueur si son adversaire blessé ne peut continuer le combat (KO technique ou TKO).</p>
              </div>
              <div class="fede">
              <a target="blank" href="http://www.ffboxe.com"><img src="image/ffb.png" alt="ffboxe" width="20%" height="20%"></a>

            </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de boxe de Lorraine.</p>
              <form method="post" action="email.php">
              <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
              <button type="submit" class="bouton">Valider mon adresse mail</button>
              </div>

              <a href="#artMartiaux"> <p>revenir en arrière</p></a>
            </div>

          <div id="sportsCollectif" class="questionReponse">
            <h4>Voulez-vous un sport collectif ?</h4>
            <div class="ouiNon">
            <div class="ouno"><a href="#ballon"> <p>oui</p></a></div>
            <div class="ouno"><a href="#raquette"> <p>non</p></a></div>
          </div>
            <div class="revenir"><a href="#sportsDeCombat"> <p>revenir en arrière</p></a></div>
          </div>

            <div id="ballon" class="questionReponse">
              <h4>Aimez vous les sports de ballon ?</h4>
              <div class="ouiNon">
              <div class="ouno"><a href="#mainOuPied"> <p>oui</p></a></div>
              <div class="ouno"><a href="#physiqueOuMental"> <p>non</p></a></div>
            </div>
              <div class="revenir"><a href="#sportsCollectif"> <p>revenir en arrière</p></a></div>
            </div>

              <div id="mainOuPied" class="questionReponse">
                <h4>Vous êtes plus à l'aise avec vos mains ou vos pieds ?</h4>
                <div class="ouiNon">
                <div class="ouno"><a href="#handball"> <p>main</p></a></div>
                <div class="ouno"><a href="#football"> <p>pied</p></a></div>
              </div>
                <div class="revenir"><a href="#ballon"> <p>revenir en arrière</p></a></div>
              </div>

                <div id="handball" class="questionReponse">
                  <h4>Handball</h4>

                  <div class="resultatimg">
                    <img src="image/handball.jpg" atl="handball" width="35%" height="35%">
                  </br><p> Selon certains historiens, 1898 aurait vu la naissance du handball au Danemark avec l'apparition du " haandbold ", jeu qui se déroulait sur un petit terrain quasi identique à celui du "sept " d'aujourd'hui. </p>
                  </br><p> Dans les années 1900, Casey, un Irlandais introduisit un jeu semblable au handball aux USA. L'engouement est tel qu'en 1919, une compétition aurait vu le jour à Los Angeles.</p>
                </br><p>
En 1954, le sept apparaît en compétition officielle (Mondial en Suède). Plus technique, plus rapide, plus spectaculaire, il mettra à peine dix ans pour détrôner le onze. Ce dernier disparaît définitivement de la scène internationale en 1966.</p>
                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ff-handball.org"><img src="image/ffhandball.png" alt="ffhandball" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de handball de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#mainOuPied"> <p>revenir en arrière</p></a>
                </div>

                <div id="football" class="questionReponse">
                  <h4>football</h4>

                  <div class="resultatimg">
                    <img src="image/football.jpg" atl="football" width="35%" height="35%">
                  </br><p> Le mot football est la contraction de deux mots anglais : foot (le pied) et ball (le ballon). Alors, ce sont les Anglais qui ont inventé ce jeu ? Oui et non. Dans l'Antiquité, déjà, les Grecs, les Romains, et avant eux les Chinois jouaient au ballon.</p>
                  </br><p> Les premiers codes de jeu écrits datent du milieu du XIX e siècle (1848 à Cambridge). Chaque équipe possède ses propres règles, rendant les matches problématiques. La Fédération anglaise de football (Football Association) est créée en 1863.</p>
                  </br><p>
                Le football, tel que nous le connaissons, est né vers la fin du XIXème siècle en Angleterre quand la Football Association, toute première instance dirigeante de ce sport fut créée le 26 octobre 1863 pour jouer avec un ballon qu'il était interdit de jouer avec ses mains, pas plus que l'adversaire.</p>
                </br><p>Ces derniers devaient différencier leur sport favori du football américain, cousin éloigné du rugby, déjà très populaire aux Etats-Unis. Ils ont alors utilisé le mot «soccer», une contraction de «assoccer», qui dans l'argot anglais désignait à l'époque une «association» de football.</p>
                </br><p>Ses caractéristiques sont définies par la loi 1 du football. Selon les lois du jeu qui le définissent, le terrain est un rectangle de longueur comprise entre 90 et 120 mètres (100 à 130 yards, l'unité originellement utilisée dans les lois du jeu) et de largeur comprise entre 45 et 90 mètres (50 à 100 yards).</p>
                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.fff.fr"><img src="image/fff.png" alt="fff" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de football de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#mainOuPied"> <p>revenir en arrière</p></a>
                </div>

                <div id="physiqueOuMental" class="questionReponse">
                  <h4>Vous préférez les sports physique ou mentale ?</h4>
                  <div class="troisChoix">
                  <div class="phyme"><a href="#ultimate"> <p>physique</p></a></div>
                  <div class="phyme"><a href="#danse"> <p>mentale</p></a></div>
                  <div class="phyme"><a href="#hockeySurGazon"> <p>les deux</p></a></div>
                </div>
                  <div class="revenir"><a href="#ballon"> <p>revenir en arrière</p></a></div>
                </div>

                <div id="ultimate" class="questionReponse">
                  <h4>Ultimate</h4>

                  <div class="resultatimg">
                    <img src="image/ultimate.jpg" atl="ultimate" width="35%" height="35%">
                  </br><p> L’ultimate se joue avec deux équipes de sept joueurs chacune et un disque (frisbee). Le terrain a une surface de 100 m par 37 m. En salle, il se joue sur un terrain de handball avec cinq joueurs par équipe. A chaque extrémité du terrain il y a une zone d’en-but de 18 m (extérieur) ou 6 m (en salle).</p>
                  </br><p> Au début du jeu et après chaque point marqué les équipes se tiennent sur leur ligne de but. L’équipe qui a marqué le dernier point lance le disque. L’autre équipe prend possession du disque là où il atterrit et devient alors l’équipe attaquante.</p>
                  </br><p>  Un point est marqué quand l’équipe offensive attrape le disque dans la zone d’en-but de l’équipe adverse.</p>
                  </br><p>Un disque est en jeu quand il est attrapé dans le terrain. Les lignes de touche et de fond sont hors limites. Pour marquer un point, un joueur attaquant doit donc attraper le disque dans la zone d’en-but, sans toucher une des lignes.</p>
                  </br><p>Un joueur en possession du disque peut le jouer dans n’importe quelle direction. Il doit le faire dans les dix secondes; un défenseur se tient devant lui et compte jusqu’à dix. Le joueur en possession du disque ne doit pas marcher, mais peut établir un pied pivot..</p>
                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ffdf.fr"><img src="image/fffd.png" alt="ffdf" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue d'ultimate de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#physiqueOuMental"> <p>revenir en arrière</p></a>
                </div>

                <div id="danse" class="questionReponse">
                  <h4>Danse</h4>

                  <div class="resultatimg">
                    <img src="image/danse.jpg" atl="danse" width="35%" height="35%">
                  </br><p>plusieurs danse possible : classique, moderne-jazz, comtenporaine, indenne et flamenco</p>
                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ffdanse.fr"><img src="image/ffdanse.jpg" alt="ffdanse" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de danse de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#physiqueOuMental"> <p>revenir en arrière</p></a>
                </div>

                <div id="hockeySurGazon" class="questionReponse">
                  <h4>Hockey sur gazon</h4>

                  <div class="resultatimg">
                    <img src="image/hockey.jpg" atl="hockey sur gazon" width="35%" height="35%">
                  </br><p>Le hockey sur gazon est un sport collectif de balle mettant aux prises deux formations de onze joueurs (ou joueuses) dont un gardien de but équipé.</p>
                      <p>Le Hockey se pratique en extérieur sur un grand terrain de jeu (91,40 m x 55m).</p>
                      <p>Pour jouer, on utilise une crosse, une balle. Le hockey se pratique, en compétition ou en loisirs, en famille ou entre amis, entre fille, entre garçons ou en mixité, mais surtout avec le sourire et la passion.</p>
                    </br><p>En phase avec son époque, le hockey sur gazon porte fièrement les valeurs d’ESPRIT D’EQUIPE, DE RESPECT et de TRADITION qui lui ont permis de séduire années après années de nombreux pratiquants. Certain que c’est ensemble que l’on va plus loin, que la créativité est plurielle, l’esprit d’équipe développé dans le hockey se nourrit de la complémentarité des individus qui le composent.</p>
                        <p>Il s’appuie sur le respect : des règles, de soi-même, des officiels et des adversaires.</p>
                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ffhockey.org"><img src="image/ffhockey.png" alt="ffdanse" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de hockey sur gazon de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#physiqueOuMental"> <p>revenir en arrière</p></a>
                </div>

                <div id="raquette" class="questionReponse">
                  <h4>Aimez vous les sports de raquette ?</h4>
                  <div class="ouiNon">
                  <div class="ouno"><a href="#effortCourtOuLong"> <p>oui</p></a></div>
                  <div class="ouno"><a href="#sportNautique"> <p>non</p></a></div>
                </div>
                  <div class="revenir"><a href="#sportsCollectif"> <p>revenir en arrière</p></a></div>
                </div>

                <div id="effortCourtOuLong" class="questionReponse">
                  <h4>Vous préférez les efforts court ou long ?</h4>
                  <div class="ouiNon">
                  <div class="ouno"><a href="#badbinton"> <p>court</p></a></div>
                  <div class="ouno"><a href="#tenis"> <p>long</p></a></div>
                </div>
                  <div class="revenir"><a href="#raquette"> <p>revenir en arrière</p></a></div>
                </div>

                <div id="badbinton" class="questionReponse">
                  <h4>badminton</h4>

                  <div class="resultatimg">
                    <img src="image/badminton.jpg" atl="badminton" width="35%" height="35%">
                  </br><p>On raconte qu'un jour de 1873, des officiers anglais revenus des Indes se trouvant réunis dans le château du Duc de Beaufort à Badminton, ville anglaise du Gloucestershire, en viennent à évoquer le jeu indien du « poona », qui se pratiquait avec une raquette et une balle légère.</p>
                  </br><p>Le score. Un match se joue au meilleur de 3 sets de 21 points chacun : le joueur ou l'équipe qui remporte 2 sets, gagne le match. Celui qui gagne un échange ajoute un point à son score. À 20-20, le set est prolongé : le camp qui mène avec 2 points d'écart remporte le set (exemple : 22-20, 28-26).</p>
                  </br><p>Au badminton, la hauteur de filet est de 1,55 m sur les bords, 1,524 au centre (5 pieds) compte tenu de la courbure, et sa largeur de 6,10 m.</p>
                  </br><p>Le passing est la capacité d'une personne à être considérée en un seul coup d'œil comme membre d'un groupe social autre que le sien propre, tels que l'ethnie, la caste, la classe sociale, le genre, l'âge et/ou le handicap, en général dans le but d'obtenir l'acceptation sociale.</p>

                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ffbad.org"><img src="image/ffbad.png" alt="ffbad" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue badminton de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#effortCourtOuLong"> <p>revenir en arrière</p></a>
                </div>

                <div id="tenis" class="questionReponse">
                  <h4>tennis</h4>

                  <div class="resultatimg">
                    <img src="image/tennis.jpg" atl="tennis" width="35%" height="35%">
                  </br><p>Le tennis est un sport de raquette qui oppose soit deux joueurs soit quatre joueurs qui forment deux équipes de deux. Les joueurs utilisent une raquette cordée verticalement et horizontalement à une tension variant avec la puissance ou l'effet que l'on veut obtenir. </p>

                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.fft.fr"><img src="image/fft.png" alt="fft" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de tennis de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#effortCourtOuLong"> <p>revenir en arrière</p></a>
                </div>

                <div id="sportNautique" class="questionReponse">
                  <h4>Aimez vous les sports nautique ?</h4>
                  <div class="ouiNon">
                  <div class="ouno"><a href="#natation"> <p>oui</p></a></div>
                  <div class="ouno"><a href="#sportDeCourse"> <p>non</p></a></div>
                </div>
                  <div class="revenir"><a href="#raquette"> <p>revenir en arrière</p></a></div>
                </div>

                <div id="natation" class="questionReponse">
                  <h4>Natation</h4>

                  <div class="resultatimg">
                    <img src="image/natation.jpg" atl="natation" width="35%" height="35%">
                  </br><p>nage loisir ou compétition 50m/100m/200m/1000m</p>

                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ffnatation.fr"><img src="image/ffnatation.png" alt="ffnatation" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de natation de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#sportNautique"> <p>revenir en arrière</p></a>
                </div>

                <div id="sportDeCourse" class="questionReponse">
                  <h4>Aimez vous les sports de course ?</h4>
                  <div class="ouiNon">
                    <div class="ouno"><a href="#pied"> <p>oui</p></a></div>
                    <div class="ouno"><a href="#hauteur"> <p>non</p></a></div>
                  </div>
                    <div class="revenir"><a href="#sportNautique"> <p>revenir en arrière</p></a></div>
                </div>

                <div id="pied" class="questionReponse">
                  <h4>Aimez vous courir ?</h4>
                  <div class="ouiNon">
                  <div class="ouno"><a href="#coursePied"> <p>oui</p></a></div>
                  <div class="ouno"><a href="#VTT"> <p>non</p></a></div>
                </div>
                  <div class="revenir"><a href="#sportDeCourse"> <p>revenir en arrière</p></a></div>
                </div>

                <div id="coursePied" class="questionReponse">
                  <h4>Course à pied</h4>

                  <div class="resultatimg">
                    <img src="image/course.jpg" atl="course" width="35%" height="35%">
                  </br><p>différentes longeur 50m/100m/200m/800m/1000m/demi-maraton/maraton</p>

                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.athle.fr"><img src="image/athle.png" alt="athle" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de course à pied de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#pied"> <p>revenir en arrière</p></a>
                </div>

                <div id="VTT" class="questionReponse">
                  <h4>VTT</h4>

                  <div class="resultatimg">
                    <img src="image/vtt.jpg" atl="vtt" width="35%" height="35%">
                  </br><h6>Le Cross-Country (XC)</h6>
                  <p>C’est la discipline d’endurance du Vélo Tout Terrain, elle se décline en de multiples volets : cross-country en boucle, en ligne, marathon, contre la montre, par étapes, etc. La première forme (les coureurs font plusieurs fois le même circuit) est celle retenue pour les Jeux Olympiques, d’où le nom de cross-country olympique.La durée de l’épreuve dépend de la catégorie concernée. La variété des terrains rencontrés sur le parcours doit permettre l’expression des qualités techniques (pilotage, franchissement …) et physiques des coureurs (gestion d’un effort avec des variations de rythme). Le changement de vélo est interdit et l’assistance extérieure n’est autorisée que dans des zones particulières appelées « zones techniques ».</p>
                  </br><h6>La Descente (DH)</h6>
                  <p>C’est une épreuve individuelle contre la montre sur un profil descendant parsemé d’obstacles. Le parcours très technique doit privilégier les paramètres vitesse/pilotage. Le temps de course est compris entre 2 et 5 minutes pour un parcours de 1,5 à 3,5 km. La technicité du matériel (cadre avec double suspension, freins à disque, …) nécessite un budget important. C’est pourquoi trois catégories ont été définies : la catégorie Sport (cadre rigide avec suspension avant), la catégorie Stock (cadre à double suspension limitée dans le débattement) et la catégorie Pro (aucune restriction sur le matériel). L’équipement obligatoire du pilote comprend un casque intégral monobloc, des coudières, des gants complets, une protection dorsale et des genouillères.</p>
                  </br><h6>Le Trial</h6>
                  <p>La discipline est née chez des passionnés de moto trial qui n’avaient pas les moyens d’acquérir une moto pour le pratiquer. Elle consiste à franchir des zones naturelles ou artificielles faisant appel à des notions d’équilibre et de maîtrise du vélo sans avoir d’autre appui que les pneus (pénalités). La difficulté des franchissements est liée aux différentes classes de coureurs (Elites, Experts, …). Le circuit regroupe un ensemble de 6 zones (1 tour) reliées par une interzone à parcourir 3 fois. Le classement s’établit en fonction du cumul des pénalités, le vainqueur étant celui qui totalise le moins de points. Les épreuves sont ouvertes, à la fois, aux VTT Trial (roues de 26 pouces) et aux vélos Trial (roues de 20 pouces), le port du casque rigide est obligatoire.</p>

                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ffc.fr"><img src="image/ffc.png" alt="ffc" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de VTT de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#pied"> <p>revenir en arrière</p></a>
                </div>

                <div id="hauteur" class="questionReponse">
                  <h4>Avez vous peur de la hauteur ?</h4>
                  <div class="ouiNon">
                  <div class="ouno"><a href="#golf"> <p>oui</p></a></div>
                  <div class="ouno"><a href="#escalade"> <p>non</p></a></div>
                </div>
                  <div class="revenir"><a href="#sportDeCourse"> <p>revenir en arrière</p></a></div>
                </div>

                <div id="golf" class="questionReponse">
                  <h4>Golf</h4>

                  <div class="resultatimg">
                    <img src="image/golf.jpg" atl="golf" width="35%" height="35%">
                  <h6>On attend de tous les joueurs qu’ils jouent dans l’esprit du jeu en :</h6>
                  <p>Agissant avec intégrité – par exemple en respectant les Règles, en appliquant toutes
                    les pénalités et en étant honnête dans tous les aspects du jeu.</p>
                  <p>Faisant preuve de considération envers les autres – par exemple en jouant dans
                    un bon rythme, en prenant garde à la sécurité des autres et en ne perturbant pas
                    le jeu d’un autre joueur.</p>
                  <p>Prenant bien soin du parcours – par exemple en replaçant les divots, aplanissant
                    les bunkers, réparant les impacts de balles et en ne causant pas au parcours des
                    dommages inutiles.</p>

                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ffgolf.org"><img src="image/ffgolf.png" alt="ffgolf" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue de golf de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#hauteur"> <p>revenir en arrière</p></a>
                </div>

                <div id="escalade" class="questionReponse">
                  <h4>Escalade</h4>

                  <div class="resultatimg">
                    <img src="image/escalade.jpg" atl="escalade" width="35%" height="35%">
                  <h6>La difficulté</h6>
                  <p>L’escalade de difficulté est la plus ancienne des disciplines de l’escalade. Elle se pratique sur un mur de 15 mètres de haut en moyenne, les grimpeurs sont équipés de baudrier et assurés avec une corde par un membre de l’organisation. L’objectif de la difficulté est d’aller au sommet de la voie proposée, du moins, d’aller le plus haut possible. Ici encore, les voies sont chaque fois uniques et inconnues des grimpeurs.</p>
                  <h6>Le bloc</h6>
                  <p>Cette discipline se pratique sur des structures d’escalade ne dépassant pas les 4 mètres de haut. Les pratiquants y grimpent sans corde ni baudrier, leurs chutes éventuelles étant sécurisées par des matelas de réception. En compétition, chaque bloc présenté est équipé de prises agencées pour former un itinéraire plus ou moins difficile, et requérant des qualités diverses : forces, technique, souplesse, coordination, etc. L’objectif est de réaliser les blocs proposés, en atteignant la prise finale, avec le moins d’essais possible et en un temps donné.</p>
                    <h6>La vitesse</h6>
                  <p>La vitesse est à l’escalade ce que le sprint est à l’athlétisme. Les grimpeurs doivent réaliser le plus rapidement possible une voie normée et tracée sur un mur très vertical de 15 mètres de haut, et équipée d’une plaque de touche au sommet, optimisant la précision et l’enregistrement des temps. Une voie officielle est homologuée. Invariable d’une compétition à l’autre, elle permet aux grimpeurs de se mesurer et d’établir des records.</p>

                  </div>
                  <div class="fede">
                  <a target="blank" href="http://www.ffme.org"><img src="image/ffme.png" alt="ffme" width="20%" height="20%"></a>

                </br><p> Si vous le souhaitez, vous pouvez inscrire votre adresse mail afin de recevoir des informations sur la ligue d'escalade de Lorraine.</p>
                  <form method="post" action="email.php">
                  <input type="email" name="email" placeholder="Entrer votre adresse email" size=50% >
                  <button type="submit" class="bouton">Valider mon adresse mail</button>
                  </div>

                  <a href="#hauteur"> <p>revenir en arrière</p></a>
                </div>



      </div>
    </div>
</body>
