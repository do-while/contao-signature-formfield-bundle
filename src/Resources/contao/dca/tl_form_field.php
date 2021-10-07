<?php

/**
 * Extension for Contao 4
 *
 * @copyright  Softleister 2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-signature-formfield-bundle
 *             based on jSignature (https://github.com/brinley/jSignature)
 * @licence    MIT License
 */


/**
 * Additions tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['signature'] = '{type_legend},type,name,label;'
                                                              .'{fconfig_legend},mandatory;'
                                                              .'{size_legend},sig_size;'
                                                              .'{expert_legend:hide},class,sig_bgcolor,sig_color,sig_width;'
                                                              .'{template_legend:hide},customTpl;'
                                                              .'{invisible_legend:hide},invisible';

$GLOBALS['TL_DCA']['tl_form_field']['fields']['sig_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['sig_size'],
    'default'                 => array(500, 250),
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
                                                      
$GLOBALS['TL_DCA']['tl_form_field']['fields']['sig_bgcolor'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['sig_bgcolor'],
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['sig_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['sig_color'],
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['sig_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['sig_width'],
    'default'                 => 5,
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);
