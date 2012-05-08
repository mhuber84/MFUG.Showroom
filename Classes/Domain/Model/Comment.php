<?php
namespace MFUG\Showroom\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "MFUG.Showroom".              *
 *                                                                        *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A Comment
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Comment {

	/**
	 * The comment text
	 * @var string
	 * @ORM\Column(type="text")
	 */
	protected $commentText;

	/**
	 * The creation date
	 * @var \DateTime
	 */
	protected $creationDate;

	/**
	 * The author
	 * @var \TYPO3\Party\Domain\Model\Person
	 * @ORM\ManyToOne
	 */
	protected $author;

	/**
	 * The published
	 * @var boolean
	 */
	protected $published;

	/**
	 * The project
	 * @var \MFUG\Showroom\Domain\Model\Project
	 * @ORM\ManyToOne(inversedBy="comments")
	 */
	protected $project;


	/**
	 * Get the Comment's comment text
	 *
	 * @return string The Comment's comment text
	 */
	public function getCommentText() {
		return $this->commentText;
	}

	/**
	 * Sets this Comment's comment text
	 *
	 * @param string $commentText The Comment's comment text
	 * @return void
	 */
	public function setCommentText($commentText) {
		$this->commentText = $commentText;
	}

	/**
	 * Get the Comment's creation date
	 *
	 * @return \DateTime The Comment's creation date
	 */
	public function getCreationDate() {
		return $this->creationDate;
	}

	/**
	 * Sets this Comment's creation date
	 *
	 * @param \DateTime $creationDate The Comment's creation date
	 * @return void
	 */
	public function setCreationDate(\DateTime $creationDate) {
		$this->creationDate = $creationDate;
	}

	/**
	 * Get the Comment's author
	 *
	 * @return \TYPO3\Party\Domain\Model\Person The Comment's author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Sets this Comment's author
	 *
	 * @param \TYPO3\Party\Domain\Model\Person $author The Comment's author
	 * @return void
	 */
	public function setAuthor(\TYPO3\Party\Domain\Model\Person $author) {
		$this->author = $author;
	}

	/**
	 * Get the Comment's published
	 *
	 * @return boolean The Comment's published
	 */
	public function getPublished() {
		return $this->published;
	}

	/**
	 * Sets this Comment's published
	 *
	 * @param boolean $published The Comment's published
	 * @return void
	 */
	public function setPublished($published) {
		$this->published = $published;
	}

	/**
	 * Get the Comment's project
	 *
	 * @return \MFUG\Showroom\Domain\Model\Project The Comment's project
	 */
	public function getProject() {
		return $this->project;
	}

	/**
	 * Sets this Comment's project
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $project The Comment's project
	 * @return void
	 */
	public function setProject(\MFUG\Showroom\Domain\Model\Project $project) {
		$this->project = $project;
	}

}
?>