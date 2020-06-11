<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Street;
use PhpOffice\PhpWord\TemplateProcessor;

class ReportController extends Controller
{
    public function jobToReport(Job $job)
    {
        $addresses = null; 
        $streets = Street::get();

        foreach ($streets as $street) {
            if($job->addresses->where('street_id', $street->id)->count())
            {
                $addresses .= $street->name;
            }

            foreach ($job->addresses as $address) {
                if ($street->id == $address->street->id) {
                    $addresses .= ' д.'. $address->num_home.',';
                }
            }

            if ($job->addresses->where('street_id', $street->id)->count()) {
                $addresses .= "<w:br />";
            }
        }

        $templateProcessor = new TemplateProcessor('reports/job.docx');
        $templateProcessor->setValue('id', $job->id);
        $templateProcessor->setValue('build', $job->organization->name);
        $templateProcessor->setValue('type_job', $job->type_job);
        $templateProcessor->setValue('type_off', $job->type_off);
        $templateProcessor->setValue('addresses', $addresses);
        $templateProcessor->setValue('date_on', $job->date_on);
        $templateProcessor->setValue('time_on', $job->time_on);
        $templateProcessor->setValue('date_off', $job->date_off);
        $templateProcessor->setValue('time_off', $job->time_off);
        $templateProcessor->setValue('desc', $job->desc);
        $fileName = 'Сведения по работе №' . $job->id . ' от ' . $job->date_on; 
        $templateProcessor->saveAs($fileName . '.docx');

        return response()
            ->download($fileName . '.docx')
            ->deleteFileAfterSend(true);
    }
}
