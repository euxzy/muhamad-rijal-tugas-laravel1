<div class="card m-2" style="width: 18rem;">
  <img src="{{ $user["foto"] }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $user["nama"] }} | <span class="card-text">{{ $user["role"] }}</span></h5>
    <p class="card-text mb-2">Alamat : {{ $user["alamat"] }}</p>
    <p class="card-text">{{ $user["bio"] }}</p>
  </div>
</div>