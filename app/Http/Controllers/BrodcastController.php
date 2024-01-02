<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NotificationAlertEvent;
use App\Models\EmegencyNotification;

class BrodcastController extends Controller
{

    public function submitNotification(Request $request){
        $validate = $request->validate([
            'notification_title' => 'required|min:4',
            'notification_desc' => 'required',
            'duration' => 'required',
        ]);
        

        $data = [
            'title' => $request->notification_title,
            'description' => $request->notification_desc,
            'duration' => $request->duration
        ];
        if(EmegencyNotification::create($data)){
            event(new NotificationAlertEvent($data));
        };


        return redirect('/all-alerts');
    }

    public function allAlerts(){
        $data['alerts'] = EmegencyNotification::orderBy('id', 'desc')->paginate(10);

        return view('dashboard.allAlerts', $data);
    }
}
