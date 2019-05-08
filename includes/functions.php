<?php
/**
 * Trim and lowercase param value
 * @param  string $param
 * @return string
 */
if ( ! function_exists( 'charitoki_sanitize_param' ) ) {
    function charitoki_sanitize_param( $param ) {
        return strtolower( trim( $param ) );
    }
}

/**
 * Check css units and set default if no unit
 * @param  string $value
 * @param  string $default
 * @return string
 */
if ( ! function_exists( 'charitoki_check_css_units' ) ) {
    function charitoki_check_css_units( $value, $default = 'px' ) {
        $value  = charitoki_sanitize_param( $value );

        if ( $value === 0 || $value === '0' || $value === '' )
            $value = '0px';

        $values = array_filter( explode( ' ', $value ) );
        $out = array();
        foreach ( $values as $val ) {
            $out[] = charitoki_sanitize_css_units( $val, $default );
        }
        return implode( ' ', $out );
    }
}

if ( ! function_exists( 'charitoki_sanitize_css_units' ) ) {
    function charitoki_sanitize_css_units( $value, $default ) {
        $units = '/-?\d+[px|em|%|pt|cm|ex|mm|in|rem]/';
        if ( preg_match( $units, $value ) ) {
            return $value;
        } else {
            return $value . $default;
        }
    }
}

/**
 * Find out all charitoki shortcodes
 * @return array
 */
if ( ! function_exists( 'charitoki_shortcode_tags' ) ) {
    function charitoki_shortcode_tags() {
        global $shortcode_tags;
        $shortcodes = array_filter(
            array_keys( $shortcode_tags ),
            'charitoki_filter_charitoki_shortcodes'
            );
        return $shortcodes;
    }
}

/**
 * Filter only charitoki shortcodes
 * @param  string $shortcode
 * @return string
 */
if ( ! function_exists( 'charitoki_filter_charitoki_shortcodes' ) ) {
    function charitoki_filter_charitoki_shortcodes( $shortcode ) {
        return strstr( $shortcode, 'charitoki_' );
    }
}

/**
 * Generate html data attribute string
 * @param  array    $atts   list of data attributes
 * @return string           generated attributes
 */
if ( ! function_exists( 'charitoki_html_data_attr' ) ) {
    function charitoki_html_data_attr( $atts ) {
        $atts_str = '';
        foreach ( $atts as $prop => $val ) {
            $atts_str .= sprintf( 'data-%s="%s" ', $prop, esc_attr( $val ) );
        }
        return $atts_str;
    }
}

/**
 * Create a list of all registered sidebars
 * @return array list of registed sidebar key => name
 */
if ( ! function_exists( 'charitoki_get_sidebar_list' ) ) {
    function charitoki_get_sidebar_list() {
        global $wp_registered_sidebars;
        $sidebars = array();
        if ( ! empty( $wp_registered_sidebars ) ) {
            foreach ( $wp_registered_sidebars as $key => $data ) {
                $sidebars[$key] = $data['name'];
            }
        }
        return $sidebars;
    }
}

if ( ! function_exists( 'charitoki_parse_content_field' ) ) {
    function charitoki_parse_content_field( $content ) {
        return wpautop( do_shortcode( wp_kses_post( $content ) ) );
    }
}

if ( ! function_exists( 'charitoki_get_default_params' ) ) {
    function charitoki_get_default_params( $param_array, $param_name, $default = '' ) {
        return isset( $param_array[$param_name] ) && ! empty( $param_array[$param_name] ) ? $param_array[$param_name] : $default;
        // return charitoki_get_meta( $param_array, $param_name, $default = '' );
    }
}

if ( ! function_exists( 'charitoki_get_meta' ) ) {
    function charitoki_get_meta( $collection, $key, $default = '' ) {
        return ( ! empty( $collection[$key] ) ) ? $collection[$key] : $default;
    }
}

/**
 * List all created menus
 * @return array    menu list
 */
