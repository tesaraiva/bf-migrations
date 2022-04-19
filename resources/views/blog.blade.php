@extends ('master.main')

@section('pageTitle', 'Blog')

@section('content')

<section class="container">
  <div class="row justify-content-center mb-4">
    <div class="col-8">
      <header class="row bg-dark mt-5 text-light p-4">
        <div class="col-8">
          <h1 class="font-italic">Title of a longer featured blog post</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, nihil? Repudiandae incidunt, architecto magni dolore numquam error minus totam possimus nobis sit doloribus neque perferendis vero.</p>
          <p>Continue reading...</p>
        </div>
      </header>

      <div class="row mt-4 mb-3">
        <div class="col-8">
          <header>
            <h5 class="font-italic font-weight-bold text-black">
              Daily News
            </h5>
          </header>
          <hr>
          @foreach($posts as $post)
          @component('components.blog-post', [
          'title' => $post['title'],
          'date' => $post['date'],
          'author' => $post['author'],
          'text' => $post['text'],
          ])
          @endcomponent
          @endforeach
        </div>

        <aside class="col-4">
          <ul class="list-unstyled">
            <h6 class="font-italic font-weight-bold text-black">Archives</h6>
            <li>
              <a href="#">March 2014</a>
            </li>
            <li>
              <a href="#">February 2014</a>
            </li>
            <li>
              <a href="#">January 2014</a>
            </li>
            <li>
              <a href="#">December 2013</a>
            </li>
            <li>
              <a href="#">November 2013</a>
            </li>
            <li>
              <a href="#">October 2013</a>
            </li>
            <li>
              <a href="#">September 2013</a>
            </li>
            <li>
              <a href="#">August 2013</a>
            </li>
            <li>
              <a href="#">July 2013</a>
            </li>
            <li>
              <a href="#">June 2013</a>
            </li>
            <li>
              <a href="#">May 2013</a>
            </li>
            <li>
              <a href="#">April 2013</a>
            </li>
          </ul>

          <ul class="list-unstyled">
            <h6 class="font-italic font-weight-bold text-black mt-4">Elsewhere</h6>
            <li>
              <a href="#">GitHub</a>
            </li>
            <li>
              <a href="#">Twitter</a>
            </li>
            <li>
              <a href="#">Facebook</a>
            </li>
          </ul>

        </aside>
      </div>
    </div>
  </div>
</section>

@endsection