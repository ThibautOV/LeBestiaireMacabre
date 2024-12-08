<!-- views/partials/card.php -->
<div class="character-card">
    <h4><?= htmlspecialchars($character['nom']) ?></h4>
    <p><strong>Créateur :</strong> <?= htmlspecialchars($character['createur_personnage']) ?></p>
    <p><strong>Description :</strong> <?= htmlspecialchars($character['description']) ?></p>
    <img src="<?= htmlspecialchars($character['image']) ?>" alt="<?= htmlspecialchars($character['nom']) ?>" class="character-image">
    <a href="/index.php?controller=CharacterController&action=show&id=<?= $character['id'] ?>" class="btn-details">Voir les détails</a>
</div>