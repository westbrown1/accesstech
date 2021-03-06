@extends('layouts.app') 

@section('title', '| About Us | Wilmington NC Web Design') 

@section('content')
<div class=row>
    <div class="col-md-10 col-md-offset-1 text-justify well" id=aboutus>
        <div class="about text-center"> 
        <img src=/images/photo.jpg alt="West Brown" class=img-rounded>
            <h5>Jeffrey West Brown, Website Builder</h5>
            <hr>
            <p>Hi. I'm West Brown. The founder of AccessTech.io. I'm a native of Wilmington, NC. And a graduate of The University of North Carolina, Chapel Hill. I received a degree in Economics, we'll just say a long time ago. Not too long ago I discovered something I really love to do. Design web applications and websites. So. Now I'm a web developer and design specialist. Our goal here at AccessTech.io is to make sure your users' interface experience is clear. Productive. Seamless. And enjoyable. We are here to help you. Together. We'll make sure your customers know. They are being taken care of.
                <br>
                <br> As for me. I also enjoy spending time with my 10 year old son. He likes to surf. Play basketball. Tennis. Golf. And is one impressive swimmer. He enjoys his time on beautiful Wrightsville Beach, NC as much as I do. Please allow me to assist you in your web design needs. I am happy to help. You can call/text me at 910-200-1391.
                <br>
                <br> {{Html::mailto('lawsonsdad@gmail.com', 'Email West')}}
                <br><a href=/contact>All Contact Info</a>
                <br><a href=/pricing>Back to Pricing</a>
                <br><a href=/>Home</a>
        </div>
    </div>
</div> 
@stop