<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    static function responseJson($status, $message, $data = null)
    {

        if ($data == null) {
            $response =
                [
                    'status' => $status,
                    'message' => $message
                ];
        } else {
            $response =
                [
                    'status' => $status,
                    'message' => $message,
                    'data' => $data
                ];
        }

        return response()->json($response);
    }
    public  function sendVoice(Request $request)
    {
        $rules =
            [
                'record' => 'required',

            ];


        $data = validator()->make($request->all(), $rules);

        if ($data->fails())
        {
//            info( 1);
            return $this->responseJson(0, $data->errors()->first(), $data->errors());
        }


        $record = new Record();
        if ($request->hasFile('record'))
        {

            $destinationPath = public_path() . '/uploads/records/';
            $extension = $request->record->getClientOriginalExtension(); // getting image extension
            $name = 'record-' . time() . '' . rand(11111, 99999) . '.' . $extension; // renaming image

            $file = $request->record->storeAs('audio', $name, 'uploads');
            $record->record = $name ;
            $record->save();
            return $this->responseJson(0, 'تم الاضافة بنجاح',$record);

        }



    }


    public  function  getRecord(Request $request)
    {
     $get = Record::get();
        return $this->responseJson(0, 'تم  بنجاح',$get);
    }


    public function getId(Request $request)
    {
        $get = Record::find($request->id);
        $toSplit = $get->text_record;
        $split = str_split($toSplit,1);
        $len = strlen($toSplit);


        for ($i=0 ; $i<$len;$i++)
        {

//
//print($i);
            switch ($split[$i])
            {
                case 'h' :
                    $res[]= array('path'=> storage_path('sign/h.jpg')) ;
                    break ;
                case 'a' :
                    $res [] = array('path' => storage_path('sign/a.jpg'))  ;
                    break ;
                case 'b' :
                    $res [] =   array('path' => storage_path('sign/b.jpg'));
                    break ;
                case 'c' :
                    $res [] =   array('path' =>storage_path('sign/c.jpg'));
                    break ;
                case 'd' :
                    $res [] =  array('path' => storage_path('sign/d.jpg'));
                    break ;
                case 'e' :
                    $res [] =   array('path' => storage_path('sign/e.jpg'));
                    break ;
                case 'f' :
                    $res [] =   array('path' =>storage_path('sign/f.jpg'));
                    break ;
                case 'g' :
                    $res [] =   array('path' =>storage_path('sign/g.jpg'));
                    break ;

                case 'i' :
                    $res [] =  array('path' => storage_path('sign/i.jpg'));
                    break ;
                case 'I' :
                    $res [] =  array('path' => storage_path('sign/i.jpg'));
                    break ;
                case 'j' :
                    $res [] =array('path' =>  storage_path('sign/j.jpg'));
                break ;
                case 'k' :
                    $res [] =  array('path' =>storage_path('sign/k.jpg'));
                    break ;
                case 'l' :
                    $res [] =   array('path' =>storage_path('sign/l.jpg'));
                    break ;
                case 'm' :
                    $res [] =   array('path' =>storage_path('sign/m.jpg'));
                    break ;
                case 'n' :
                    $res [] =  array('path' => storage_path('sign/n.jpg'));
                    break ;
                case 'o' :
                    $res [] =  array('path' => storage_path('sign/o.jpg'));
                    break ;
                case 'p' :
                    $res [] = array('path' =>  storage_path('sign/p.jpg'));
                    break ;
                case 'q' :
                    $res [] =   array('path' => storage_path('sign/q.jpg'));
                    break ;
                case 'r' :
                    $res [] =   array('path' => storage_path('sign/r.jpg'));
                    break ;
                case 's' :
                    $res [] =  array('path' => storage_path('sign/s.jpg'));
                    break ;
                case 't' :
                    $res [] =  array('path' => storage_path('sign/t.jpg'));
                    break ;
                case 'u' :
                    $res [] =  array('path' => storage_path('sign/u.jpg'));
                    break ;
                case 'v' :
                    $res [] =   array('path' => storage_path('sign/v.jpg'));
                    break ;
                case 'w' :
                    $res [] =   array('path' => storage_path('sign/w.jpg'));
                    break ;
                case 'x' :
                    $res [] =  array('path' => storage_path('sign/x.jpg'));
                    break ;
                case 'y' :
                    $res [] =   array('path' => storage_path('sign/y.jpg'));
                    break ;
                case 'z' :
                    $res [] =   array('path' => storage_path('sign/z.jpg'));
                    break ;
                default:
                    $res [] =  "the end";

            }




        }

        // return json_encode($res);
       return $this->responseJson(0, 'تم  بنجاح',$res);
    }


    //
}
