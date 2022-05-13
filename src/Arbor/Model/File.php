<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class File extends ModelBase
{
    const CONTENT = 'content';

    const URL = 'url';

    const FILE_SIZE = 'fileSize';

    const MIME_TYPE = 'mimeType';

    const FILE_IDENTIFIER = 'fileIdentifier';

    const FILE_METADATA = 'fileMetadata';

    const FILE_NAME = 'fileName';

    const COMPRESSED = 'compressed';

    protected $_resourceType = ResourceType::FILE;

    /**
     * @param Query $query
     * @return File[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
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
     * @return Content
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param Content $content
     */
    public function setContent(Content $content = null)
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
    public function setUrl($url = null)
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
    public function setFileSize($fileSize = null)
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
    public function setMimeType($mimeType = null)
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
    public function setFileIdentifier($fileIdentifier = null)
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
    public function setFileMetadata($fileMetadata = null)
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
    public function setFileName($fileName = null)
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
    public function setCompressed($compressed = null)
    {
        $this->setProperty('compressed', $compressed);
    }
}
