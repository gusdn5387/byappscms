<?php namespace Jiwon\Byapps\Models;

use Model;

/**
 * Model
 */
class PaymentData extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jiwon_byapps_payment_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
