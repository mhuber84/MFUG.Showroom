<?php
namespace MFUG\Showroom\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "MFUG.Showroom".              *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A Image
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Image {

	/**
	 * The file
	 * @var string
	 */
	protected $file;

	/**
	 * The title text
	 * @var string
	 */
	protected $titleText;

	/**
	 * The alt text
	 * @var string
	 */
	protected $altText;

	/**
	 * The project
	 * @var \MFUG\Showroom\Domain\Model\Project
	 */
	protected $project;


	/**
	 * Get the Image's file
	 *
	 * @return string The Image's file
	 */
	public function getFile() {
		return $this->file;
	}

	/**
	 * Sets this Image's file
	 *
	 * @param string $file The Image's file
	 * @return void
	 */
	public function setFile($file) {
		$this->file = $file;
	}

	/**
	 * Get the Image's title text
	 *
	 * @return string The Image's title text
	 */
	public function getTitleText() {
		return $this->titleText;
	}

	/**
	 * Sets this Image's title text
	 *
	 * @param string $titleText The Image's title text
	 * @return void
	 */
	public function setTitleText($titleText) {
		$this->titleText = $titleText;
	}

	/**
	 * Get the Image's alt text
	 *
	 * @return string The Image's alt text
	 */
	public function getAltText() {
		return $this->altText;
	}

	/**
	 * Sets this Image's alt text
	 *
	 * @param string $altText The Image's alt text
	 * @return void
	 */
	public function setAltText($altText) {
		$this->altText = $altText;
	}

	/**
	 * Get the Image's project
	 *
	 * @return \MFUG\Showroom\Domain\Model\Project The Image's project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Sets this Image's project
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $project The Image's project
	 * @return void
	 */
	public function setProject(\MFUG\Showroom\Domain\Model\Project $project) {
		$this->project = $project;
	}

}
?>