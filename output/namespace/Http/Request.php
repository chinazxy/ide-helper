<?php
namespace Swoole\Http;

/**
 * @since 4.2.5
 */
class Request
{

    public $fd;
    public $streamId;
    public $header;
    public $server;
    public $request;
    public $cookie;
    public $get;
    public $files;
    public $post;
    public $tmpfiles;

    /**
     * @return mixed
     */
    public function rawcontent(){}

    /**
     * @return mixed
     */
    public function getData(){}

    /**
     * @return mixed
     */
    public function __destruct(){}


}
