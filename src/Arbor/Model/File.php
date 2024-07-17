<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class File extends ModelBase
{
    public const CONTENT = 'content';

    public const URL = 'url';

    public const FILE_SIZE = 'fileSize';

    public const MIME_TYPE = 'mimeType';

    public const FILE_IDENTIFIER = 'fileIdentifier';

    public const FILE_METADATA = 'fileMetadata';

    public const FILE_NAME = 'fileName';

    public const COMPRESSED = 'compressed';

    protected $_resourceType = ResourceType::FILE;

    /**
     * @param Query $query
     * @return File[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::FILE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return File
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FILE, $id);
    }

    /**
     * @return \Arbor\Model\Content
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param \Arbor\Model\Content $content
     */
    public function setContent(\Arbor\Model\Content $content = null)
    {
        $this->setProperty('content', $content);
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty('url');
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url = null)
    {
        $this->setProperty('url', $url);
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->getProperty('fileSize');
    }

    /**
     * @param int $fileSize
     */
    public function setFileSize(int $fileSize = null)
    {
        $this->setProperty('fileSize', $fileSize);
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->getProperty('mimeType');
    }

    /**
     * @param string $mimeType
     */
    public function setMimeType(string $mimeType = null)
    {
        $this->setProperty('mimeType', $mimeType);
    }

    /**
     * @return string
     */
    public function getFileIdentifier()
    {
        return $this->getProperty('fileIdentifier');
    }

    /**
     * @param string $fileIdentifier
     */
    public function setFileIdentifier(string $fileIdentifier = null)
    {
        $this->setProperty('fileIdentifier', $fileIdentifier);
    }

    /**
     * @return string
     */
    public function getFileMetadata()
    {
        return $this->getProperty('fileMetadata');
    }

    /**
     * @param string $fileMetadata
     */
    public function setFileMetadata(string $fileMetadata = null)
    {
        $this->setProperty('fileMetadata', $fileMetadata);
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->getProperty('fileName');
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName = null)
    {
        $this->setProperty('fileName', $fileName);
    }

    /**
     * @return bool
     */
    public function getCompressed()
    {
        return $this->getProperty('compressed');
    }

    /**
     * @param bool $compressed
     */
    public function setCompressed(bool $compressed = null)
    {
        $this->setProperty('compressed', $compressed);
    }
}
