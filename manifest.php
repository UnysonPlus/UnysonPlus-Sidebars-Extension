<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Sidebars', 'fw' );
$manifest['slug']        = 'unysonplus-sidebars';
$manifest['description'] = __(
    'Brings a new layer of customization freedom to your website by letting you add more than one sidebar to a page, or different sidebars on different pages.',
    'fw'
);

$manifest['version']     = '1.0.24';
$manifest['display']     = true;
$manifest['standalone']  = true;

$manifest['requirements'] = array(
    'framework' => array(
        'min_version' => '2.2.2'
    )
);

// Repo Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Sidebars-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Sidebars-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Extra Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';

/**
 * Changelog
 * -----------------------------------------------------------------------------
 * 1.0.23 - Security: added CSRF nonce protection to all 6 Sidebars AJAX
 *          endpoints (add_new / autocomplete / save_preset / remove_preset /
 *          delete / load_preset). Nonces localized via existing PhpVar and
 *          noMatchesFoundMsg objects; JS callers updated to send `_nonce`
 *          field; PHP handlers verify via check_ajax_referer( 'fw_sidebars' ).
 *          Blocks CSRF-driven sidebar manipulation from an authenticated
 *          editor's session.
 */
