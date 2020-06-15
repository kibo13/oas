<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Street;
use App\Models\Brief;
use App\Models\Type;
use App\Models\Defect;
use App\Models\Statement;

use PhpOffice\PhpWord\Element\AbstractContainer;
use PhpOffice\PhpWord\Element\Row;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\TemplateProcessor;

class ReportController extends Controller
{
    public function index()
    {
        $reports = config('constants.reports');
        return view('pages.reports.index', compact('reports'));
    }

    // report for crash 
    public function crash(Request $request)
    {
        // dates 
        $from = $request->repo3_from;
        $to   = $request->repo3_to;

        // tables
        $t_defect = new Table(array('borderSize' => 10));
        $t_defect->addRow();
        $t_defect->addCell(100)->addText('№', array('bold' => true));
        $t_defect->addCell(3000)->addText('Неисправности', array('bold' => true));
        $t_defect->addCell(1000)->addText('Всего', array('bold' => true));
        $t_defect->addCell(1000)->addText('ЖЭУ-1', array('bold' => true));
        $t_defect->addCell(1000)->addText('ЖЭУ-2', array('bold' => true));
        $t_defect->addCell(1000)->addText('ЖЭУ-3', array('bold' => true));
        $t_defect->addCell(1000)->addText('ЖЭУ-4', array('bold' => true));
        $t_defect->addCell(1000)->addText('ЖЭУ-5', array('bold' => true));

        $t_type = new Table(array('borderSize' => 10));
        $t_type->addRow();
        $t_type->addCell(100)->addText('');
        $t_type->addCell(3000)->addText('');
        $t_type->addCell(1000)->addText('');
        $t_type->addCell(1000)->addText('');
        $t_type->addCell(1000)->addText('');
        $t_type->addCell(1000)->addText('');
        $t_type->addCell(1000)->addText('');
        $t_type->addCell(1000)->addText('');

        // data 
        $defects    = Defect::get();
        $types      = Type::get();
        $statements = Statement::where('defect_id', '!=', null)->whereBetween('date_in', [$from, $to])->get();

        // counters 
        $num = 1;

        foreach ($defects as $defect) {

            $defect_total = $statements->where('defect_id', $defect->id)->count();
            $defect_zh1 = $statements->where('branch_id', 1)->where('defect_id', $defect->id)->count();
            $defect_zh2 = $statements->where('branch_id', 2)->where('defect_id', $defect->id)->count();
            $defect_zh3 = $statements->where('branch_id', 3)->where('defect_id', $defect->id)->count();
            $defect_zh4 = $statements->where('branch_id', 4)->where('defect_id', $defect->id)->count();
            $defect_zh5 = $statements->where('branch_id', 5)->where('defect_id', $defect->id)->count();

            if ($defect_total) {
                $t_defect->addRow();
                $t_defect->addCell(100)->addText($num++);
                $t_defect->addCell(3000)->addText($defect->desc);
                $t_defect->addCell(1000)->addText($defect_total, array('bold' => true));
                $t_defect->addCell(1000)->addText($defect_zh1);
                $t_defect->addCell(1000)->addText($defect_zh2);
                $t_defect->addCell(1000)->addText($defect_zh3);
                $t_defect->addCell(1000)->addText($defect_zh4);
                $t_defect->addCell(1000)->addText($defect_zh5);
            }

        }

        foreach ($types as $type) {

            $type_total = $statements->where('type_id', $type->id)->count();
            $type_zh1 = $statements->where('branch_id', 1)->where('type_id', $type->id)->count();
            $type_zh2 = $statements->where('branch_id', 2)->where('type_id', $type->id)->count();
            $type_zh3 = $statements->where('branch_id', 3)->where('type_id', $type->id)->count();
            $type_zh4 = $statements->where('branch_id', 4)->where('type_id', $type->id)->count();
            $type_zh5 = $statements->where('branch_id', 5)->where('type_id', $type->id)->count();

            if ($type_total) {
                $t_type->addRow();
                $t_type->addCell(100)->addText('');
                $t_type->addCell(3000)->addText($type->name, array('bold' => true));
                $t_type->addCell(1000)->addText($type_total, array('bold' => true));
                $t_type->addCell(1000)->addText($type_zh1);
                $t_type->addCell(1000)->addText($type_zh2);
                $t_type->addCell(1000)->addText($type_zh3);
                $t_type->addCell(1000)->addText($type_zh4);
                $t_type->addCell(1000)->addText($type_zh5);
            }
        }

        $templateProcessor = new TemplateProcessor('reports/crash.docx');
        $templateProcessor->setValue('date_from', getDMY($from) . 'г.');
        $templateProcessor->setValue('date_to',   getDMY($to) . 'г.');

        // tables
        $templateProcessor->setComplexBlock('t_defect', $t_defect);
        $templateProcessor->setComplexBlock('t_type',   $t_type);
       
        $fileName = 'Анализ зарегистрированных аварий с ' . getDMY($from) . 'г. по ' . getDMY($to) . 'г.';
        $templateProcessor->saveAs($fileName . '.docx');

        return response()
            ->download($fileName . '.docx')
            ->deleteFileAfterSend(true);
    }

