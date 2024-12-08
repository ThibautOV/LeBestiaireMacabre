<?php
// views/characters/index.php
ob_start(); // Démarre la mise en tampon de la sortie
?>
<h1>Personnages de type <?= htmlspecialchars($type_horreur) ?></h1>
<div class="characters">
    <?php foreach ($characters as $character): ?>
        <?php include 'partials/card.php'; // Inclut la vue partielle pour chaque personnage ?>
    <?php endforeach; ?>
</div>
<?php 
$content = ob_get_clean(); // Récupère le contenu mis en tampon
include 'layouts/main.php'; // Inclut le layout principal
?>