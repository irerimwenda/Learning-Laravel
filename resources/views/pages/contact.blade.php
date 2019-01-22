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
                    <form>

                        <div class="okay-email">
                        <input class="email-now" placeholder="Email" type="text">
                        </div>

                        <div class="okay-email">
                        <input class="email-now" placeholder="Subject" type="text">
                        </div>
                        
                        <div class="okay-email">
                        <input class="email-now" placeholder="Message" type="text">
                        </div>

                        <button class="send-mail-btn">Send Message</button>
                    
                    </form>
                </div>

            </div>
       
@endsection()