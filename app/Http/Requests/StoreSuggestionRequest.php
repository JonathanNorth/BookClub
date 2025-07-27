<?php

namespace App\Http\Requests;

use App\Models\Suggestion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreSuggestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $suggestionId = $this->input('suggestion_id');

        if (!$suggestionId){
            return true; 
        }
        $suggestion = Suggestion::find($suggestionId);

        return $suggestion && $suggestion->user_id === Auth::id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'book_id' => 'required|exists:books,id',
            'round_id' => 'required|exists:rounds,id',
            'user_id' => 'required|exists:users,id'
        ];
    }
}
