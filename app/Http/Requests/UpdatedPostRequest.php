<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatedPostRequest extends FormRequest
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
            'title' => 'nullable|string',
            'slug' => 'nullable|string|max:200',
            'content' => 'nullable|string',
            'type' => [
                'nullable',
                Rule::in(Post::getPostTypes()),
            ],
            'image' => [
                'nullable',
                'string',
            ]
        ];
    }
}
