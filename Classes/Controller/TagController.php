<?php
namespace MFUG\Showroom\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "MFUG.Showroom".              *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \MFUG\Showroom\Domain\Model\Tag;

/**
 * Tag controller for the MFUG.Showroom package 
 *
 * @FLOW3\Scope("singleton")
 */
class TagController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \MFUG\Showroom\Domain\Repository\TagRepository
	 */
	protected $tagRepository;

	/**
	 * Shows a list of tags
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('tags', $this->tagRepository->findAll());
	}

	/**
	 * Shows a single tag object
	 *
	 * @param \MFUG\Showroom\Domain\Model\Tag $tag The tag to show
	 * @return void
	 */
	public function showAction(Tag $tag) {
		$this->view->assign('tag', $tag);
	}

	/**
	 * Shows a form for creating a new tag object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new tag object to the tag repository
	 *
	 * @param \MFUG\Showroom\Domain\Model\Tag $newTag A new tag to add
	 * @return void
	 */
	public function createAction(Tag $newTag) {
		$this->tagRepository->add($newTag);
		$this->addFlashMessage('Created a new tag.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing tag object
	 *
	 * @param \MFUG\Showroom\Domain\Model\Tag $tag The tag to edit
	 * @return void
	 */
	public function editAction(Tag $tag) {
		$this->view->assign('tag', $tag);
	}

	/**
	 * Updates the given tag object
	 *
	 * @param \MFUG\Showroom\Domain\Model\Tag $tag The tag to update
	 * @return void
	 */
	public function updateAction(Tag $tag) {
		$this->tagRepository->update($tag);
		$this->addFlashMessage('Updated the tag.');
		$this->redirect('index');
	}

	/**
	 * Removes the given tag object from the tag repository
	 *
	 * @param \MFUG\Showroom\Domain\Model\Tag $tag The tag to delete
	 * @return void
	 */
	public function deleteAction(Tag $tag) {
		$this->tagRepository->remove($tag);
		$this->addFlashMessage('Deleted a tag.');
		$this->redirect('index');
	}

}

?>