    // report for work of day 
    public function work(Request $request)
    {
        // counters 
        $crane_hw = 0;
        $crane_cw = 0;
        $crane_h  = 0;

        $oas_elc = 0;
        $oas_san = 0;

        $zhe_elc = 0;
        $zhe_san = 0;

        $done_elc = 0;
        $done_san = 0;

        $num = 1;

        // date 
        $from = $request->repo1_from;

        // table of elc
        $t_elc = new Table(array('borderSize' => 10));
        $t_elc->addRow();
        $t_elc->addCell(100)->addText('№', array('bold' => true));
        $t_elc->addCell(1000)->addText('ЖЭУ', array('bold' => true));
        $t_elc->addCell(400)->addText('Время', array('bold' => true));
        $t_elc->addCell(2000)->addText('Адрес', array('bold' => true));
        $t_elc->addCell(3000)->addText('Характер неисправности', array('bold' => true));
        $t_elc->addCell(3000)->addText('Принятые меры', array('bold' => true));
        $t_elc->addCell(400)->addText('Время', array('bold' => true));

        // table of san
        $t_san = new Table(array('borderSize' => 10));
        $t_san->addRow();
        $t_san->addCell(100)->addText('№', array('bold' => true));
        $t_san->addCell(1000)->addText('ЖЭУ', array('bold' => true));
        $t_san->addCell(400)->addText('Время', array('bold' => true));
        $t_san->addCell(2000)->addText('Адрес', array('bold' => true));
        $t_san->addCell(3000)->addText('Характер неисправности', array('bold' => true));
        $t_san->addCell(3000)->addText('Принятые меры', array('bold' => true));
        $t_san->addCell(400)->addText('Время', array('bold' => true));

        // data 
        $statements = Statement::where('date_in', $from)->get();     

        foreach ($statements as $stat) {

            $stat->crane_hw == 1 ? $crane_hw++ : $crane_cw;
            $stat->crane_cw == 1 ? $crane_cw++ : $crane_cw;
            $stat->crane_h  == 1 ? $crane_h++  : $crane_h;

            // if zheu receive statements 
            if ($stat->plot != "ОАС") {

                // total statements dont 
                if ($stat->state != 2) {
                    $stat->type->id == 1 ? $zhe_elc++ : $zhe_san++;
                } 

                // total statements done 
                if ($stat->state == 2) {
                    $stat->type->id == 1 ? $done_elc++ : $done_san++;
                }
               
            }    

            if ($stat->plot == "ОАС") {
                $stat->type->id == 1 ? $oas_elc++ : $oas_san++;

                if ($stat->type->slug == "elc") {
                    $t_elc->addRow();
                    $t_elc->addCell(100)->addText($num++);
                    $t_elc->addCell(1000)->addText($stat->branch->name);
                    $t_elc->addCell(400)->addText(getHI($stat->time_in));
                    $t_elc->addCell(2000)->addText($stat->street->name . ' д.' . $stat->num_home . '-' . $stat->num_flat);
                    $t_elc->addCell(3000)->addText($stat->desc);
                    $t_elc->addCell(3000)->addText($stat->solution);
                    $t_elc->addCell(400)->addText(getHI($stat->time_off));
                }

                if ($stat->type->slug == "san") {
                    $t_san->addRow();
                    $t_san->addCell(100)->addText($num++);
                    $t_san->addCell(1000)->addText($stat->branch->name);
                    $t_san->addCell(400)->addText(getHI($stat->time_in));
                    $t_san->addCell(2000)->addText($stat->street->name . ' д.' . $stat->num_home . '-' . $stat->num_flat);
                    $t_san->addCell(3000)->addText($stat->desc);
                    $t_san->addCell(3000)->addText($stat->solution);
                    $t_san->addCell(400)->addText(getHI($stat->time_off));
                }
               
            } 

        }
         
        // another info 
        $garb = $request['garbage'];
        $fire = $request['fire'];
        $city = $request['city'];
        $auto = $request['auto'];

        $templateProcessor = new TemplateProcessor('reports/work.docx');
        $templateProcessor->setValue('date', getDMY($from) . 'г.');
                
        // 1 
        $templateProcessor->setValue('crane_hw',  $crane_hw);
        $templateProcessor->setValue('crane_cw',  $crane_cw);
        $templateProcessor->setValue('crane_h',   $crane_h);

        // 2
        // receive 
        $templateProcessor->setValue('zhe_total', $zhe_elc + $zhe_san);
        $templateProcessor->setValue('zhe_elc',   $zhe_elc);
        $templateProcessor->setValue('zhe_san',   $zhe_san);
        // complete
        $templateProcessor->setValue('done_total', $done_elc + $done_san);
        $templateProcessor->setValue('done_elc',   $done_elc);
        $templateProcessor->setValue('done_san',   $done_san);

        // 3 
        $templateProcessor->setValue('oas_total', $oas_elc + $oas_san);
        $templateProcessor->setValue('oas_elc',   $oas_elc);
        $templateProcessor->setValue('oas_san',   $oas_san);

        // 4 
        $templateProcessor->setValue('garbage',   $garb);
        // 5 
        $templateProcessor->setValue('fire',      $fire);
        // 6 
        $templateProcessor->setValue('city',      $city);
        // 7
        $templateProcessor->setValue('auto',      $auto);

        // tables
        $templateProcessor->setComplexBlock('t_elc', $t_elc);
        $templateProcessor->setComplexBlock('t_san', $t_san);

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
        $waters = Statement::where('date_off', '<=', $from)->get();

        foreach ($waters as $water) {
            $water->home_hw == 1
                ? $home_hw .= $water->branch->name . "<w:br />" . $water->street->name . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->home_cw == 1
                ? $home_cw .= $water->branch->name . "<w:br />" . $water->street->name . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->home_h == 1
                ? $home_h .= $water->branch->name . "<w:br />" . $water->street->name . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->crane_hw == 1
                ? $crane_hw .= $water->branch->name . "<w:br />" . $water->street->name . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->crane_cw == 1
                ? $crane_cw .= $water->branch->name . "<w:br />" . $water->street->name . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
                : null;

            $water->crane_h == 1
                ? $crane_h .= $water->branch->name . "<w:br />" . $water->street->name . ' д.' . $water->num_home . '-' . $water->num_flat . "<w:br />"
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
