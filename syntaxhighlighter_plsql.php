<?php
/**
* Plugin Name: SyntaxHighlighter Evolved: PL/SQL Brush
* Description: Adds support for the PL/SQL language to the SyntaxHighlighter Evolved plugin.
* Author: Chris B. Kerndter
* Version: 0.1
* Author URI: http://www.kerndter.net
* Plugin URI: http://www.kerndter.net/syntaxhighlighter_plsql
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_plsql_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_plsql_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_plsql_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-plsql', plugins_url( 'shBrushPlSql.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.4' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_plsql_addlang( $brushes ) {
    $brushes['plsql'] = 'plsql';

    return $brushes;
}