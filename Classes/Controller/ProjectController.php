<?php
namespace MFUG\Showroom\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "MFUG.Showroom".              *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \MFUG\Showroom\Domain\Model\Project;

/**
 * Project controller for the MFUG.Showroom package 
 *
 * @FLOW3\Scope("singleton")
 */
class ProjectController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \MFUG\Showroom\Domain\Repository\ProjectRepository
	 */
	protected $projectRepository;

	/**
	 * Shows a list of projects
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('projects', $this->projectRepository->findAll());
	}

	/**
	 * Shows a single project object
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $project The project to show
	 * @return void
	 */
	public function showAction(Project $project) {
		$this->view->assign('project', $project);
	}

	/**
	 * Shows a form for creating a new project object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new project object to the project repository
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $newProject A new project to add
	 * @return void
	 */
	public function createAction(Project $newProject) {
		$this->projectRepository->add($newProject);
		$this->addFlashMessage('Created a new project.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing project object
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $project The project to edit
	 * @return void
	 */
	public function editAction(Project $project) {
		$this->view->assign('project', $project);
	}

	/**
	 * Updates the given project object
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $project The project to update
	 * @return void
	 */
	public function updateAction(Project $project) {
		$this->projectRepository->update($project);
		$this->addFlashMessage('Updated the project.');
		$this->redirect('index');
	}

	/**
	 * Removes the given project object from the project repository
	 *
	 * @param \MFUG\Showroom\Domain\Model\Project $project The project to delete
	 * @return void
	 */
	public function deleteAction(Project $project) {
		$this->projectRepository->remove($project);
		$this->addFlashMessage('Deleted a project.');
		$this->redirect('index');
	}

}

?>