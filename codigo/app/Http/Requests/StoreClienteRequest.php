

//*
*Get the validation rules that aply to the request.

*
*@return array
*/
public function rules()
{
    return[
        
        'nome' => 'required|max'
}