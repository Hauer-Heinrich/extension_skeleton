<?php
namespace HauerHeinrich\ExtensionSkeleton\Controller;

use \TYPO3\CMS\Core\Messaging\AbstractMessage;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use \TYPO3\CMS\Core\Utility\GeneralUtility;

// use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/***
 *
 * This file is part of the "Extension Skeleton" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 hauer-heinrich, www.hauer-heinrich.de
 *           Christian Hackl (chackl@hauer-heinrich.de)
 ***/

/**
 * ExampleController
 */
class ExampleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * exampleRepository
     *
     * @var \HauerHeinrich\ExtensionSkeleton\Domain\Repository\ExampleRepository
     * @inject
     */
    protected $exampleRepository = null;

    /**
     * Root Page ID
     *
     * @var int
     */
    protected $rootPageID = 0;

    /**
     * Page uid
     *
     * @var int
     */
    protected $pageUid = 0;

    /**
     * Function will be called before every other action
     */
    public function initializeAction()
    {
        $this->rootPageID = $GLOBALS['TSFE']->rootLine[0]['uid'];
        $this->pageUid = (int) \TYPO3\CMS\Core\Utility\GeneralUtility::_GET('id');
    }

    /**
     * action list
     *
     * @param HauerHeinrich\ExtensionSkeleton\Domain\Model\Example
     * @return void
     */
    public function listAction()
    {
        $pages = $this->settings['pages'];

        if (!empty($pages)) {
            $all = $this->exampleRepository->findAll();
            $this->view->assign('allexamples', $all);
        } else {
            $this->addFlashMessage(
                'No pages selected (listAction)',
                'Error',
                AbstractMessage::ERROR,
                FALSE
            );
        }

        $cObj = $this->configurationManager->getContentObject();
        $this->view->assign('data', $cObj->data);
    }

    /**
     * action show
     *
     * @param HauerHeinrich\ExtensionSkeleton\Domain\Model\Example
     * @return void
     */
    public function showAction(\HauerHeinrich\ExtensionSkeleton\Domain\Model\Example $example)
    {
        $this->view->assign('example', $example);

        $cObj = $this->configurationManager->getContentObject();
        $this->view->assign('data', $cObj->data);
    }
}
