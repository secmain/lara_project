<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;
use App\Blog;
use App\Photo;
use App\Event;
use App\Contact;
use App\Blog_masta;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Message;


class CamecafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Response::view('blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postContact(ContactFormRequest $request)
    {
        /*
        //
        \Mail::send('emails.hello', ['name' => 'tanaka'], function (Message $message) {
            $message->to('circlecle4586@gmail.com', '太郎')
                    ->subject('お知らせ');
        });
        */
        Contact::create($request->all());
        return view('camecafe.contact.contact_end');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getContact()
    {
        //
        return view('camecafe.contact.contact');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTop()
    {
        return view('camecafe.toppage.top');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBlogs($blog_type = null)
    {
        //
        if ($blog_type) {
            $blogs = Blog_masta::where('blog_type', '=', $blog_type)->orderBy('id')->paginate(3);    
        }
        $blogs = Blog_masta::orderBy('id')->paginate(3);
        return view('camecafe.blogs.blogs')->with('blogs', $blogs);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getBlog($id)
    {
        //
        $blog = Blog::find($id);
        return view('camecafe.blogs.blog_detail')->with('blog', $blog);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPhotos()
    {
        //
        $photos = Photo::orderBy('id')->paginate(8);
        return view('camecafe.photo.photos')->with('photos', $photos);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEvents()
    {
        //
        $events = Event::orderBy('id')->paginate(5);
        return view('camecafe.events.events')->with('events', $events);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEvent($id)
    {
        //
        $event = Event::find($id);
        return view('camecafe.events.event_detail')->with('event', $event);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFaq()
    {
        //
        $faqs = Faq::orderBy('id')->paginate(5);
        return view('camecafe.faqs.faq')->with('faqs', $faqs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
