<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomodation;
use Illuminate\Support\Facades\Auth;

class AccomodationController extends Controller
{
    public function showacco()
    {
        return view('accomodation.show');
    }

    public function create()
    {
        return view('accomodation.create');
    }

    public function createPost()
    {
        $userId = Auth::id();
        $existingReservation = Accomodation::where('user_id', $userId)->first();
        if ($existingReservation) {
            // User already has a reservation, so return an error message or redirect
            return redirect()->route('create')->withErrors(['error: Te veel reserveringen', 'Je hebt al een reservering gemaakt']);
        }
        $rules = [
            'presence' => ['required'],
            'stay_over' => ['required'],
            'accomodation_type' => ['required_if:stay_over,1'],
            'accomodation_length' => ['required_if:stay_over,1', 'integer', 'max:15'],
            'accomodation_width' => ['required_if:stay_over,1', 'integer','max:15'],
            'dinner_sat' => ['nullable'],
            'brunch_sun' => ['nullable'],
            'dinner_sun' => ['nullable'],
        ];
        
        if (request()->presence != 0) {
            // If presence is not 0, then make all fields required
            $messages = [
                'presence.required' => 'Je hebt je aanwezigheid niet aangegeven!',
                'stay_over.required' => 'Je hebt niet aangegeven of je blijft slapen!',
                'accomodation_type.required_if' => 'Je moet een type verblijf aangeven als je blijft slapen',
                'accomodation_length.required_if' => 'Je moet een lengte en breedte aangeven van je verblijf als je blijft slapen',
                'accomodation_width.required_if' => 'Je moet een lengte en breedte aangeven van je verblijf als je blijft slapen',
            ];
        } else {
            // If presence is 0, then remove the required rules for all fields except presence
            unset($rules['stay_over']);
            unset($rules['accomodation_type']);
            unset($rules['accomodation_length']);
            unset($rules['accomodation_width']);
            unset($rules['number_of_guests_weekend']);
            unset($rules['number_of_guest_sat']);
            unset($rules['number_of_guest_sun']);
        
            // Also remove the error messages for those fields
            $messages = [
                'presence.required' => 'Je hebt je aanwezigheid niet aangegeven!',
            ];
        }
        
        $data = request()->validate($rules, $messages);
        if($data['presence'] == 0)
        {
            $data['stay_over'] = 0;
            $data['dinner_sat'] = 0;
            $data['brunch_sun'] = 0;
            $data['dinner_sun'] = 0;
        }

        if(request()->presence == 1)
        {
            if((empty(request()->number_of_guests_weekend) and empty(request()->number_of_guest_sat) and empty(request()->number_of_guest_sun)))
            {
                return redirect()->back()->withErrors('Vul een aantal personen in om mee te nemen en op welke dag(en)');
            }
    
            if(request()->number_of_guests_weekend <= 0  or request()->number_of_guests_weekend >= 50)
            {
                return redirect()->back()->withErrors('Voer een geldig aantal personen in');
            }
            if(request()->number_of_guest_sat <= 0 or request()->number_of_guest_sat >= 50)
            {
                return redirect()->back()->withErrors('Voer een geldig aantal personen in');
            }
            if(request()->number_of_guest_sun <= 0 or request()->number_of_guest_sun >= 50)
            {
                return redirect()->back()->withErrors('Voer een geldig aantal personen in');
            }
        }
        

            Auth::check();
            $data['user_id'] = Auth::user()->id;
            $accomodation = Accomodation::create($data);
            
            return redirect()->route('showacco');
    }

    public function edit($id)
    {
        $acc = Auth::user()->accomodation()->findOrFail($id);
        return view('accomodation.edit', 
        ['accomodation' => $acc]);
    }

