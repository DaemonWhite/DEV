<?php $champions = array(
    2022 => array('Argentine',  'France'),
    2018 => array('France',  'Croatie'),
    2014 => array('Allemagne', 'Argentine'),
    2010 => array('Espagne', 'Pays-Bas'),
    2006 => array('Italie', 'France'),
    2002 => array('Brésil', 'Allemagne'),
    1998 => array('France', 'Brésil'),
    1994 => array('Brésil', 'Italie'),
    1990 => array('Allemagne', 'Argentine'),
    1986 => array('Argentine', 'RFA'),
    1982 => array('Italie', 'RFA'),
    1978 => array('Argentine', 'Pays-Bas'),
    1974 => array('RFA', 'Pays-Bas'),
    1970 => array('Brésil', 'Italie'),
    1966 => array('Angleterre', 'RFA'),
    1962 => array('Brésil', 'Tchécoslovaquie'),
    1958 => array('Brésil', 'Suède'),
    1954 => array('RFA', 'Hongrie'),
    1950 => array('Uruguay', 'Brésil'),
    1938 => array('Italie', 'Hongrie'),
    1934 => array('Italie', 'Tchécoslovaquie'),
    1930 => array('Uruguay', 'Argentine'),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des vainqueur par An</h1>
    <table>
        <tr>
            <td>Anner</td>
            <td>Vainqueur</td>
            <td>Perdant</td>
        </tr>
        <?php foreach ($champions as $key => $value) { ?>
            <tr>
                <td> <?=$key ?></td>
                <td> <?= $value[0] ?></td>
                <td> <?= $value[1]?> </td>
            </tr>;
        <?php } ?>
    </table>
    <h2>Liste des vainqueurs par celuis qui à gnagner le plus de match</h2>
    <table>
        <thead>
            <tr>
                <td>
                    Gagnant
                </td>
                <td>
                    Perdant
                </td>
            </tr>
        </thead>
    <?php foreach ($champions as $key => $value) { ?>
        <td> <?= $value[0] ?> </td> 
        A gagner contre $value[1]"
    
        $recurence_vainqueur_et_finaliste[$value[0]][0]++;
        $recurence_vainqueur_et_finaliste[$value[1]][1]++;
    <?php } ?>;
    </table>


    
</body>
</html>