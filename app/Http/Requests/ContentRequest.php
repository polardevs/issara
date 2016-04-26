<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'name'          => 'required|string',
            // 'link_url'      => 'required|string',
            // 'start_date'    => 'required|date_format:"Y-m-d"|date',
            // 'end_date'      => 'required|date_format:"Y-m-d"|date',
            // 'priorities'    => 'required|integer',
            // 'status'        => 'required|integer',
            // 'countShowTime' => 'required|integer',
            // 'date.*'        => 'date_format:"Y-m-d"|date',
            // 'timeStart.*'   => 'date_format:"H:i"',
            // 'timeEnd.*'     => 'date_format:"H:i"',
        ];
    }
}
