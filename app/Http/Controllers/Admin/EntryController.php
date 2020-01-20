<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Services\EntryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\EntryStoreRequest;
use App\Http\Requests\EntryUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;


class EntryController extends Controller
{

    /** @var EntryService */
    protected $entry;

    /** @var Guard */
    protected $guard;

    /**
     * @param EntryService $entry
     * @param Guard $guard
     */ 
    public function __construct(EntryService $entry, Guard $guard)
    {
        $this->entry = $entry;
        $this->guard = $guard;
    }


    /**
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        //
        return view('admin.entry.create');
    }

    /**
     * @param EntryStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EntryStoreRequest $request)
    {
        $input = $request->only(['title', 'body']);
        $input['user_id'] = $this->guard->user()->id;
        $this->entry->addEntry($input);
        return redirect()->route('admin.entry.index');
    }


    /**
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $result = $this->entry
            ->getPage($request->get('page', 1), 20)
            ->setPath($request->getBasePath());
        return view('entry.index', ['page' => $result]);
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $attributes = [
            'entry' => $this->entry->getEntry($id),
            'comments' => $this->comment->getCommentsByEntry($id)
        ];
        return view('entry.show', $attributes);
    }
}


}
