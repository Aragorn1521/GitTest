<?php

require_once 'ParserInterface.php';

class Parser implements ParserInterface
{
    public function process(string $url, $tag) {
        return [
            'jast',
            'do',
            'it'];
    }
}
