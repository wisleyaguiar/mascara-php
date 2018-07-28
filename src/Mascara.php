<?php
/**
 * Created by PhpStorm.
 * User: wisleyaguiar
 * Date: 28/07/2018
 * Time: 18:13
 */

namespace Mascara;


class Mascara
{

    public function __construct()
    {
    }

    /**
     * @param $val
     * @param $mask
     * @return string
     */
    public static function mask($val,$mask)
    {
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++)
        {
            if($mask[$i] == '#')
            {
                if(isset($val[$k]))
                    $maskared .= $val[$k++];
            }
            else
            {
                if(isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }
}