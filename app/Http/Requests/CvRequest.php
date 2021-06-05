<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest
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
            'firstname'      => 'required',
            'lastname'       => 'required',
            'middlename'     => 'required',
            'birthdate'      => 'required',
            'nationality'    => 'required',
            'region'         => 'required',
            'address'        => 'required',
            'gender'         => 'required',
            'marital'        => 'required',
            'military'       => 'required',
            'driver_license' => 'required',
            'phone'          => 'required'
        ];
    }

    public function messages(){
        return [
            'firstname.required'      => 'Adınızı daxil edin',
            'lastname.required'       => 'Soyadınızı daxil edin',
            'middlename.required'     => 'Ata adını daxil edin',
            'birthdate.required'      => 'Doğum tarixinizi daxil edin',
            'nationality.required'    => 'Vətəndaşlığınızı seçin',
            'region.required'         => 'Region seçin',
            'address.required'        => 'Adresinizi daxil edin',
            'gender.required'         => 'Cinsiyyətinizi seçin',
            'marital.required'        => 'Ailə vəziyyəti statusunuzu seçin',
            'military.required'       => 'Hərbi mükəlləfiyyət statusunuzu seçin',
            'driver_license.required' => 'Sürücülük vəsiqəsi statusunuzu seçin',
            'phone.required'          => 'Əlaqə telefonunuzu daxil edin'
        ];
    }
}
