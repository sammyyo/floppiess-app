<?php namespace Samuelerhini\Floppiess\Models;

use Model;

/**
 * Model
 */
class Floppies extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'samuelerhini_floppiess_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
