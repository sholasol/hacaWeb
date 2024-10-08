<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docs = Document::latest()->paginate(10);
        return view('documents.index', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create');
    }

    public function create_news()
    {
        return view('documents.createnews');
    }

    public function newsletter()
    {
        $news = Document::where('type', 'news')
        ->latest()->paginate(16);
        return view('documents.newsletter', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'date' => ['required', 'string'],
            'description' => ['required', 'string'],
            'doc' => ['required'],
        ]);

        if ($request->hasFile('doc')) {
            
            $doc = $request->file('doc');
            $docName = time() . '_' . $doc->getClientOriginalName();
            $docPath = $doc->storeAs('docs', $docName);
        }else{
            $docPath='';
        }

        $docm = Document::create([
            'title' => $request->title,
            'date' => $request->date,
            'type' => 'document',
            'description' => $request->description,
            'doc' => $docPath,
        ]);

        if($docm){
            sweetalert()->success('Document created successfully');
            return redirect('/documents');
        }else{
            sweetalert()->error('Oops! something went wrong');
            return redirect('create_document');
        }
    }
    public function createNews(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'date' => ['required', 'string'],
            'description' => ['required', 'string'],
            'doc' => ['required'],
        ]);

        if ($request->hasFile('doc')) {
            
            $doc = $request->file('doc');
            $docName = time() . '_' . $doc->getClientOriginalName();
            $docPath = $doc->storeAs('docs', $docName);
        }else{
            $docPath='';
        }

        $docm = Document::create([
            'title' => $request->title,
            'date' => $request->date,
            'type' => 'news',
            'description' => $request->description,
            'doc' => $docPath,
        ]);

        if($docm){
            sweetalert()->success('Newsletter created successfully');
            return redirect('/newsletter');
        }else{
            sweetalert()->error('Oops! something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
