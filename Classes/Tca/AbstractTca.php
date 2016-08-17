<?php
namespace Fab\Vidi\Tca;

/*
 * This file is part of the Fab/Vidi project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

/**
 * An abstract class to handle TCA.
 */
abstract class AbstractTca implements TcaServiceInterface
{

    /**
     * Returns an instance of the current Backend User.
     *
     * @return \TYPO3\CMS\Core\Authentication\BackendUserAuthentication
     */
    protected function getBackendUser()
    {
        return $GLOBALS['BE_USER'];
    }

    /**
     * Returns whether the current mode is Backend.
     *
     * @return bool
     */
    protected function isBackendMode()
    {
        return TYPO3_MODE == 'BE';
    }

    /**
     * Returns whether the current mode is Frontend.
     *
     * @return bool
     */
    protected function isFrontendMode()
    {
        return TYPO3_MODE == 'FE';
    }

}
