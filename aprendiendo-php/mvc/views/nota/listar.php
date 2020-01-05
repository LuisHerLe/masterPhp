<h1>Listado de todas las notas</h1>
<?php while ($nota = $notas->fetch_object()): ?>
    <p><?= $nota->titulo ?> - <?= $nota->descripcion ?> - <?= $nota->fecha ?></p>
<?php endwhile; ?>
