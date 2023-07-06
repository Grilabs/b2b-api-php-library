<?php
namespace Gri\B2B;

class Logger
{
    const LOG_FILE_NAME_PREFIX = "gri_b2b_log";
    private string $fileName;

    public function __construct()
    {
        $this->fileName = self::LOG_FILE_NAME_PREFIX . '_' . date('Y-m-d');
        if (!file_exists($this->fileName)) {
            $stream = fopen($this->fileName, 'w+');
            fwrite($stream, '');
            fclose($stream);
        }
    }

    public function log($data = [])
    {
        if (is_array($data) || is_object($data))
            $data = json_encode($data, JSON_PRETTY_PRINT);

        return file_put_contents($this->fileName, $data, FILE_APPEND);
    }
}