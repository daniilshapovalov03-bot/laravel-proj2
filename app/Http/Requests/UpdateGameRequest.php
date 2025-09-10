<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $gameId = $this->route('game')->id;

        return [
            'title'    => 'required|unique:games,title' . $gameId . '|min:4',
            'description' => 'required',
            'genre'       => 'required',
            'status'      => 'required|in:available,unavailable',
        ];
    }
}
