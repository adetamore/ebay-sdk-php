<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\FileTransfer\Services;

class FileTransferService extends \DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService
{
    const API_VERSION = '1.1.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\FileTransfer\Types\UploadFileRequest $request
     * @return \DTS\eBaySDK\FileTransfer\Types\UploadFileResponse
     */
    public function uploadFile(\DTS\eBaySDK\FileTransfer\Types\UploadFileRequest $request)
    {
        return $this->callOperation(
            'uploadFile',
            $request,
            '\DTS\eBaySDK\FileTransfer\Types\UploadFileResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\FileTransfer\Types\DownloadFileRequest $request
     * @return \DTS\eBaySDK\FileTransfer\Types\DownloadFileResponse
     */
    public function downloadFile(\DTS\eBaySDK\FileTransfer\Types\DownloadFileRequest $request)
    {
        return $this->callOperation(
            'downloadFile',
            $request,
            '\DTS\eBaySDK\FileTransfer\Types\DownloadFileResponse'
        );
    }
}
