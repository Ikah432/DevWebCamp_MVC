<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<main class="bloques">

    <div class="bloques__grid">

        <div class="bloque">
            <h3 class="bloque__heading">Últimos Registros</h3>

            <?php foreach($registros as $registro) { ?>

                <div class="bloque__contenido">

                    <p class="bloque__texto">
                        <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                    </p>

                </div>

            <?php } ?>

        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Ingresos</h3>

            <p class="bloque__texto--cantidad">$<?php echo $ingresos; ?></p>

        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Menos lugares Disponibles</h3>

            <?php foreach($menos_disponibles as $menos_disponible) { ?>

                <div class="bloque__contenido">

                    <p class="bloque__texto">
                        <?php echo $menos_disponible->nombre . " - " . $menos_disponible->disponibles . " lugares"; ?>
                    </p>

                </div>

            <?php } ?>

        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Mas lugares Disponibles</h3>

            <?php foreach($mas_disponibles as $mas_disponible) { ?>

                <div class="bloque__contenido">

                    <p class="bloque__texto">
                        <?php echo $mas_disponible->nombre . " - " . $mas_disponible->disponibles . " lugares"; ?>
                    </p>

                </div>

            <?php } ?>

        </div>


    </div>
</main>