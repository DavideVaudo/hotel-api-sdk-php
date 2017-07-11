<?php
/**
 * Created by PhpStorm.
 * User: thedjaney@gmail.com
 * Date: 7/11/17
 * Time: 3:31 PM
 */

namespace hotelbeds\hotel_api_sdk\model;


class Boards extends ApiModel
{
    public function __construct(array $data = null)
    {
        $this->validFields = [
            "included" => "boolean",
            "board" => "array",
        ];

        if (null !== $data) {
            $this->fields = $data;
        }
    }
}