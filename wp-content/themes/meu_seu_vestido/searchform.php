<?php


$twentytwenty_aria_label = !empty($args['label']) ? 'aria-label="' . esc_attr($args['label']) . '"' : '';
?>

<form role="search" <?php echo $twentytwenty_aria_label; ?> method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
<label for="<?php echo esc_attr($twentytwenty_unique_id); ?>">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
            <button type="submit" class="btn btn-danger" value="foo"><i class="fas fa-search" aria-hidden="true"></i></button>
        </div>
        <input type="search" id="<?php echo esc_attr($twentytwenty_unique_id); ?>" class="form-control" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'twentytwenty'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
      </div>
    <input type="hidden" name="post_type" value="product" id="post_type">
</form>
<!-- 

<form role="search" <?php //echo $twentytwenty_aria_label; ?> method="get" class="search-form" action="<?php //echo esc_url(home_url('/')); ?>">
    <button type="submit" class="search-submit" value="foo"><i class="fa fa-search" aria-hidden="true"></i></button>
    <label for="<?php //echo esc_attr($twentytwenty_unique_id); ?>">
        <span class="screen-reader-text"><?php //_e('Search for:', 'twentytwenty'); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations 
                                            ?></span>
        <input type="search" id="<?php //echo esc_attr($twentytwenty_unique_id); ?>" class="search-field" placeholder="<?php //echo esc_attr_x('Search &hellip;', 'placeholder', 'twentytwenty'); ?>" value="<?php //echo get_search_query(); ?>" name="s" />
    </label>
    <input type="submit" class="search-submit" value="<?php //echo esc_attr_x('Search', 'submit button', 'twentytwenty'); ?>" /> -->
    <!-- <input type="hidden" name="post_type" value="product" id="post_type"> 
</form> -->