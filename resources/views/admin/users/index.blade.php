@extends('layouts.sidebaradmin')

@section('menuUsers', 'active')
@section('content')

<main
    class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg"
>
    <!-- Navbar -->
    <nav
        class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
        id="navbarBlur"
        navbar-scroll="true"
    >
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol
                    class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"
                >
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;"
                            >Pages</a
                        >
                    </li>
                    <li
                        class="breadcrumb-item text-sm text-dark active"
                        aria-current="page"
                    >
                        Users
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Users</h6>
            </nav>
            <div
                class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
                id="navbar"
            >
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"
                            ><i class="fas fa-search" aria-hidden="true"></i
                        ></span>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Cari Disini"
                        />
                    </div>
                </div>
                <ul class="navbar-nav justify-content-end">
                    <div class="dropdown">
                        <button
                            class="dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton"
                            aria-expanded="false"
                        >
                            {{ Auth::user()->name }}
                        </button>
                        <ul
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                        >
                            <li>
                                <a
                                    class="dropdown-item"
                                    href="{{ route('profile.edit') }}"
                                    >Profile</a
                                >
                            </li>
                            <li>
                                <form
                                    method="POST"
                                    action="{{ route('logout') }}"
                                >
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tabel Pengguna</h6>
                    </div>
                    <a
                        href="{{ route('admin.users.create') }}"
                        class="btn btn-primary mb-3"
                        >Add User</a
                    >
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                            Name & Email
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                        >
                                            Role
                                        </th>
                                        {{--
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                            Status
                                        </th>
                                        --}}
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                            Created at
                                        </th>
                                        <th
                                            class="text-secondary opacity-7"
                                        ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $user)
                                    @if ($user->role != 'admin' && $user->email != 'admin@mail.com')
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                 <div>
                                                    <img src="{{ asset('softui/img/avatar/avatar_user.webp') }}" class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">User</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $user->created_at->format('d/m/y') }}</span>
                                        </td>
                                        <td class="align-middle" style="padding-top: 1.5rem;">
                                            <a href='{{ url("users/{$user->id}/edit") }}' class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Delete</button>
                                            </form>                                            
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Projects table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table
                                class="table align-items-center justify-content-center mb-0"
                            >
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                            Project
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                        >
                                            Budget
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                        >
                                            Status
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2"
                                        >
                                            Completion
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img
                                                        src="../assets/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2"
                                                        alt="spotify"
                                                    />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">
                                                        Spotify
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="text-sm font-weight-bold mb-0"
                                            >
                                                $2,500
                                            </p>
                                        </td>
                                        <td>
                                            <span
                                                class="text-xs font-weight-bold"
                                                >working</span
                                            >
                                        </td>
                                        <td class="align-middle text-center">
                                            <div
                                                class="d-flex align-items-center justify-content-center"
                                            >
                                                <span
                                                    class="me-2 text-xs font-weight-bold"
                                                    >60%</span
                                                >
                                                <div>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-gradient-info"
                                                            role="progressbar"
                                                            aria-valuenow="60"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                            style="width: 60%"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button
                                                class="btn btn-link text-secondary mb-0"
                                            >
                                                <i
                                                    class="fa fa-ellipsis-v text-xs"
                                                ></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img
                                                        src="../assets/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2"
                                                        alt="invision"
                                                    />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">
                                                        Invision
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="text-sm font-weight-bold mb-0"
                                            >
                                                $5,000
                                            </p>
                                        </td>
                                        <td>
                                            <span
                                                class="text-xs font-weight-bold"
                                                >done</span
                                            >
                                        </td>
                                        <td class="align-middle text-center">
                                            <div
                                                class="d-flex align-items-center justify-content-center"
                                            >
                                                <span
                                                    class="me-2 text-xs font-weight-bold"
                                                    >100%</span
                                                >
                                                <div>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-gradient-success"
                                                            role="progressbar"
                                                            aria-valuenow="100"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                            style="width: 100%"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button
                                                class="btn btn-link text-secondary mb-0"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >
                                                <i
                                                    class="fa fa-ellipsis-v text-xs"
                                                ></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img
                                                        src="../assets/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2"
                                                        alt="jira"
                                                    />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">
                                                        Jira
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="text-sm font-weight-bold mb-0"
                                            >
                                                $3,400
                                            </p>
                                        </td>
                                        <td>
                                            <span
                                                class="text-xs font-weight-bold"
                                                >canceled</span
                                            >
                                        </td>
                                        <td class="align-middle text-center">
                                            <div
                                                class="d-flex align-items-center justify-content-center"
                                            >
                                                <span
                                                    class="me-2 text-xs font-weight-bold"
                                                    >30%</span
                                                >
                                                <div>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-gradient-danger"
                                                            role="progressbar"
                                                            aria-valuenow="30"
                                                            aria-valuemin="0"
                                                            aria-valuemax="30"
                                                            style="width: 30%"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button
                                                class="btn btn-link text-secondary mb-0"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >
                                                <i
                                                    class="fa fa-ellipsis-v text-xs"
                                                ></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img
                                                        src="../assets/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2"
                                                        alt="slack"
                                                    />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">
                                                        Slack
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="text-sm font-weight-bold mb-0"
                                            >
                                                $1,000
                                            </p>
                                        </td>
                                        <td>
                                            <span
                                                class="text-xs font-weight-bold"
                                                >canceled</span
                                            >
                                        </td>
                                        <td class="align-middle text-center">
                                            <div
                                                class="d-flex align-items-center justify-content-center"
                                            >
                                                <span
                                                    class="me-2 text-xs font-weight-bold"
                                                    >0%</span
                                                >
                                                <div>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-gradient-success"
                                                            role="progressbar"
                                                            aria-valuenow="0"
                                                            aria-valuemin="0"
                                                            aria-valuemax="0"
                                                            style="width: 0%"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button
                                                class="btn btn-link text-secondary mb-0"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >
                                                <i
                                                    class="fa fa-ellipsis-v text-xs"
                                                ></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img
                                                        src="../assets/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2"
                                                        alt="webdev"
                                                    />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">
                                                        Webdev
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="text-sm font-weight-bold mb-0"
                                            >
                                                $14,000
                                            </p>
                                        </td>
                                        <td>
                                            <span
                                                class="text-xs font-weight-bold"
                                                >working</span
                                            >
                                        </td>
                                        <td class="align-middle text-center">
                                            <div
                                                class="d-flex align-items-center justify-content-center"
                                            >
                                                <span
                                                    class="me-2 text-xs font-weight-bold"
                                                    >80%</span
                                                >
                                                <div>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-gradient-info"
                                                            role="progressbar"
                                                            aria-valuenow="80"
                                                            aria-valuemin="0"
                                                            aria-valuemax="80"
                                                            style="width: 80%"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button
                                                class="btn btn-link text-secondary mb-0"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >
                                                <i
                                                    class="fa fa-ellipsis-v text-xs"
                                                ></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div>
                                                    <img
                                                        src="../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2"
                                                        alt="xd"
                                                    />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">
                                                        Adobe XD
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p
                                                class="text-sm font-weight-bold mb-0"
                                            >
                                                $2,300
                                            </p>
                                        </td>
                                        <td>
                                            <span
                                                class="text-xs font-weight-bold"
                                                >done</span
                                            >
                                        </td>
                                        <td class="align-middle text-center">
                                            <div
                                                class="d-flex align-items-center justify-content-center"
                                            >
                                                <span
                                                    class="me-2 text-xs font-weight-bold"
                                                    >100%</span
                                                >
                                                <div>
                                                    <div class="progress">
                                                        <div
                                                            class="progress-bar bg-gradient-success"
                                                            role="progressbar"
                                                            aria-valuenow="100"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                            style="width: 100%"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button
                                                class="btn btn-link text-secondary mb-0"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >
                                                <i
                                                    class="fa fa-ellipsis-v text-xs"
                                                ></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Fungsi untuk menampilkan SweetAlert
        function confirmDelete(userId) {
            Swal.fire({
                title: "Yakin akan menghapus data user ini?",
                text: "Anda tidak dapat mengembalikan data yang sudah dihapus!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
                else {
                    return false;
                }
            });
        }
    </script>
</main>


        
@endsection
