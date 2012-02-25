<?php
namespace MFUG\Showroom\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "MFUG.Showroom".              *
 *                                                                        *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
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
	 * @ORM\ManyToMany(mappedBy="tags")
	 */
	protected $projects;

	/**
	 * Don't forget to initialize collections in the constructor!
	 */
	public function __construct(){
		$this->projects = new \Doctrine\Common\Collections\ArrayCollection();
	}


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
	public function setProjects(\Doctrine\Common\Collections\Collection $projects) {
		$this->projects = $projects;
	}

	/**
	 * Adds a Project to this Tag
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $project
	 * @return void
	 */
	public function addProject(\MFUG\Showroom\Domain\Model\Project $project) {
		$this->projects->add($project);
	}

	/**
	 * Removes a Project from this Tag
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $project
	 * @return void
	 */
	public function removeProject(\MFUG\Showroom\Domain\Model\Project $project) {
		$this->projects->remove($project);
	}

}
?>