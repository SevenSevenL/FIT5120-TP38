<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Html\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\Identifiable;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;
use AmpProject\Validator\Spec\TagWithExtensionSpec;

/**
 * Tag class ScriptAmpAccordion.
 *
 * @package ampproject/amp-toolbox.
 *
 * @property-read string $tagName
 * @property-read array<string> $attrLists
 * @property-read array<string> $htmlFormat
 * @property-read array<string> $satisfies
 * @property-read string $extensionSpec
 * @property-read array<string> $excludes
 */
final class ScriptAmpAccordion extends TagWithExtensionSpec implements Identifiable
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'SCRIPT [amp-accordion]';

    /**
     * Array of extension spec rules.
     *
     * @var array
     */
    const EXTENSION_SPEC = [
        SpecRule::NAME => 'amp-accordion',
        SpecRule::VERSION => [
            '1.0',
        ],
        SpecRule::VERSION_NAME => 'v1.0',
        SpecRule::BENTO_SUPPORTED_VERSION => [
            '1.0',
        ],
    ];

    /**
     * Latest version of the extension.
     *
     * @var string
     */
    const LATEST_VERSION = '0.1';

    /**
     * Meta data about the specific versions.
     *
     * @var array
     */
    const VERSIONS_META = [
        '1.0' => [
            'hasCss' => true,
            'hasBento' => false,
        ],
    ];

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::ATTR_LISTS => [
            AttributeList\CommonExtensionAttrs::ID,
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'amp-accordion 1.0',
        ],
        SpecRule::EXTENSION_SPEC => self::EXTENSION_SPEC,
        SpecRule::EXCLUDES => [
            'amp-accordion 0.1',
        ],
    ];
}