if ( ! function_exists( 'charitoki_get_all_menues' ) ) {
    function charitoki_get_all_menues() {
        return get_terms('nav_menu', array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'fields'  => 'id=>name',
            ) );
    }
}


if ( ! function_exists( 'charitoki_get_image_sizes' ) ) {
    function charitoki_get_image_sizes( $flip = false ) {
        global $_wp_additional_image_sizes;
        $output = array(
            'full' => esc_html__( 'Full Size', 'charitoki' ),
            'large' => esc_html__( 'Large Size [1000x999999]', 'charitoki' ),
            'medium' => esc_html__( 'Medium Size [650x999999]', 'charitoki' ),
            );
        foreach( $_wp_additional_image_sizes as $name => $data ) {
            $output[$name] = ucwords( str_replace(array('-','_'), array(' ', ' '), $name) ) . ' [' . $data['width'] . 'x' . $data['height'] . ']';
        }
        if ( $flip ) {
            return array_flip( $output );
        }
        return $output;
    }
}

if ( ! function_exists( 'charitoki_get_attachment' ) ) {
    function charitoki_get_attachment( $attachment_id, $size = 'full' ) {
        $attachment = get_post( $attachment_id );
        $image_data = wp_get_attachment_image_src( $attachment_id, $size );
        return array(
            'alt'         => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
            'caption'     => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href'        => get_permalink( $attachment->ID ),
            'link'        => get_post_meta( $attachment->ID, '_charitoki_attachement_link', true ),
            'src'         => $image_data[0],
            'tags'        => get_post_meta( $attachment->ID, '_charitoki_attachement_tags', true ),
            'title'       => $attachment->post_title,
        );
    }
}

// used only for empty css props
if ( ! function_exists( 'charitoki_get_for_empty' ) ) {
    function charitoki_get_for_empty( $collection, $key, $default = '' ) {
        return isset( $collection[$key] ) && '' !== $collection[$key] ? $collection[$key] : $default;
    }
}


if ( ! function_exists( 'charitoki_get_portfolio_categories' ) ) {
    /**
     * Get portfolio categorires to usages on vc & option's map
     * @return string
     */
    function charitoki_get_portfolio_categories($flip = false) {

        $args = array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'fields'  => 'id=>name',
        );
        $out = array();

        $terms = get_terms('portfolio-category', $args);
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            $out = (array) $terms;
        }

        if ($flip) {
            return array_flip($out);
        }
        return $terms;

    }
}

if ( ! function_exists( 'charitoki_get_bussiness_categories' ) ) {
    /**
     * Get portfolio categorires to usages on vc & option's map
     * @return string
     */
    function charitoki_get_bussiness_categories($flip = false) {

        $args = array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'fields'  => 'id=>name',
        );
        $out = array();

        $terms = get_terms('business-category', $args);
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            $out = (array) $terms;
        }

        if ($flip) {
            return array_flip($out);
        }
        return $terms;

    }
}

if (!function_exists('charitoki_get_teams_categories')) {
    /**
     * Get portfolio categorires to usages on vc & option's map
     * @return string
     */
    function charitoki_get_teams_categories($flip = false)
    {

        $args = array(
            'orderby' => 'name',
            'order' => 'ASC',
            'fields' => 'id=>name',
        );
        $out = array();

        $terms = get_terms('teams-category', $args);
        if (!empty($terms) && !is_wp_error($terms)) {
            $out = (array)$terms;
        }

        if ($flip) {
            return array_flip($out);
        }
        return $terms;

    }
}

if (!function_exists('charitoki_get_service_categories')) {
    /**
     * Get portfolio categorires to usages on vc & option's map
     * @return string
     */
    function charitoki_get_service_categories($flip = false)
    {

        $args = array(
            'orderby' => 'name',
            'order' => 'ASC',
            'fields' => 'id=>name',
        );
        $out = array();

        $terms = get_terms('service-category', $args);
        if (!empty($terms) && !is_wp_error($terms)) {
            $out = (array) $terms;
        }

        if ($flip) {
            return array_flip($out);
        }
        return $terms;

    }
}


