<footer class="bg-dark text-white py-5 mt-auto">
    <div class="container">
        <div class="row gy-4 text-center text-md-start">

            <!-- Column 1: Site info -->
            <div class="col-md-4">
                <h5><?php bloginfo('name'); ?></h5>
                <p class="small mb-0">
                    © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                </p>
            </div>

            <!-- Column 2: Social icons (Bootstrap Icons) -->
            <div class="col-md-4">
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" aria-label="Facebook" target="_blank" rel="noopener"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" aria-label="Instagram" target="_blank" rel="noopener"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" aria-label="TikTok" target="_blank" rel="noopener"><i class="bi bi-tiktok fs-4"></i></a>
                    <a href="#" aria-label="X" target="_blank" rel="noopener"><i class="bi bi-twitter-x fs-4"></i></a>
                    <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="bi bi-linkedin fs-4"></i></a>
                    <a href="#" aria-label="YouTube" target="_blank" rel="noopener"><i class="bi bi-youtube fs-4"></i></a>
                </div>
            </div>

            <!-- Column 3: Footer links -->
            <div class="col-md-4">
                <ul class="list-inline mb-0 text-center text-md-end">
                    <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">About</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">TAIS</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">TLM</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">AWR</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- Load Bootstrap Icons only once -->
<?php 
if (!wp_style_is('bootstrap-icons', 'enqueued')) {
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
}
?>

<?php wp_footer(); ?>
</body>
</html>