<?php

namespace lepiaf\SerialPort\Parser;

interface ParserInterface
{
    /**
     * Parse data right after read from serial connection
     *
     * @param string $chars
     *
     * @return mixed
     */
    public function parse(string $chars);

    /**
     * Separator use to split data
     *
     * @return string|array
     */
    public function getSeparator();
}
