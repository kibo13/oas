<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Street;
use App\Models\Brief;
use App\Models\Bid;
use PhpOffice\PhpWord\TemplateProcessor;

class ReportController extends Controller
{
    public function index()
    {
        $reports = config('constants.reports');
        return view('pages.reports.index', compact('reports'));
    }

    // report for work of day 
    public function work(Request $request)
    {
        // date 
        $from = $request->repo1_from;

        // bids 
        $bids = Bid::get();

        // foreach ($bids as $bid) {
            
        // }
        
        // another info 
        $garb = $request['garbage'];
        $fire = $request['fire'];
        $city = $request['city'];
        $auto = $request['auto'];

        $templateProcessor = new TemplateProcessor('reports/work.docx');
        $templateProcessor->setValue('date', getDMY($from) . 'г.');
        $templateProcessor->setValue('garbage',  $garb);
        $templateProcessor->setValue('fire',     $fire);
        $templateProcessor->setValue('city',     $city);
        $templateProcessor->setValue('auto',     $auto);

        $fileName = 'Сведения по работ ГУПЖХ на ' . getDMY($from);
        $templateProcessor->saveAs($fileName . '.docx');

        return response()
            ->download($fileName . '.docx')
            ->deleteFileAfterSend(true);
    }

    // report for brief
    public function brief(Request $request)
    {
        $home_hw  = null;
        $home_cw  = null;
        $home_h   = null;
        $crane_hw = null;
        $crane_cw = null;
        $crane_h  = null;

        $from = $request->repo2_from;

        $waters = waters()->where('date_log', '<=', $from);

        foreach ($waters as $water) {
            $water->home_hw == 1
                ? $home_hw .= $water->branch . "<w:br />" . $water->street . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->home_cw == 1
                ? $home_cw .= $water->branch . "<w:br />" . $water->street . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->home_h == 1
                ? $home_h .= $water->branch . "<w:br />" . $water->street . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->crane_hw == 1
                ? $crane_hw .= $water->branch . "<w:br />" . $water->street . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->crane_cw == 1
                ? $crane_cw .= $water->branch . "<w:br />" . $water->street . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->crane_h == 1
                ? $crane_h .= $water->branch . "<w:br />" . $water->street . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;
        }

        if (Brief::where('date_brief', '=', $from)->exists()) {
            $brief = Brief::where('date_brief', '=', $from)->first();
        } else {
            return redirect()
                ->route('report.index')
                ->with('warning', 'В БД отсутствуют данные по параметрам воды за выбранные сутки');
        }

        $templateProcessor = new TemplateProcessor('reports/brief.docx');
        $templateProcessor->setValue('date', getDMY($from) . 'г.');

        // disconnected from water
        $templateProcessor->setValue('home_hw',  $home_hw);
        $templateProcessor->setValue('home_cw',  $home_cw);
        $templateProcessor->setValue('home_h',   $home_h);
        $templateProcessor->setValue('crane_hw', $crane_hw);
        $templateProcessor->setValue('crane_cw', $crane_cw);
        $templateProcessor->setValue('crane_h',  $crane_h);

        // water parameters 
        $templateProcessor->setValue('temp',     $brief->temp);
        $templateProcessor->setValue('pressure', $brief->pressure);
        $templateProcessor->setValue('hw_tst',   $brief->hw_tst);
        $templateProcessor->setValue('hw_pst',   $brief->hw_pst);
        $templateProcessor->setValue('hw_tbk',   $brief->hw_tbk);
        $templateProcessor->setValue('hw_pbk',   $brief->hw_pbk);
        $templateProcessor->setValue('cw_r',     $brief->cw_r);
        $templateProcessor->setValue('cw_ot',    $brief->cw_ot);
        $templateProcessor->setValue('cw_tf',    $brief->cw_tf);
        $templateProcessor->setValue('cw_fs',    $brief->cw_fs);
        $templateProcessor->setValue('cw_s',     $brief->cw_s);

        $fileName = 'Сведения по водоснабжению объектов ГУПЖХ на ' . getDMY($from);
        $templateProcessor->saveAs($fileName . '.docx');

        return response()
            ->download($fileName . '.docx')
            ->deleteFileAfterSend(true);
    }

    // report for job 
    public function job(Job $job)
    {
        $addresses = null;
        $streets = Street::get();

        foreach ($streets as $street) {
            if ($job->addresses->where('street_id', $street->id)->count()) {
                $addresses .= $street->name;
            }

            foreach ($job->addresses as $address) {
                if ($street->id == $address->street->id) {
                    $addresses .= ' д.' . $address->num_home . ',';
                }
            }

            if ($job->addresses->where('street_id', $street->id)->count()) {
                $addresses .= "<w:br />";
            }
        }

        $templateProcessor = new TemplateProcessor('reports/job.docx');
        $templateProcessor->setValue('id',          $job->id);
        $templateProcessor->setValue('build',       $job->organization->name);
        $templateProcessor->setValue('type_job',    $job->type_job);
        $templateProcessor->setValue('type_off',    $job->type_off);
        $templateProcessor->setValue('addresses',   $addresses);
        $templateProcessor->setValue('date_on',     $job->date_on);
        $templateProcessor->setValue('time_on',     $job->time_on);
        $templateProcessor->setValue('date_off',    $job->date_off);
        $templateProcessor->setValue('time_off',    $job->time_off);
        $templateProcessor->setValue('desc',        $job->desc);
        $fileName = 'Сведения по работе №' . $job->id . ' от ' . $job->date_on;
        $templateProcessor->saveAs($fileName . '.docx');

        return response()
            ->download($fileName . '.docx')
            ->deleteFileAfterSend(true);
    }
}
