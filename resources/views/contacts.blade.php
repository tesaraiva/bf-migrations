@extends('master.main')

@section('pageTitle', 'Contacts')

@section('content')

<section class="container">
  <div class="row justify-content-center my-5">
    <div class="col-6">
      <h1 class="text-center mb-5">Contact Us</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iure! </p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reprehenderit harum atque cupiditate distinctio porro recusandae minima vero voluptatem sed quas asperiores nihil officiis tenetur, quisquam quo. Culpa, magnam recusandae!</p>
      <p>Nesciunt eaque explicabo porro a totam! Aliquid voluptas cupiditate illum ducimus saepe dicta eaque iste provident id? Dicta, enim voluptatibus.</p>
      <form>
        <div class="form-group">
          <label for="formGroupExampleInput">Email address</label>
          <input type="text" class="form-control" id="formGroupExampleInput">
          <h6 class="text-black-50 mt-2">We'll never share your email with anyone else.</h6>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Messages</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
      </form>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            I Agree to Terms
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
  </div>
</section>

@endsection