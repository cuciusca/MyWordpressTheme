<?php

if (is_active_sidebar('right-sidebar')) : ?>

<aside class="col-md-3 card-deck">
	<?php dynamic_sidebar('right-sidebar'); ?>
</aside>

<?php endif;
