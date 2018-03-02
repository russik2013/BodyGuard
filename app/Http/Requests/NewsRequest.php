<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'name' => "required|string|min:4",
            'description' => "required|string|min:4",
            //'image' => "sometimes|image",
            'video' => "sometimes|url",
            'newsDate' => 'date_format:"Y-m-d H:i"|required',
            'event' => "required|in:0,1",
            'eventEndTime' => 'date_format:"Y-m-d H:i"|required_if:event,1',
        ];
    }
}
