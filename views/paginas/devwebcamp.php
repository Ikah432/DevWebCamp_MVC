<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>

    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWevCamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">In volutpat eros libero, eget consectetur lorem viverra sit amet. Mauris viverra venenatis ex, in fermentum ligula volutpat ac. Nullam elementum risus tempor dictum rutrum.</p>
            
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Quisque vitae mattis felis. Quisque quam ex, volutpat eget mattis non, elementum in dui. Donec venenatis efficitur nisl nec feugiat. Donec et sapien non velit efficitur blandit. Suspendisse vulputate scelerisque tellus eget feugiat.</p>
        </div>
    </div>
</main>