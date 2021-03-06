<?php namespace Jiwon\Byapps\Models;

use Model;

/**
 * Model
 */
class UpdateManage extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    // 다른 DB불러오기
    public $connection = 'byapps';

    /**
     * @var string The database table used by the model.
     */
    //public $table = 'jiwon_byapps_apk_data';
    public $table = 'BYAPPS_apps_update_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
