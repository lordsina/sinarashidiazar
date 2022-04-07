<?php

namespace App\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Rule;

class HallUniqe implements Rule
{
    protected $hall_id;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($hall)
    {
        $this->hall_id=$hall;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
         $wedding_hall_ids=DB::table('wedding_ocations')->where('wedding_date_id',$value)->pluck('wedding_hall_id');
         foreach($wedding_hall_ids as $wedding_hall_id){
             if($wedding_hall_id==$this->hall_id){
                return false;
            }
        }
        return true;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'این باغ قبلا اضافه شده است.';
    }
}
