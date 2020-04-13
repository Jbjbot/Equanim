<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

use Timber\Timber;
use Timber\PostQuery;

$templates = array( 'search.twig', 'archive.twig', 'index.twig' );

$context = Timber::get_context();
$context['title'] = 'Résultat de recherche pour ' . get_search_query();
$context['posts'] = new PostQuery();

Timber::render( $templates, $context );
