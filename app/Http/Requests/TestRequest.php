<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
        // Nơi viết validate
//        dd(123);
        $rules =[];
        $currentAction = $this-> route()->getActionMethod();
        switch ($this->method()):
            case 'POST':
                switch ($currentAction){
                    case 'add':
                        $rules =[
                            'name'=>'required',
                            'email'=>'required|unique:users',
                            'password'=>'required'
                        ];
                        break;
                    default:
                        break;
                }
                break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required'=>'Mời bạn nhập tên',
            'email.required'=>'Mời bạn nhập email',
            'password.required'=>'Mời bạn nhập password',
            'email.unique'=>'Email đã tồn tại',
        ];
    }
}
