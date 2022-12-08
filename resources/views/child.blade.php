@php
  $users = [
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random",
      "bio" => fake()->paragraph(),
      "active" => true,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=1",
      "bio" => fake()->paragraph(),
      "active" => false,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=2",
      "bio" => fake()->paragraph(),
      "active" => false,
      "alamat" => fake()->address(),
      "role" => "user"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=3",
      "bio" => fake()->paragraph(),
      "active" => true,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=4",
      "bio" => fake()->paragraph(),
      "active" => true,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=5",
      "bio" => fake()->paragraph(),
      "active" => false,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=6",
      "bio" => fake()->paragraph(),
      "active" => false,
      "alamat" => fake()->address(),
      "role" => "user"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=7",
      "bio" => fake()->paragraph(),
      "active" => true,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=8",
      "bio" => fake()->paragraph(),
      "active" => true,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=9",
      "bio" => fake()->paragraph(),
      "active" => false,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=10",
      "bio" => fake()->paragraph(),
      "active" => false,
      "alamat" => fake()->address(),
      "role" => "user"
    ],
    [
      "nama" => fake()->name(),
      "foto" => "https://picsum.photos/300/200?random=11",
      "bio" => fake()->paragraph(),
      "active" => true,
      "alamat" => fake()->address(),
      "role" => "admin"
    ],
  ];

  $filter = [
    "active" => true,
    "role" => "admin"
  ];
@endphp


@extends("parent")
@php($favicon = "./favicon.ico")
@section("favicon", $favicon)
@section("title", "Tugas Laravel 1")

@section("content")
  <div class="mt-5">
    <h2>User Dengan Role Admin Dan Status Aktif True</h2>

    {{-- <form action="{{ route('home') }}" class="mb-5">
      <div class="row gx-5 mb-3">
        <div class="col-2">
          <h6>Role :</h6>
          <select class="form-select" aria-label="Default select example">
            <option value="admin" selected>Admin</option>
            <option value="user">User</option>
          </select>
        </div>
  
        <div class="col-2">
          <h6>Status :</h6>
          <select class="form-select" aria-label="Default select example">
            <option value="true" selected>Aktif</option>
            <option value="false">Tidak Aktif</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Filter</button>
    </form> --}}

    <div class="d-flex flex-wrap">
      @foreach ($users as $user)
        @if ($filter["active"] == $user["active"] && $filter["role"] == $user["role"])
          @include("components.card", ["user" => $user])
        @endif
      @endforeach
    </div>
  </div>
@endsection
