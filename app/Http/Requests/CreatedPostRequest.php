<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreatedPostRequest extends FormRequest
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
            'title' => 'required|string',
            'slug' => 'required|string|max:200',
            'content' => 'required|string',
            'userId' => [
                'required',
                'integer'
            ],
            'categoryId' => [
                'required',
                'integer'
            ],
            'type' => [
                'required',
                Rule::in(Post::getPostTypes()),
            ],
            'image' => [
                'nullable',
                'string',
            ]
        ];
    }
}
