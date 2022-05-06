<?php

namespace App\Exports;

use App\Models\Team;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegisteredTeams implements FromCollection, WithTitle, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Team::select(
            'reg_id',
            'event_name',
            'created_at',
            'team_lead',
            'team_lead_email',
            'team_lead_phone',
            'team_lead_year',
            'team_lead_department',
            'team_lead_college',
            'member_1',
            'member_1_phone',
            'member_1_year',
            'member_1_department',
            'member_1_college',
            'member_2',
            'member_2_phone',
            'member_2_year',
            'member_2_department',
            'member_2_college',
            'attendance'
        )->get();
    }

    public function map($teams): array
    {
        return [
            $teams->reg_id,
            $teams->event_name,
            $teams->created_at->format('d M Y'),
            $teams->team_lead,
            $teams->team_lead_email,
            $teams->team_lead_phone,
            $teams->team_lead_year,
            $teams->team_lead_department,
            $teams->team_lead_college,
            $teams->member_1,
            $teams->member_1_phone,
            $teams->member_1_year,
            $teams->member_1_department,
            $teams->member_1_college,
            $teams->member_2,
            $teams->member_2_phone,
            $teams->member_2_year,
            $teams->member_2_department,
            $teams->member_2_college,
            $teams->attendance,
        ];
    }

    public function headings(): array
    {
        return [
            'Reg ID',
            'Event Name',
            'Registered On',
            'Team Leader name',
            'Team Leader Email',
            'Team Leader Phone',
            'Team Leader Year',
            'Team Leader Department',
            'Team Leader College',
            'Member 1',
            'Member 1 Phone',
            'Member 1 Year',
            'Member 1 Department',
            'Member 1 College',
            'Member 2',
            'Member 2 Phone',
            'Member 2 Year',
            'Member 2 Department',
            'Member 2 College',
            'Attendance',
        ];
    }

    public function title(): string
    {
        return 'Registered Teams';
    }
}
