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

namespace Softleister\SignatureformfieldBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;


/**
 * Plugin for the Contao Manager.
 *
 * @author Softleister
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles( ParserInterface $parser )
    {
        return [
            BundleConfig::create( 'Softleister\SignatureformfieldBundle\SoftleisterSignatureformfieldBundle' )
                ->setLoadAfter( ['Contao\CoreBundle\ContaoCoreBundle'] ),
        ];
    }
}
