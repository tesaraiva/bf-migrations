<div class="container">
  <div class="row">

    @foreach($cards as $cards)
    <div class="col-4">
      @component('components.card', [
      'title' => $cards['title'],
      'description' => $cards['description'],
      'image' => $cards['image'],
      ])
      @endcomponent
    </div>
    @endforeach
  </div>
</div>