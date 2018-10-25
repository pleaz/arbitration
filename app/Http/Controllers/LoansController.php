<?php
/**
 * Created by PhpStorm.
 * User: pleaz
 * Date: 04/10/2017
 * Time: 12:59
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Cases;
use App\LoanType;
use App\LenderType;
use App\ObligationType;
use App\Loan;
use App\Obligation;


class LoansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function loans($id)
    {
        $user = Cases::find($id);
        $loans = $user->obligation;

        foreach ($user->loan as $loan){
            $loans->push($loan);
        }

        return view('loans.main', compact('loans', 'user'));
    }

    public function loanAddForm(Request $request)
    {
        $loan_type_src = LoanType::all();
        $loan_types=[];
        foreach ($loan_type_src as $loan_type) {
            $loan_types[$loan_type->id] = $loan_type->name;
        }

        $lender_types_src = LenderType::all();
        $lender_types=[];
        foreach ($lender_types_src as $lender_type) {
            $lender_types[$lender_type->id] = $lender_type->name;
        }

        $cases = $request->id;

        return Response::json(['success' => true, 'html' => view('loans.modal-loan.add', compact('loan_types', 'lender_types', 'cases'))->render()]);
    }

    public function obligationAddForm(Request $request)
    {
        $obligation_type_src = ObligationType::all();
        $obligation_types=[];
        foreach ($obligation_type_src as $obligation_type) {
            $obligation_types[$obligation_type->id] = $obligation_type->name;
        }

        $cases = $request->id;

        return Response::json(['success' => true, 'html' => view('loans.modal-obligation.add', compact('obligation_types', 'cases'))->render()]);
    }

    public function loanAdd(Request $request)
    {
        $case = Cases::find($request->case_id);
        $loan_type = LoanType::find($request->loan_type_id);
        $lender_type = LenderType::find($request->lender_type_id);

        $loan = new Loan([
            'kind' => $request->kind,
            'contract' => $request->contract,
            'arrears' => $request->arrears,
            'debt' => $request->debt,
            'fine' => $request->fine,
            'account' => $request->account
        ]);

        $loan->cases()->associate($case);
        $loan->loan_type()->associate($loan_type);
        $loan->lender_type()->associate($lender_type);

        $loan->save();

        return redirect()->route('loans', ['id' => $request->case_id]);
    }

    public function obligationAdd(Request $request)
    {
        $case = Cases::find($request->case_id);
        $obligation_type = ObligationType::find($request->obligation_type_id);

        $obligation = new Obligation([
            'kind' => $request->kind,
            'arrears' => $request->arrears,
            'fine' => $request->fine
        ]);

        $obligation->cases()->associate($case);
        $obligation->obligation_type()->associate($obligation_type);

        $obligation->save();

        return redirect()->route('loans', ['id' => $request->case_id]);
    }

    public function loanEditForm(Request $request)
    {
        $loan_type_src = LoanType::all();
        $loan_types=[];
        foreach ($loan_type_src as $loan_type) {
            $loan_types[$loan_type->id] = $loan_type->name;
        }

        $lender_types_src = LenderType::all();
        $lender_types=[];
        foreach ($lender_types_src as $lender_type) {
            $lender_types[$lender_type->id] = $lender_type->name;
        }

        $loan = Loan::find($request->id);

        return Response::json(['success' => true, 'html' => view('loans.modal-loan.edit', compact('loan_types', 'lender_types', 'loan'))->render()]);
    }

    public function obligationEditForm(Request $request)
    {
        $obligation_type_src = ObligationType::all();
        $obligation_types=[];
        foreach ($obligation_type_src as $obligation_type) {
            $obligation_types[$obligation_type->id] = $obligation_type->name;
        }

        $obligation = Obligation::find($request->id);

        return Response::json(['success' => true, 'html' => view('loans.modal-obligation.edit', compact('obligation_types', 'obligation'))->render()]);
    }

    public function loanEdit(Request $request)
    {
        $loan = Loan::find($request->loan_id);
        $loan_type = LoanType::find($request->loan_type_id);
        $lender_type = LenderType::find($request->lender_type_id);

        $loan->kind = $request->kind;
        $loan->contract = $request->contract;
        $loan->arrears = $request->arrears;
        $loan->debt = $request->debt;
        $loan->fine = $request->fine;
        $loan->account = $request->account;
        $loan->loan_type()->associate($loan_type);
        $loan->lender_type()->associate($lender_type);

        $loan->update();

        return redirect()->route('loans', ['id' => $loan->case_id]);
    }

    public function obligationEdit(Request $request)
    {
        $obligation = Obligation::find($request->obligation_id);
        $obligation_type = ObligationType::find($request->obligation_type_id);

        $obligation->kind = $request->kind;
        $obligation->arrears = $request->arrears;
        $obligation->fine = $request->fine;
        $obligation->obligation_type()->associate($obligation_type);

        $obligation->update();

        return redirect()->route('loans', ['id' => $obligation->case_id]);
    }

    public function loanDeleteForm(Request $request)
    {
        $loan = $request->id;
        return Response::json(['success' => true, 'html' => view('loans.modal-loan.delete', compact('loan'))->render()]);
    }

    public function obligationDeleteForm(Request $request)
    {
        $obligation = $request->id;
        return Response::json(['success' => true, 'html' => view('loans.modal-obligation.delete', compact('obligation'))->render()]);
    }

    public function loanDelete(Request $request)
    {
        $loan = Loan::find($request->loan_id);
        $case_id = $loan->case_id;
        $loan->delete();

        return redirect()->route('loans', ['id' => $case_id]);
    }

    public function obligationDelete(Request $request)
    {
        $obligation = Obligation::find($request->obligation_id);
        $case_id = $obligation->case_id;
        $obligation->delete();

        return redirect()->route('loans', ['id' => $case_id]);
    }
}
