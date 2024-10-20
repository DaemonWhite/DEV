<?php 
include('vues/header.php'); 
include("vues/choix.php");
?>
<h2>
<?php 

 echo $vainqueur_str;

?>
</h2>
<table>
    <thead>
        <tr>
            <th>Score joeur</th>
            <th>Score Machine</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $_SESSION["SCORE_JOUEUR"]; ?></td>
        </tr>
        <tr>
            <td><?= $_SESSION["SCORE_MACHINE"]; ?></td>
        </tr>
    </tbody>
</table>

<table>
<thead>
    <tr>
        <th>Vous</th>
        <th> Vs </th>
        <th> Machine </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>
        <?= choix_picture($choix) ?>
        </td>
        <td> Vs </td>
        <td>
        <?= choix_picture($ia_choix) ?>
        </td>
    </tr> 
</tbody>
</table>

<?php include('vues/form.php');?>

<?php include('vues/footer.php');?>