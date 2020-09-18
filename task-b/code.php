<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($start = null, $items = array(), $append = null){
        $returnString = $start . ": ";

        while ($item = array_shift($items))
        {
            if (count($items) > 1) {
                $separator = ", ";
            } elseif (count($items) == 1) {
                $separator = " and ";
            } else {
                $separator = ".";
            }

            if (is_string($append))
            {
                $returnString .= $item . " " . $append . $separator;
            } elseif (is_array($append)) {
                $returnString .= $item . " " . array_shift($append) . $separator;
            } else {
                $returnString .= $item . $separator;
            }
        }

        return $returnString;
    }