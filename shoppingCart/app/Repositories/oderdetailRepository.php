<?php

namespace App\Repositories;

use App\Models\oderdetail;
use App\Repositories\BaseRepository;

/**
 * Class oderdetailRepository
 * @package App\Repositories
 * @version March 3, 2025, 3:51 pm UTC
*/

class oderdetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'productid',
        'orderid',
        'quantity',
        'subtotal'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return oderdetail::class;
    }
}
