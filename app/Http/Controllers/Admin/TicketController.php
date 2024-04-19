<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Ticket;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Notifications\CommentEmailNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
class TicketController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_tickets.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'content'       => 'required',
            'author_name'   => 'required',
            'author_email'  => 'required|email',
            'numero_emplado' => 'required|numeric|digits_between:1,20,numero_emplado',
        ]);
        $request->request->add([
            'category_id'   => 1,
            'status_id'     => 1,
            'priority_id'   => 1
        ]);
        $ticket = Ticket::create($request->all());
        foreach ($request->input('attachments', []) as $file) {
            $ticket->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
        }
        return redirect()->back()->withStatus('Su solicitud ha sido enviada, nos pondremos en contacto con usted. Puede ver el estado del ticket <a href="'.route('tickets.show', $ticket->id).'">here</a>');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        $ticket->load('comments');
        return view('admin.create_tickets.show', compact('ticket'));
    }
    public function storeComment(Request $request, Ticket $ticket)
    {
        $request->validate([
            'comment_text' => 'required'
        ]);
        $comment = $ticket->comments()->create([
            'author_name'   => $ticket->author_name,
            'author_email'  => $ticket->author_email,
            'comment_text'  => $request->comment_text
        ]);
        $ticket->sendCommentNotification($comment);
        return redirect()->back()->withStatus('Su comentario se ha añadido correctamente');
    }
    public function index()
    {
        $tickets = Ticket::all(); // Suponiendo que estás obteniendo los tickets de alguna manera
        return view('admin.tickets.index', compact('tickets'));
    }
}
