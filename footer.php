    
</div>

<footer >
    <div class="bg-dark" id="social-footer-menu">
        <div class="container">
            <div class="row justify-content-center">
                <a>
                    <i class="fab fa-github fa-2x text-white"> </i>
                </a>   
            </div>
        </div>
    </div>

    <div class="bg-secondary" id="copy-footer-menu">
        <div class="container">
            <div class="row justify-content-center">
                <a class="text-white" href="<?php echo esc_url(__('https://wordpress.org/', 'my')); ?>">
                    <?php printf(esc_html__('Proudly powered by %s', 'my'), 'WordPress'); ?>
                </a>
            </div>
        </div>
    </div>
<footer>

<?php wp_footer(); ?>

</body>
</html>