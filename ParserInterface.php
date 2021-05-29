<?php
/**
 * avtor bu Pobeda.deda1945@gmai.co,
 */
interface ParserInterface {
    
    /**
     * @param string $url
     * @$param string $tag
     * @return array
     */
    public function process(string $url, string $tag):array;
}
