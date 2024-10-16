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

    <table>
        <thead>
        <tr>
            <th>Anner</th>
            <th>Vainqueur</th>
            <th>Finaliste</th>
        </tr>
        </thead>
        <tbody>
            <?php
            foreach ($champions as $key => $value) {
                echo "<tr>";
                echo "<td>" . $key . "</td> <td>" . $value[0] . "</td> <td>" . $value[1];
                echo "</tr>";
            } 
            
            ?>
        </tbody>
       
    </table>
    
</body>
</html>