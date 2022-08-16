<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCar_maintainanceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
      return [
          'car_id' => 'required|exists:owened_cars',
          'maintainance_type_id' => 'required|exists:maintenance_type',
          'maintainance_date' => 'required|date',
      ];
    }
}