if ( ! function_exists( 'charitoki_get_desc_for_portfolio_cats' ) ) {
    /**
     * Get vc map's description for portfolio categories checkbox
     * @return string
     */
    function charitoki_get_desc_for_portfolio_cats() {

        $args = array(
            'orderby'           => 'name',
            'order'             => 'ASC',
            'fields'            => 'id=>name',
        );
        $output = '';

        $terms = get_terms('portfolio-category', $args);
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            $output = esc_html__( 'Select portfolio categories (Leave empty to display from all categories)', 'charitoki' );
        } else{
            $output = sprintf( esc_html__( 'You may didn\'t added any portfolio category yet. You can add categories over here %s', 'charitoki' ), '<a href="'. esc_url( admin_url("edit-tags.php?taxonomy=portfolio-category&post_type=portfolio") ).'" target="_blank">'. esc_html__( "Portfolio categories", "charitoki") . '</a>');
        }

        return $output;

    }
}

if ( ! function_exists( 'charitoki_get_project_categories' ) ) {
    /**
     * Get project categorires to usages on vc & option's map
     * @return string
     */
    function charitoki_gets_project_categories($flip = false) {

        $args = array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'fields'  => 'id=>name',
        );
        $out = array();

        $terms = get_terms('project-category', $args);
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            $out = (array) $terms;
        }

        if ($flip) {
            return array_flip($out);
        }
        return $terms;

    }
}

if ( ! function_exists( 'charitoki_get_desc_for_project_cats' ) ) {
    /**
     * Get vc map's description for project categories checkbox
     * @return string
     */
    function charitoki_get_desc_for_project_cats() {

        $args = array(
            'orderby'           => 'name',
            'order'             => 'ASC',
            'fields'            => 'id=>name',
        );
        $output = '';

        $terms = get_terms('project-category', $args);
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            $output = esc_html__( 'Select project categories (Leave empty to display from all categories)', 'charitoki' );
        } else{
            $output = sprintf( esc_html__( "You may didn't added any project category yet.", "charitoki") . '</a>');
        }

        return $output;

    }
}
if ( ! function_exists( 'charitoki_display_project_categories' ) ) {

    /**
     * Get project categorires to display on project shortcode
     * @return string
     */
    function charitoki_display_project_categories( $categories ){
        $output = ', ';
        $separator = ', ';
        foreach( $categories as $category ) {
            $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'charitoki' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
        }
        return trim( $output, $separator );
    }

}

if ( ! function_exists( 'charitoki_portfolio_filter_nav' ) ) {
    /**
     * Display portfolio filter navigation
     * @return string
     */
    function charitoki_portfolio_filter_nav() {
        $tags = get_terms( 'portfolio-tag' );
        $html = "";
        $html .= '<ul class="filter nav nav-pills">' . "\n";
        $html .= "\t<li class='active'><a href='#' data-filter='*'>" . esc_html__( 'All', 'charitoki' ) . "</a></li>\n";
            if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
                foreach ( $tags as $tag ) {
                    $html .= "\t<li><a href='#' data-filter='.portfolio-tag-" . esc_attr( $tag->slug ) . "'>" . esc_html( $tag->name ) . "</a></li>\n";
                }
            }
        $html .= '</ul>';
        echo $html;
    }
}


if ( ! function_exists( 'charitoki_get_portfolio_class' ) ) {
    /**
     * Get portfolio class
     * @return string
     */
    function charitoki_get_portfolio_class() {
        $tags = get_the_terms( get_the_ID(), 'portfolio-tag' );
        if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
            foreach ( $tags as $tag ) {
               echo 'portfolio-tag-' . esc_attr( $tag->slug ) . ' ' ;
            }
        }
    }
}
