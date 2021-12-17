<?php

namespace kostikpenzin\elfinder\flysystem;

use Google\Cloud\Storage\StorageClient;
use Superbalist\Flysystem\GoogleStorage\GoogleStorageAdapter;
use yii\base\InvalidConfigException;
use creocoder\flysystem\Filesystem;

/**
 * GoogleCloudFilesystem
 *
 */
class GoogleCloudFilesystem extends Filesystem
{
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $keyFilePath;
    /**
     * @var string
     */
    public $bucket;
    /**
     * @var string
     */
    public $storageApiUri;
    /**
     * @var string
     */
    public $pathPrefix;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if ($this->projectId === null) {
            throw new InvalidConfigException('The "projectId" property must be set.');
        }

        if ($this->keyFilePath === null) {
            throw new InvalidConfigException('The "secret" property must be set.');
        }

        if ($this->bucket === null) {
            throw new InvalidConfigException('The "bucket" property must be set.');
        }

        parent::init();
    }

    /**
     * @return GoogleStorageAdapter
     */
    protected function prepareAdapter()
    {
        $config = [
                'projectId' => $this->projectId,
                'keyFilePath' => \Yii::getAlias($this->keyFilePath),

        ];

        $client = new StorageClient($config);
        $bucket = $client->bucket($this->bucket);
        return  new GoogleStorageAdapter($client, $bucket, $this->storageApiUri, $this->pathPrefix);
    }
}
