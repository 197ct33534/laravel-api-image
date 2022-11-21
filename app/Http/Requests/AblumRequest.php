<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class AblumRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if($request->method == 'PUT'){
            return [
                'name'=> ['required','unique:albums,name,'.$request->input('id'),'max:255']
            ];
        }else{
            return [
                'name'=> ['required','unique:albums,name','max:255']
            ];
        }

    }
}
