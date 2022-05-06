<?php

namespace App\Http\Controllers;

use App\Exports\RegisteredTeams;
use Illuminate\Http\Request;
use App\Models\Team;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{

    public function index()
    {
        $teams = Team::all();

        $rc_robo_racing = $teams->where('event_name', '=', 'Rc Robo Racing')->count();

        $drone_racing = $teams->where('event_name', '=', 'Drone Racing')->count();

        $robo_war = $teams->where('event_name', '=', 'Robo war')->count();

        $hardware_assembling = $teams->where('event_name', '=', 'Hardware Assembling')->count();

        $style_soldering = $teams->where('event_name', '=', 'Style Soldering')->count();

        $line_follower = $teams->where('event_name', '=', 'Robo line follower')->count();

        $paper_prsentation = $teams->where('event_name', '=', 'Technical Paper Presentaion')->count();

        $robo_soccer = $teams->where('event_name', '=', 'Robo Soccer')->count();

        $printing_workshop = $teams->where('event_name', '=', '3d-printing workshop')->count();

        $presentees = $teams->where('attendance', '=', 1)->count();

        $absentees = $teams->where('attendance', '=', 0)->count();
        return view('dashboard.index',
            compact(
                'teams',
                'rc_robo_racing',
                'drone_racing',
                'robo_war',
                'hardware_assembling',
                'style_soldering',
                'line_follower',
                'paper_prsentation',
                'robo_soccer',
                'printing_workshop',
                'presentees', 'absentees'
            ));
    }

    public function change_status(Request $request, $reg_id)
    {

        // dd($reg_id);
        $team = Team::where('reg_id', '=', $reg_id)->first();
        
        // dd($team);
        $attendance = $request->attendance;
        // dd($attendance);
        $team->update([
            'attendance' => $attendance
        ]);

        return redirect(route('dashboard'));
    }

    public function export()
    {
        return Excel::download(new RegisteredTeams(), 'teams.xlsx');
    }
}
