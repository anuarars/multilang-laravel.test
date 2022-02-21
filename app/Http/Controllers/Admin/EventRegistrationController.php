<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventRegistration;
use App\Models\Event;
use App\Services\MediaService;

class EventRegistrationController extends Controller
{
    public function index(){
        $regs = EventRegistration::paginate(15);
        return view('admin.event-regs.index', compact('regs'));
    }


    public function indexSelfDeclined(Request $request)
    {
        $regs = EventRegistration::with(['event' => function ($q) use ($request){
            $q->where('events.id', '=', $request->id);
        }])->where('user_declined', '=', 1)->latest();

        $regs = $this->getFiltered($regs, $request)->paginate(20);

        return view('admin.event-regs.index', compact('regs'));
    }

    public function indexAdminDeclined(Request $request)
    {
        $regs = EventRegistration::with(['event' => function ($q) use ($request){
            $q->where('events.id', '=', $request->id);
        }])->where('confirmed', '=', 0)->latest();

        $regs = $this->getFiltered($regs, $request)->paginate(20);

        return view('admin.event-regs.index', compact('regs'));
    }

    /**
     * @param Builder $regs
     * @param Request $request
     * @return Builder
     */
    protected function getFiltered($regs, $request)
    {
        $filter = $request->only('name', 'phone', 'email', 'confirmed');

        if (isset($filter['name'])) {
            $regs = $regs->where(function ($query) use ($filter) {
                $query->where('name', 'like', '%'.$filter['name'].'%')
                    ->orWhere('surname', 'like', '%'.$filter['name'].'%');
            });
        }

        if (isset($filter['phone'])) {
            $regs = $regs->where('phone', 'like', '%'.$filter['phone'].'%');
        }

        if (isset($filter['email'])) {
            $regs = $regs->where('email', 'like', '%'.$filter['email'].'%');
        }

        if (isset($filter['surname'])) {
            $regs = $regs->where('surname', 'like', '%'.$filter['surname'].'%');
        }

        if (isset($filter['position'])) {
            $regs = $regs->where('position', 'like', '%'.$filter['position'].'%');
        }

        if (isset($filter['payed'])) {
            $payed = 1;
            if ($filter['payed'] == 'Нет') {
                $payed = 0;
            }
            $regs = $regs->where('payed', '=', $payed);
        }

        if (isset($filter['confirmed'])) {
            if ($filter['confirmed'] == 'null') {
                $regs = $regs->whereNull('confirmed');
            } else {
                $regs = $regs->where('confirmed', $filter['confirmed']);
            }
        }

        return $regs;
    }

    public function create(){
        $item = new EventRegistration();
        $events = Event::all()->pluck('title');
        return view('admin.event-regs.create', compact( 'item', 'events'));
    }

    public function store(Request $request, MediaService $mediaService){
        $all = $request->all();

        if($request->file){
            $file = $mediaService->saveFile($request, 'file', 'event-regs');
            $all['file'] = $file;
        }

        EventRegistration::create($all);

        return redirect()->back()
        ->with('success', 'Создано');
    }

    public function edit($id){
        $item = EventRegistration::find($id);
        $events = Event::all()->pluck('title');
        return view('admin.event-regs.edit', compact('item', 'events'));
    }

    public function update(Request $request, $id, MediaService $mediaService){
        $all = $request->all();

        if($request->file){
            $file = $mediaService->saveFile($request, 'file', 'event-regs');
            $all['file'] = $file;
        }

        $event = EventRegistration::find($id);
        $event->update($all);

        return redirect()->back()
        ->with('success', 'Изменено');
    }

    public function destroy($id){
        EventRegistration::find($id)->delete();

        return redirect()->route('admin.event-regs.index')
            ->with('success', 'Удалено');
    }
}
