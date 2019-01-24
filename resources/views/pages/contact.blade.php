@extends('main')

@section('title', '| Contact')

@section('content')

                <div class="title m-b-md">
                    CONTACT
                </div>
                <p>Contact me right now !!</p>

                <div class="links">
                    <a href="/">Home</a>
                    <a href="about">About</a>
                    <a href="contact">Contact</a>
                    <a href="create">Create</a>
                 </div>


                 <div class="email-form">

                    <form action="{{ url('contact') }}" method="POST">
                     {{csrf_field()}}

                        <div class="okay-email">
                        <input name="email" class="email-now" placeholder="Email" type="email">
                        </div>

                        <div class="okay-email">
                        <input name="subject" class="email-now" placeholder="Subject" type="text">
                        </div>
                        
                        <div class="okay-email">
                        <textarea name="message" class="email-textarea" rows="5" cols="52"  placeholder="Message..." type="text"></textarea>
                        </div>

                        <button type="submit" class="send-mail-btn">Send Message</button>
                    
                    </form>
                </div>

            </div>
       
@endsection()