<?php

namespace App\Http\Requests;

use App\Contracts\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class LikeRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('like', $this->likeable());
    }

    public function rules()
    {
        return [
            // the class of the liked object
            'likeable_type' => [
                "bail",
                "required",
                "string",
                function ($attribute, $value, $fail) {
                    $valueWithNamespace = 'App\\Models\\' . $value;
                    if (!class_exists($valueWithNamespace, true)) {
                        $fail($valueWithNamespace . " is not an existing class");
                    }

                    if (!in_array(Model::class, class_parents($valueWithNamespace))) {
                        $fail($valueWithNamespace . " is not Illuminate\Database\Eloquent\Model");
                    }

                    if (!in_array(Likeable::class, class_implements($valueWithNamespace))) {
                        $fail($valueWithNamespace . " is not App\Contracts\Likeable");
                    }
                },
            ],

            // the id of the liked object
            'id' => [
                "required",
                function ($attribute, $value, $fail) {
                    $class = $this->input('likeable_type');
                    $classWithNamespace = 'App\\Models\\' . $class;

                    if (!$classWithNamespace::where('id', $value)->exists()) {
                        $fail($value . " does not exists in database");
                    }
                },
            ],
        ];
    }

    public function likeable(): Likeable
    {
        $class = $this->input('likeable_type');

        $classWithNamespace = 'App\\Models\\' . $class;

        return $classWithNamespace::findOrFail($this->input('id'));
    }
}
