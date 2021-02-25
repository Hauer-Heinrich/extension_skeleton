<?php
namespace HauerHeinrich\ExtensionSkeleton\Domain\Model;

/***
 *
 * This file is part of the "extension_skeleton" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Christian Hackl <chackl@hauer-heinrich.de>, www.hauer-heinrich.de
 *
 ***/

/**
 * Example
 */
class Example extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * textline
     *
     * @var string
     */
    protected $textline = '';

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $images = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the textline
     *
     * @return string textline
     */
    public function getTextline()
    {
        return $this->textline;
    }

    /**
     * Sets the textline
     *
     * @param string $textline
     * @return void
     */
    public function setTextline($textline)
    {
        $this->textline = $textline;
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }
}
