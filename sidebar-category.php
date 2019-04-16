<div class="sidebar">
    <h4>
        Категории
    </h4>
    <div class="sidebar-list">
        <ul>
        <?php
            $category = get_category( get_query_var( 'cat' ) );
            $args = array(
                    'orderby'            => 'name',
                    'order'              => 'ASC',
                    'show_last_update'   => 0,
                    'style'              => 'list',
                    'show_count'         => 0,
                    'hide_empty'         => 0,
                    'use_desc_for_title' => 1,
                    'child_of'           => ($category->category_parent == 0) ? $category->cat_ID : $category->category_parent,
                    'feed'               => '',
                    'feed_type'          => '',
                    'feed_image'         => '',
                    'exclude'            => '1',
                    'exclude_tree'       => '',
                    'include'            => '',
                    'hierarchical'       => true,
                    'title_li'           => NULL,
                    'number'             => NULL,
                    'echo'               => 1,
                    'depth'              => 0,
                    'current_category'   => 0,
                    'pad_counts'         => 0,
                    'taxonomy'           => 'category',
                    'walker'             => 'Walker_Category',
                    'hide_title_if_empty' => false,
                    'separator'          => '<br />',
                    );
                wp_list_categories( $args );
            ?>
        </ul>
    </div>
    <?php wp_reset_postdata(); ?>
</div>