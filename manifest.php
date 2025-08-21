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

$manifest['version']     = '1.0.20';
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
