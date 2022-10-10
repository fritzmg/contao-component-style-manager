<?php
/*
 * This file is part of ContaoComponentStyleManager.
 *
 * (c) https://www.oveleon.de/
 */

use Oveleon\ContaoComponentStyleManager\StyleManager\StyleManager;

// Extend fields
$GLOBALS['TL_DCA']['tl_page']['fields']['styleManager'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['styleManager'],
    'exclude'                 => true,
    'inputType'               => 'stylemanager',
    'eval'                    => array('tl_class'=>'clr stylemanager'),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['sql'] = "text NULL";
$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['eval']['alwaysSave'] = true;

$GLOBALS['TL_DCA']['tl_page']['config']['onload_callback'][] = [StyleManager::class,'addPalette'];
$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['load_callback'][] = [StyleManager::class,'onLoad'];
$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['save_callback'][] = [StyleManager::class,'onSave'];
