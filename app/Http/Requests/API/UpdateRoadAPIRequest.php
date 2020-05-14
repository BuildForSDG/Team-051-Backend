<?php

namespace App\Http\Requests\API;

use App\Models\Road;
use InfyOm\Generator\Request\APIRequest;

class UpdateRoadAPIRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = Road::$rules;
        
        return $rules;
    }
}