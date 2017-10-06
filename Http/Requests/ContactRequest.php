<?php namespace Modules\Contact\Http\Requests;

use App\Http\Requests\Request;
use Modules\Core\Contracts\Authentication;
use Illuminate\Support\Facades\Auth;

class ContactRequest extends Request
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
            'name' => 'required|max:256',
            'email' => 'required|email|max:100',
            'message' => 'required|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Imię i nazwisko jest wymagane',
            'name.max' => 'Wprowadzona wartość jest za długa',
            'email.required'  => 'Adres e-mail jest wymagany',
            'email.email' => 'Nie poprawny adres e-mail',
            'email.max' => 'Adres email jest za długi',
            'message.required' => 'Treść wiadomości jest wymagana',
            'message.max' => 'Treść wiadomości jest zbyt długa'

        ];
    }
}
