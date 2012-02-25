<?php
namespace MFUG\Showroom\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "MFUG.Showroom".              *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A Tag
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Tag {

	/**
	 * The tag
	 * @var string
	 */
	protected $tag;

	/**
	 * The projects
	 * @var \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Project>
	 */
	protected $projects;


	/**
	 * Get the Tag's tag
	 *
	 * @return string The Tag's tag
	 */
	public function getTag() {
		return $this->tag;
	}

	/**
	 * Sets this Tag's tag
	 *
	 * @param string $tag The Tag's tag
	 * @return void
	 */
	public function setTag($tag) {
		$this->tag = $tag;
	}

	/**
	 * Get the Tag's projects
	 *
	 * @return \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Project> The Tag's projects
	 */
	public function getProjects() {
		return $this->projects;
	}

	/**
	 * Sets this Tag's projects
	 *
	 * @param \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Project> $projects The Tag's projects
	 * @return void
	 */
	public function setProjects(\Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Project> $projects) {
		$this->projects = $projects;
	}

}
?>