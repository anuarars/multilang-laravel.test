<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    /**
     * @param $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($type)
    {
        $item = Email::where('type', '=', $type)->first();

        return view('admin.emails.edit', compact('item'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $all = $request->all();

        $email = Email::find($id);
        $email->update($all);

        return redirect()->back()
            ->with('success', 'Сохранено');
    }
}
