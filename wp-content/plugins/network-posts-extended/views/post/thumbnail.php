<?php/** * Created by PhpStorm. * User: Admin * Date: 04.04.2017 * Time: 8:13 */if ( ! defined( 'POST_VIEWS_PATH' ) ) {	die();}$html .= htmlspecialchars_decode( $shortcode_mgr->get( 'wrap_image_start' ) );$size        = $shortcode_mgr->get( 'size' );$image_class = $shortcode_mgr->get( 'image_class' );$column      = $shortcode_mgr->get( 'column' );if ( $the_post['post_type'] != 'estore' ) {	$html .= '<a href="' . $the_post['guid'] . '">' . get_thumbnail_by_blog( $the_post['blog_id'], $the_post['ID'], $size, $image_class, $column, $use_single_images_folder ) . '</a>';} else {	$html .= '<a href="' . $the_post['guid'] . '">' . create_estore_product_thumbnail( $the_post['thumbnail_url'], $the_post['post_title'], $size, $image_class, $column ) . '</a>';}$html .= htmlspecialchars_decode( $shortcode_mgr->get( 'wrap_image_end' ) );