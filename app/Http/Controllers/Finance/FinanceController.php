<?php

namespace App\Http\Controllers\Finance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Finance;
use App\Models\Parameter;
use App\Models\Church;
use DB;

class FinanceController extends Controller
{

    public function index()
    {
        $month  = date('m');
        $year   = date('Y');

        $years = Finance::where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                ->select(DB::raw('YEAR(movimentationDate) year'))
                                ->groupBy('year')
                                ->get();

        $movimentations = Finance::whereYear('movimentationDate', $year)
                                            ->whereMonth('movimentationDate', $month)
                                            ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                            ->join('parameters', 'parameters.id', '=', 'finances.idAction_fk')
                                            ->select('finances.*', 'parameters.value as action')
                                            ->get();

        $total_entries = Finance::where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                        ->where('type', '=', 'I')->sum('value');

        $total_outputs = Finance::where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                        ->where('type', '=', 'O')->sum('value');

        $total_box = $total_entries - $total_outputs;
        
        $total_month_entries = Finance::whereYear('movimentationDate', $year)
                                                ->whereMonth('movimentationDate', $month)
                                                ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                                ->where('type', '=', 'I')
                                                ->sum('value');

        $total_month_outputs = Finance::whereYear('movimentationDate', $year)
                                                ->whereMonth('movimentationDate', $month)
                                                ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                                ->where('type', '=', 'O')
                                                ->sum('value');

        $total_month_box = $total_month_entries - $total_month_outputs;

        return view('church.finance.home', compact('movimentations', 'total_box', 'total_month_entries', 'total_month_outputs', 'total_month_box', 'month', 'year', 'years'));
    }

    public function index_month(Request $request)
    {
        if (isset($request->month) && isset($request->year)) {
            $month  = $request->month;
            $year   = $request->year;
        }else{
            $month  = date('m');
            $year   = date('Y');
        }

        $date_month = $month;

        $years = Finance::where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                ->select(DB::raw('YEAR(movimentationDate) year'))
                                ->groupBy('year')
                                ->get();

        $movimentations = Finance::whereYear('movimentationDate', $year)
                                            ->whereMonth('movimentationDate', $month)
                                            ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                            ->join('parameters', 'parameters.id', '=', 'finances.idAction_fk')
                                            ->select('finances.*', 'parameters.value as action')
                                            ->get();

        $total_entries = Finance::where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                        ->where('type', '=', 'I')
                                        ->sum('value');

        $total_outputs = Finance::where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                        ->where('type', '=', 'O')
                                        ->sum('value');

        $total_box = $total_entries - $total_outputs;
        
        $total_month_entries = Finance::whereYear('movimentationDate', $year)
                                                ->whereMonth('movimentationDate', $month)
                                                ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                                ->where('type', '=', 'I')
                                                ->sum('value');

        $total_month_outputs = Finance::whereYear('movimentationDate', $year)
                                                ->whereMonth('movimentationDate', $month)
                                                ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                                ->where('type', '=', 'O')
                                                ->sum('value');

        $total_month_box = $total_month_entries - $total_month_outputs;

        return view('church.finance.home', compact('movimentations', 'total_box', 'total_month_entries', 'total_month_outputs', 'total_month_box', 'month', 'year', 'years'));
    }


    public function create()
    {
        $actions = Parameter::where('operation', '=', 'finances')->where('attribute', '=', 'action')->get();

        return view('church.finance.create', compact('actions'));
    }


    public function store(Request $request)
    {
        
        $request['value'] = str_replace('.', '', $request->value);
        $request['value'] = str_replace(',', '.', $request['value']);
        
        $request['idChurch_fk'] = auth()->user()->idChurch_fk;
        
        $request['idUser_fk'] = auth()->user()->id;

        if ($request->type == 'O') {
            $request['idAction_fk'] = 4;
        }
        
        $result = Finance::create($request->all());

        if(!$result)
            return redirect()
                        ->back()
                        ->with('error', 'Erro ao cadastrar movimentação!');
        else
            return redirect()
                        ->route('finance')
                        ->with('success', 'Movimentação cadastrada com sucesso!'); 
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }




    //PDF

    public function balance_pdf($year, $month)
    {
        $inputs         = Finance::join('parameters', 'parameters.id', '=', 'finances.idAction_fk')
                                            ->select('finances.*', 'parameters.value as action', DB::raw('SUM(finances.value) as total'))
                                            ->whereYear('finances.movimentationDate', $year)
                                            ->whereMonth('finances.movimentationDate', $month)
                                            ->where('finances.idChurch_fk', '=',auth()->user()->idChurch_fk)
                                            ->where('finances.type', '=', 'I')
                                            ->groupBy('finances.idAction_fk')
                                            ->get();

        $outputs        = Finance::whereYear('movimentationDate', $year)
                                            ->whereMonth('movimentationDate', $month)
                                            ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                            ->where('type', '=', 'O')
                                            ->get();

        $inputs_sum     = Finance::whereYear('movimentationDate', $year)
                                            ->whereMonth('movimentationDate', $month)
                                            ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                            ->where('type', '=', 'I')
                                            ->sum('value');  

        $outputs_sum    = Finance::whereYear('movimentationDate', $year)
                                            ->whereMonth('movimentationDate', $month)
                                            ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                            ->where('type', '=', 'O')
                                            ->sum('value');

        //balanço do mes anterior
        $anomontado = $year.'-'.$month.'-01';

        $inputs_sum_before     = Finance::where('movimentationDate', '<', $anomontado)
                                            ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                            ->where('type', '=', 'I')
                                            ->sum('value');  

        $outputs_sum_before    = Finance::where('movimentationDate', '<', $anomontado)
                                            ->where('idChurch_fk', '=',auth()->user()->idChurch_fk)
                                            ->where('type', '=', 'O')
                                            ->sum('value');
        
        $before_months     = $inputs_sum_before - $outputs_sum_before;
        //balanço do mes anterior   
        
        $inputs_sum = $inputs_sum + $before_months;

        $next_month     = $inputs_sum - $outputs_sum;

        $church = Church::find(auth()->user()->idChurch_fk);

        return \PDF::loadView('church.finance.pdf.balance', compact('year', 'month', 'church', 'inputs', 'outputs', 'inputs_sum', 'outputs_sum', 'next_month', 'before_months'))->stream();
    }
}
