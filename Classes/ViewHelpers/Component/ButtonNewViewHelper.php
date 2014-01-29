<?php
namespace TYPO3\CMS\Vidi\ViewHelpers\Component;
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
use TYPO3\CMS\Backend\Utility\IconUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * View helper which renders a "new" button to be placed in the doc header.
 */
class ButtonNewViewHelper extends AbstractViewHelper {

	/**
	 * Renders a "new" button to be placed in the doc header.
	 *
	 * @return string
	 */
	public function render() {

		/** @var \TYPO3\CMS\Vidi\ViewHelpers\Uri\CreateViewHelper $uriCreateViewHelper */
		$uriCreateViewHelper = $this->objectManager->get('TYPO3\CMS\Vidi\ViewHelpers\Uri\CreateViewHelper');
		$uriCreateViewHelper->initialize();

		return sprintf('<a href="%s" class="btn-new-top">%s</a>',
			$uriCreateViewHelper->render(),
			IconUtility::getSpriteIcon('actions-document-new')
		);
	}
}

?>