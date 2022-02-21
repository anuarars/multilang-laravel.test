<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LibraryRegistration;
use App\Models\LibraryTickets;

class LibraryRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return "test";
        $regs = LibraryRegistration::all();
        // $regs = $this->getFiltered($regs, $request)->paginate(2000);

        return view('admin.library-regs.index', compact('regs'));
    }

    public function confirm(Request $request, $id)
    {
        $event = LibraryRegistration::find($id);
        $ticket = LibraryTickets::where('ticket', '=', $event->ticket)->first();

        if (!$ticket) {
            return \Response::json(['error' => 'No ticket']);
        }

        $event->confirmed = $request->input('confirmed') === 'Да';
        $event->save();
        app()->setLocale($event->locale);

        if ($event->confirmed) {
            $data = [
                'name' => $event->name,
                'when' => date('d.m.Y', strtotime($event->date_visit)) . ' ' . date('H:m', strtotime($event->time_visit)) ,
            ];

            $template = Email::where('type', '=', 'library-confirm')->first();

            \Mail::send([], $data, function ($message) use ($ticket, $template, $data) {
                $message->to($ticket->email);
                $message->from(config('mail.from.library'));
                $message->subject(\Lang::get('messages.library_confirm'));
                $message->setBody(trans($template->parse($data)), 'text/html');
            });
        }

        return \Response::json(['confirmed' => $request->input('confirmed')]);
    }
}
