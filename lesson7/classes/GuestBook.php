<?php
require_once __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $path;
    protected $data = [];

    public function __construct(string $path)
    {
        $this->path = $path;
        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $this->data[] = new GuestBookRecord($line);
        }

    }

    public function getRecords()
    {
        return $this->data;
    }

    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
        return $this;
    }

    public function save()
    {
        $lines = [];
        foreach ($this->data as $record) {
            $lines[] = $record->getMessage();
        }
        file_put_contents($this->path, implode("\n", $lines));
    }

}