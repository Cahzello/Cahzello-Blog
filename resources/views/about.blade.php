@extends('layouts.main')

@section('container')
<div class="container">
    <div class="container">
        <h1>Halaman About</h1>
        <h3> {{$name}} </h3>
        <h3> {{$email}} </h3>
    </div>
    <div class="container">
        <img src="img/{{$image}}" alt="{{$name}}" title="{{$name}}" width="300" class="img-thumbnail">    
    </div>
    <div class="row justify-content-center mb-5">
        <p>
            Hi, my name is Cahzello and I'm a web developer with expertise in several technologies. I have a background in web development and have worked with several different stacks including JavaScript, PHP, MySQL, Bootstrap, Laravel, and React.
        </p>
        <p>
            My passion for web development started early on, and I've spent the last several years honing my skills and gaining experience in the field. What sets me apart is my ability to work with a variety of different technologies, which allows me to take on complex projects and deliver high-quality results.
        </p>
        <p>
            My mission as a web developer is to create innovative, user-friendly websites and web applications that help businesses and individuals achieve their goals. I believe that the web is a powerful tool for communication and collaboration, and I'm always looking for ways to push the boundaries of what's possible.
        </p>
        <p>
            Throughout my career, I've had the opportunity to work on some exciting projects and achieve some notable accomplishments. For example, I was part of a team that developed a custom web application for a major e-commerce company, which helped streamline their order processing and increase efficiency.
        </p>
        <p>
            When I'm not working on web development projects, I enjoy spending time with my family, reading, and exploring new places. I'm always eager to learn and grow both personally and professionally, and I'm excited to see where my career in web development takes me next.
        </p>
        <p>
            If you're interested in learning more about my work or would like to discuss a potential project, feel free to reach out to me at [insert your contact information here]. I look forward to connecting with you!
        </p>
        
    </div>

</div>
@endsection 