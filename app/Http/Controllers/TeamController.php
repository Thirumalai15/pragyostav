<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        $team = new Team;
        $team->reg_id = Str::random('7');
        $team->event_name = $request->event;
        $team->team_lead = $request->TeamLead;
        $team->team_lead = $request->TeamLead;
        $team->team_lead_email = $request->TEmail;
        $team->team_lead_phone = $request->TPhone;
        $team->team_lead_year = $request->TYear;
        $team->team_lead_department = $request->TDepartment;
        $team->team_lead_college = $request->TCollege;
        $team->team_lead_college = $request->TCollege;
        $team->member_1 = $request->member_1;
        $team->member_1_phone = $request->phone_1;
        $team->member_1_college = $request->college_1;
        $team->member_1_year = $request->year_1;
        $team->member_2 = $request->member_2;
        $team->member_2_phone = $request->phone_2;
        $team->member_2_college = $request->college_2;
        $team->member_2_year = $request->year_2;
        $team->save();

        $team_update = Team::find($team->id);

        if ($team_update->id <= 9) {
            $id = $team->reg_id;
            $padded = str_pad($id, 7, '00');

            $reg_id = $id . '-00' . $team_update->id;
        } elseif ($team_update->id <= 99) {
            $id = $team->reg_id;

            $reg_id = $id . '-0' . $team_update->id;
        } else {
            $reg_id = $team->reg_id . '-' . $team_update->id;
        }

        $team_update->update([
            'reg_id' => $reg_id
        ]);


        return redirect(route('eventReg'));

//        TODO : Redirect with status show the status message
//        TODO: Add validation and save the payment screenshot
//        TODO: Queue email for faster page loading


    }
}
