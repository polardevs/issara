<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TopicRequest extends Request
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
        return [
            'category_id' => 'required|integer',
            // 'user_id' => 'required|integer',
            'name' => 'required|string',
            'content' => 'required|string|max:65535',
        ];
    }
}
