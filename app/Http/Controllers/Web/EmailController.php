<?php

namespace Email\Http\Controllers\Web;

use Email\Http\Requests\EmailRequest;
use Email\Mail\EmailMaster;
use Email\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

/**
 * Class EmailController
 * @package Email\Http\Controllers\Web
 */
class EmailController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('web.emails.index');
    }

    /**
     * @param EmailRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EmailRequest $request)
    {
        $emailMaster = new EmailMaster(
            $request->sender,
            $request->name,
            $request->message,
            $request->cell
        );

        Mail::send($emailMaster);

        return redirect()->route('web.index')
            ->with(['color' => 'success', 'message' => 'E-mail enviado com sucesso!']);
    }
}
