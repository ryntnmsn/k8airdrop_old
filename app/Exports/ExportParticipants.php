<?php

namespace App\Exports;

use App\Models\Participant;
use App\Models\Question;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use Maatwebsite\Excel\Concerns\FromCollection;

class ExportParticipants implements FromView
{

    use Exportable;

    protected $url_id;

    public function __construct($url_id = null) {
        $this->url_id = $url_id;
    }

    public function view() : View {

        $url_id = $this->url_id;
        
        $question = Question::where('promo_url_id', $url_id);
        
        $participantsData = Participant::with('choices')->where('promo_url_id', $url_id)->get();
        
        return view('admin.promo.participant.exports.participants-export', [
            'participants' => $participantsData,
            'questions' => $question->get()
        ]);
    }
}