<form role="search" method="get" class="searchform teezr-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="s form-control" name="s" placeholder="<?php esc_attr_e( 'Search&hellip;', 'teezr' ); ?>" value="<?php the_search_query(); ?>" >
</form>
