<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
          'title'       => 'required|min:3|max:100',
          'description' => 'required|min:10',
          'thumb'       => 'max:255',
          'price'       => 'required',
          'series'      => 'required|min:5|max:50',
          'sale_date'   => 'required',
          'type'        => 'required|min:3|max:100',
          'artists'     => 'required|min:3|max:255',
          'writers'     => 'required|min:3|max:255',
        ];
    }

    public function messages(){
      return[
        'title'       => 'Il titolo è un campo obbligatorio',
        'title'       => 'Il titolo deve avere almeno :min caratteri',
        'title'       => 'Il titolo deve avere almeno :max caratteri',
        'description' => 'La descrizione è un campo obbligatorio',
        'description' => 'La descrizione deve avere almeno :min caratteri',
        'thumb'       => 'L\'immagine deve essere massimo  :max',
        'price'       => 'Il prezzo è un campo obbligatorio',
        'series'      => 'La serie è un campo obbligatorio',
        'series'      => 'La serie deve avere almeno :min caratteri',
        'series'      => 'La serie deve avere almeno :max caratteri',
        'sale_date'   => 'La data è un campo obbligatorio',
        'type'        => 'Il tipo è un campo obbligatorio',
        'type'        => 'Il tipo deve avere almeno :min caratteri',
        'type'        => 'Il tipo deve avere almeno :max caratteri',
        'artists'     => 'Artisti è un campo obbligatorio',
        'artists'     => 'Artisti deve avere almeno :min caratteri',
        'artists'     => 'Artisti deve avere almeno :max caratteri',
        'writers'     => 'Scrittori è un campo obbligatorio',
        'writers'     => 'Scrittori deve avere almeno :min caratteri',
        'writers'     => 'Scrittori deve avere almeno :max caratteri',

      ];
    }
}