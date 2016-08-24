<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class AccountFormRequest extends Request {

  public function authorize()
  {
    return false;
  }

  public function rules()
  {
    return [
      //
    ];
  }

}