    public function update($id)
    {
        $accomodation = Auth::user()->accomodation()->findOrFail($id);
        $rules = [
            'presence' => ['required'],
            'stay_over' => ['required'],
            'accomodation_type' => ['required_if:stay_over,1'],
            'accomodation_length' => ['required_if:stay_over,1', 'integer', 'max:15'],
            'accomodation_width' => ['required_if:stay_over,1', 'integer', 'max:15'],
            'number_of_guests_weekend' => [],
            'number_of_guest_sat' => [],
            'number_of_guest_sun' => [],
            'dinner_sat' => ['nullable'],
            'brunch_sun' => ['nullable'],
            'dinner_sun' => ['nullable'],
        ];
        
        if (request()->presence != 0) {
            // If presence is not 0, then make all fields required
            $messages = [
                'presence.required' => 'Je hebt je aanwezigheid niet aangegeven!',
                'stay_over.required' => 'Je hebt niet aangegeven of je blijft slapen!',
                'accomodation_type.required_if' => 'Je moet een type verblijf aangeven als je blijft slapen',
                'accomodation_length.required_if' => 'Je moet een lengte en breedte aangeven van je verblijf als je blijft slapen',
                'accomodation_width.required_if' => 'Je moet een lengte en breedte aangeven van je verblijf als je blijft slapen',
            ];
        } else {
            // If presence is 0, then remove the required rules for all fields except presence
            unset($rules['stay_over']);
            unset($rules['accomodation_type']);
            unset($rules['accomodation_length']);
            unset($rules['accomodation_width']);
            unset($rules['number_of_guests_weekend']);
            unset($rules['number_of_guest_sat']);
            unset($rules['number_of_guest_sun']);
        
            // Also remove the error messages for those fields
            $messages = [
                'presence.required' => 'Je hebt je aanwezigheid niet aangegeven!',
            ];
        }
        
        $data = request()->validate($rules, $messages);
        if($data['presence'] == 0)
        {
            $data['stay_over'] = 0;
            $data['accomodation_type'] = null;
            $data['accomodation_length'] = null;
            $data['accomodation_width'] = null;
            $data['number_of_guests_weekend'] = null;
            $data['number_of_guest_sat'] = null;
            $data['number_of_guest_sun'] = null;
            $data['dinner_sat'] = 0;
            $data['brunch_sun'] = 0;
            $data['dinner_sun'] = 0;
        }

        if(request()->presence == 1)
        {
            if((empty(request()->number_of_guests_weekend) and empty(request()->number_of_guest_sat) and empty(request()->number_of_guest_sun)))
            {
                return redirect()->back()->withErrors('Vul een aantal personen in om mee te nemen en op welke dag(en)');
            }
    
            if((request()->number_of_guests_weekend <= 0  or request()->number_of_guests_weekend >= 50) and isset(request()->number_of_guests_weekend))
            {
                return redirect()->back()->withErrors('Voer een geldig aantal personen in 1');
            }
            if((request()->number_of_guest_sat <= 0 or request()->number_of_guest_sat >= 50) and isset(request()->number_of_guest_sat))
            {
                return redirect()->back()->withErrors('Voer een geldig aantal personen in 2');
            }
            if((request()->number_of_guest_sun <= 0 or request()->number_of_guest_sun >= 50)and isset(request()->number_of_guest_sun))
            {
                return redirect()->back()->withErrors('Voer een geldig aantal personen in 3');
            }
        }
        

        


        if(isset($data['number_of_guests_weekend']) && $data['number_of_guests_weekend'] >= 1)
        {
            $data['number_of_guest_sat'] = null;
            $data['number_of_guest_sun'] = null;
        }
        else if(isset($data['number_of_guest_sat']) && $data['number_of_guest_sat'] >= 1)
        {
            $data['number_of_guests_weekend'] = null;
            $data['number_of_guest_sun'] = null;
        }
        else if(isset($data['number_of_guest_sun']) && $data['number_of_guest_sun'] >= 1)
        {
            $data['number_of_guests_weekend'] = null;
            $data['number_of_guest_sat'] = null;
        }
        
        $accomodation->update($data);
        return redirect()->route('showacco');        
    }
}
