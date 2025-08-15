<?php
/**
 * Custom Walker for WordPress Header Navigation Menus to add dropdown arrows and styles.
 *
 * @package Another_Step_Theme
 */

class Another_Step_Custom_Nav_Walker_Header extends Walker_Nav_Menu {

    /**
     * Starts the element output.
     *
     * @see Walker_Nav_Menu::start_el()
     */
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        if ( $args->walker->has_children ) {
            $classes[] = 'group relative';
        }
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        if ( '_blank' === $item->target && empty( $item->xfn ) ) {
            $atts['rel'] = 'noopener noreferrer';
        } else {
            $atts['rel'] = $item->xfn;
        }
        $atts['href'] = ! empty( $item->url )        ? $item->url        : '';
        $atts['aria-current'] = $item->current ? 'page' : '';

        $atts['class'] = 'text-[#232020] hover:text-[#F9EF21] font-medium transition-colors duration-300 flex items-center px-4 py-2';


        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( is_scalar( $value ) && '' !== $value && true !== $value ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;

        if ( $args->walker->has_children ) {
            $item_output .= '<i class="fa fa-chevron-down ml-2 text-xs transition-transform duration-300 group-hover:rotate-180"></i>';
        }
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    /**
     * Starts the list before the elements are added.
     * For sub-menus (dropdowns)
     *
     * @see Walker_Nav_Menu::start_lvl()
     */
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"sub-menu absolute hidden group-hover:block bg-white shadow-md rounded-md mt-2 py-2 min-w-[160px] z-50\">\n";
    }

    /**
     * Ends the list of after the elements are added.
     * For sub-menus (dropdowns)
     *
     * @see Walker_Nav_Menu::end_lvl()
     */
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "$indent</ul>\n";
    }

    /**
     * Ends the element output.
     *
     * @see Walker_Nav_Menu::end_el()
     */
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</li>{$n}";
    }

}

// Make sure the custom walker class is available when needed
require_once get_template_directory() . '/inc/class-another-step-nav-walker-header.php';