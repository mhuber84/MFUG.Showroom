<?php
namespace MFUG\Showroom\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "MFUG.Showroom".              *
 *                                                                        *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A Project
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Project {

	/**
	 * The title
	 * @var string
	 */
	protected $title;

	/**
	 * The description
	 * @var string
	 * @ORM\Column(type="text")
	 */
	protected $description;

	/**
	 * The explanation
	 * @var string
	 * @ORM\Column(type="text")
	 */
	protected $explanation;

	/**
	 * The link
	 * @var string
	 */
	protected $link;

	/**
	 * The budget
	 * @var string
	 */
	protected $budget;

	/**
	 * The start date
	 * @var \Doctrine\Common\DateTime\DateTime
	 */
	protected $startDate;

	/**
	 * The end date
	 * @var \Doctrine\Common\DateTime\DateTime
	 */
	protected $endDate;

	/**
	 * The author
	 * @var \TYPO3\Party\Domain\Model\Person
	 * @ORM\ManyToOne
	 */
	protected $author;

	/**
	 * The images
	 * @var \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Image>
	 * @ORM\OneToMany(mappedBy="project")
	 */
	protected $images;

	/**
	 * The comments
	 * @var \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Comment>
	 * @ORM\OneToMany(mappedBy="project")
	 */
	protected $comments;

	/**
	 * The tags
	 * @var \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Tag>
	 * @ORM\ManyToMany(inversedBy="projects")
	 */
	protected $tags;

	/**
	 * Don't forget to initialize collections in the constructor!
	 */
	public function __construct() {
		$this->images = new \Doctrine\Common\Collections\ArrayCollection();
		$this->comments = new \Doctrine\Common\Collections\ArrayCollection();
		$this->tags = new \Doctrine\Common\Collections\ArrayCollection();
	}


	/**
	 * Get the Project's title
	 *
	 * @return string The Project's title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets this Project's title
	 *
	 * @param string $title The Project's title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get the Project's description
	 *
	 * @return string The Project's description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets this Project's description
	 *
	 * @param string $description The Project's description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Get the Project's explanation
	 *
	 * @return string The Project's explanation
	 */
	public function getExplanation() {
		return $this->explanation;
	}

	/**
	 * Sets this Project's explanation
	 *
	 * @param string $explanation The Project's explanation
	 * @return void
	 */
	public function setExplanation($explanation) {
		$this->explanation = $explanation;
	}

	/**
	 * Get the Project's link
	 *
	 * @return string The Project's link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets this Project's link
	 *
	 * @param string $link The Project's link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * Get the Project's budget
	 *
	 * @return string The Project's budget
	 */
	public function getBudget() {
		return $this->budget;
	}

	/**
	 * Sets this Project's budget
	 *
	 * @param string $budget The Project's budget
	 * @return void
	 */
	public function setBudget($budget) {
		$this->budget = $budget;
	}

	/**
	 * Get the Project's start date
	 *
	 * @return \Doctrine\Common\DateTime\DateTime The Project's start date
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Sets this Project's start date
	 *
	 * @param \Doctrine\Common\DateTime\DateTime $startDate The Project's start date
	 * @return void
	 */
	public function setStartDate(\Doctrine\Common\DateTime\DateTime $startDate) {
		$this->startDate = $startDate;
	}

	/**
	 * Get the Project's end date
	 *
	 * @return \Doctrine\Common\DateTime\DateTime The Project's end date
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Sets this Project's end date
	 *
	 * @param \Doctrine\Common\DateTime\DateTime $endDate The Project's end date
	 * @return void
	 */
	public function setEndDate(\Doctrine\Common\DateTime\DateTime $endDate) {
		$this->endDate = $endDate;
	}

	/**
	 * Get the Project's author
	 *
	 * @return \TYPO3\Party\Domain\Model\Person The Project's author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Sets this Project's author
	 *
	 * @param \TYPO3\Party\Domain\Model\Person $author The Project's author
	 * @return void
	 */
	public function setAuthor(\TYPO3\Party\Domain\Model\Person $author) {
		$this->author = $author;
	}

	/**
	 * Get the Project's images
	 *
	 * @return \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Image> The Project's images
	 */
	public function getImages() {
		return $this->images;
	}

	/**
	 * Sets this Project's images
	 *
	 * @param \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Image> $images The Project's images
	 * @return void
	 */
	public function setImages(\Doctrine\Common\Collections\Collection $images) {
		$this->images = $images;
	}

	/**
	 * Adds an Image to this Project
	 *
	 * @param \MFUG\Showroom\Domain\Model\Image $image
	 * @return void
	 */
	public function addImage(\MFUG\Showroom\Domain\Model\Image $image) {
		$this->images->add($image);
	}

	/**
	 * Removes an Image from this Project
	 *
	 * @param \MFUG\Showroom\Domain\Model\Image $image
	 * @return void
	 */
	public function removeImage(\MFUG\Showroom\Domain\Model\Image $image) {
		$this->images->remove($image);
	}

	/**
	 * Get the Project's comments
	 *
	 * @return \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Comment> The Project's comments
	 */
	public function getComments() {
		return $this->comments;
	}

	/**
	 * Sets this Project's comments
	 *
	 * @param \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Comment> $comments The Project's comments
	 * @return void
	 */
	public function setComments(\Doctrine\Common\Collections\Collection $comments) {
		$this->comments = $comments;
	}

	/**
	 * Adds a Comment to this Project
	 *
	 * @param \MFUG\Showroom\Domain\Model\Comment $comment
	 * @return void
	 */
	public function addComment(\MFUG\Showroom\Domain\Model\Comment $comment) {
		$this->comments->add($comment);
	}

	/**
	 * Removes a Comment from this Project
	 *
	 * @param \MFUG\Showroom\Domain\Model\Comment $comment
	 * @return void
	 */
	public function removeComment(\MFUG\Showroom\Domain\Model\Comment $comment) {
		$this->comments->remove($comment);
	}

	/**
	 * Get the Project's tags
	 *
	 * @return \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Tag> The Project's tags
	 */
	public function getTags() {
		return $this->tags;
	}

	/**
	 * Sets this Project's tags
	 *
	 * @param \Doctrine\Common\Collections\Collection<\MFUG\Showroom\Domain\Model\Tag> $tags The Project's tags
	 * @return void
	 */
	public function setTags(\Doctrine\Common\Collections\Collection $tags) {
		$this->tags = $tags;
	}

	/**
	 * Adds a Tag to this Project
	 *
	 * @param \MFUG\Showroom\Domain\Model\Tag $tag
	 * @return void
	 */
	public function addTag(\MFUG\Showroom\Domain\Model\Tag $tag) {
		$this->tags->add($tag);
	}

	/**
	 * Removes a Tag from this Project
	 *
	 * @param \MFUG\Showroom\Domain\Model\Tag $tag
	 * @return void
	 */
	public function removeTag(\MFUG\Showroom\Domain\Model\Tag $tag) {
		$this->tags->remove($tag);
	}

}
?>