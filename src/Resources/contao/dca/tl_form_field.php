<?php

/**
 * Extension for Contao 5
 *
 * @copyright  Softleister 2019-2024
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
    'default'                 => [500, 250],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => ['mandatory' => true, 'multiple' => true, 'size' => 2, 'rgxp' => 'natural', 'tl_class' => 'w50'],
    'sql'                     => ['type' => 'string', 'length' => 255, 'default' => '']
);
                                                      
$GLOBALS['TL_DCA']['tl_form_field']['fields']['sig_bgcolor'] = array
(
    'inputType'               => 'text',
    'eval'                    => ['maxlength' => 6, 'colorpicker' => true, 'isHexColor' => true, 'decodeEntities' => true, 'tl_class' => 'w50 wizard'],
    'sql'                     => ['type' => 'string', 'length' => 6, 'default' => '']
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['sig_color'] = array
(
    'inputType'               => 'text',
    'eval'                    => ['maxlength' => 6, 'colorpicker' => true, 'isHexColor' => true, 'decodeEntities' => true, 'tl_class' => 'w50 wizard'],
    'sql'                     => ['type' => 'string', 'length' => 6, 'default' => '']
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['sig_width'] = array
(
    'default'                 => 5,
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => ['maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50'],
    'sql'                     => ['type' => 'string', 'length' => 5, 'default' => '0']
);
