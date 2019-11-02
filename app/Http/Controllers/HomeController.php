<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Patient;
use App\Models\Setting;
use App\Models\Study;
use App\Models\Team;
use App\User;
use App\Utils\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $team_members = User::query()->viewable()->get();

        return view('frontend.index', compact('team_members'));
    }

    public function uploadImage(Request $request)
    {

    }

    public function changeLang(Request $request)
    {
        session()->put('current_locale', $request->lang);
        return redirect()->route('home');
    }

    public function testMail()
    {
        Mail::to('mahmood.jomaa@gmail.com')
            ->send(new TestMail("Hello World!!"));
    }

    public function storeStudy(Request $request)
    {
        $params = $request->except('_token', '_method', 'logo');
        $patient = new Patient();
        $patient->first_name = $params['first_name'];
        $patient->last_name = $params['last_name'];
        $patient->phone = $params['phone'];
        $patient->email = $params['email'];
        $patient->reference = time();
        $patient->save();

        $study = new Study();
        $study->patient_id = $patient->id;
        $study->technical_description = $params['technical_description'];

        if ($request->has('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                $image = $file;
                $name = ($request->input('first_name')) . '_' . time();
                $folder = '/img/studies/anonymous/' . $request->name;
                $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                $this->uploadOne($image, $folder, 'public', $name);
                if (isset($params['image']))
                    $params['image'] .= ';' . $filePath;
                else
                    $params['image'] = $filePath;
            }
            $study->image = $params['image'];
        }
        $study->save();
        return response()->json(['message' => 'success']);
    }
}
