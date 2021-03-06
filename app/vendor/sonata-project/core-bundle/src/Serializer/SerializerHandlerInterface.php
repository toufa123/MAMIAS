<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Serializer;

if (!interface_exists(\Sonata\Form\Serializer\SerializerHandlerInterface::class, false)) {
    @trigger_error(
        'The '.__NAMESPACE__.'\SerializerHandlerInterface class is deprecated since sonata-project/core-bundle 3.19.0 and will be removed in version 4.0.'
        .' Use Sonata\Form\Serializer\SerializerHandlerInterface instead.',
        E_USER_DEPRECATED
    );
}

class_alias(
    \Sonata\Form\Serializer\SerializerHandlerInterface::class,
    __NAMESPACE__.'\SerializerHandlerInterface'
);

if (false) {
    /**
     * @deprecated since sonata-project/core-bundle 3.19.0, to be removed in 4.0.
     */
    interface SerializerHandlerInterface extends \Sonata\Form\Serializer\SerializerHandlerInterface
    {
        /**
         * @return string
         */
        public static function getType();
    }
}

interface_exists(\Sonata\CoreBundle\Serializer\SerializerHandlerInterface::class);
