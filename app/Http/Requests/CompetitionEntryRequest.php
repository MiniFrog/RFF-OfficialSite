<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompetitionEntryRequest extends Request
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
        $member_number = count($this->input('member'));
        $rules = [
            'teamName' => 'required|max:20',
            'slogen' => 'required|max:255',
            'leader.name' => 'required|max:20|regex:/^[\x{4e00}-\x{9fa5}]+$/u',
            'leader.phone' => 'required|regex:/^1[34578]\d{9}$/',
            'leader.qq' => 'required|digits_between:5,12'
        ];
        // add validate if member number is greater than zero
        if($member_number >= 1) {
            $rules['member.*.name'] = 'required|max:20|regex:/^[\x{4e00}-\x{9fa5}]+$/u';
            $rules['member.*.phone'] = 'required|regex:/^1[34578]\d{9}$/';
            $rules['member.*.qq'] = 'required|digits_between:5,12';
        }
        return $rules;
    }
    
    public function messages()
    {
        return [
        ];
    }
}
