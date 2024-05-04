<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
        return [
            'forfaits_id' => 'required|exists:forfaits,id',
            'gares_depart' => 'required|exists:gares,id',
            'gares_arriver' => 'required|exists:gares,id',
            'trajets_id' => 'required|exists:trajets,id',
        ];
    }
}
