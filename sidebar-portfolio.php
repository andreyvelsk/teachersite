<div class="sidebar">
    <div class="sidebar-block">
        <h4>
            Категории
        </h4>
        <div class="sidebar-list">
        <?php 
        $args = array(
            'date_format'  => get_option('date_format'),
            'title_li'     => '',
            'include'      => '151, 148, 161',
            'echo'         => 1,
            'sort_column'  => 'menu_order, post_title',
            'sort_order'   => 'ASC',
            'post_type'    => 'page', // из функции get_pages()
        ); 
        
        ?>
        <ul>
            <?php
                wp_list_pages( $args ); 
            ?>
        </ul>
        </div>                                 
    </div>
</div>