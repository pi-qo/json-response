<?php

namespace PiQo\JSON;

class Response extends Singleton
{
    protected $meta;
    protected $data;
    protected $errors;

    protected function __constructor()
    {
        $this->meta = null;
        $this->data = null;
        $this->errors = null;
    }

    public function setMeta(Meta $meta)
    {
        $this->meta = $meta;
    }

    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    public function setData(Data $data)
    {
        $this->data = $data;
    }

    public function getData(): ?Data
    {
        return $this->data;
    }

    public function setErrors(Errors $errors)
    {
        $this->errors = $errors;
    }

    public function getErrors(): ?Errors
    {
        return $this->errors;
    }
}